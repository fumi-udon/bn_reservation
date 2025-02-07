<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Mail\ReservationConfirmation;
use App\Http\Requests\ReservationRequest;
use App\Models\KiConfiguration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    private const URL1 = 'https://bistronippon.tn/buzy_tel';
    private const URL2 = 'https://bistronippon.tn/buzy_impossible';
    private const URL3 = 'https://bistronippon.tn/close_info';

    private $openMode = null;  // DBの結果をキャッシュ

    public function __construct()
    {
        try {
            $result = DB::select('SELECT open FROM wor4285_fumi_open_modes WHERE ID = 1');
            $this->openMode = !empty($result) ? $result[0]->open : 0;
        } catch (\Exception $e) {
            Log::error('Open mode 初期化エラー: ' . $e->getMessage());
            $this->openMode = 0;
        }
    }

    //debug
    public function reservation_wa()
    {
        // reservationページの設定を取得
        $config = KiConfiguration::where('page_id', 'reservation')->first();

        // エラーメッセージの定義
        $errorMessages = [
            1 => 'Welcome! Our online reservation system is ready to accept your booking.',
            2 => 'System Maintenance Notice: We are currently updating our reservation system.',
            3 => 'We are experiencing high demand and are fully booked. ',
            4 => 'Holiday Notice: Our restaurant is currently closed for vacation. We look forward to serving you upon our return. For future reservations, please check back soon.'
        ];

        // 設定が存在し、status1が設定されている場合
        if ($config) {
            $status = $config->status1;
            $message = $errorMessages[$status] ?? 'System status unknown.';

            return view('reservations.form_wa', [
                'status' => $status,
                'message' => $message,
                'config' => $config
            ]);
        }

        // 設定が存在しない場合は通常表示
        return view('reservations.form_wa', [
            'status' => 1,
            'message' => $errorMessages[1],
            'config' => null
        ]);
    }

    /**
     * TOP
     */
    public function showForm()
    {
        // ページ setting
        switch ($this->openMode) {
            case 1:
                return redirect(self::URL1);
            case 2:
                return redirect(self::URL2);
            case 3:
                return redirect(self::URL3);
            case 0:
            default:
                // リダイレクトせずに処理を続行
                break;  // ここがポイント
        }

        // // reservationページの設定を取得
        // $config = KiConfiguration::where('page_id', 'reservation')->first();

        // // エラーメッセージの定義
        // $errorMessages = [
        //     1 => 'Welcome! Our online reservation system is ready to accept your booking.',
        //     2 => 'System Maintenance Notice: We are currently updating our reservation system.',
        //     3 => 'We are experiencing high demand and are fully booked. ',
        //     4 => 'Holiday Notice: Our restaurant is currently closed for vacation. We look forward to serving you upon our return. For future reservations, please check back soon.'
        // ];

        // // 設定が存在し、status1が設定されている場合
        // if ($config) {
        //     $status = $config->status1;
        //     $message = $errorMessages[$status] ?? 'System status unknown.';

        //     return view('reservations.form', [
        //         'status' => $status,
        //         'message' => $message,
        //         'config' => $config
        //     ]);
        // }

        // // 設定が存在しない場合は通常表示
        return view('reservations.form', [
            'status' => 1,
            'message' => $errorMessages[1],
            'config' => null
        ]);
    }


    public function confirm(ReservationRequest $request)
    {
        $validated = $request->validated();

        // ブラックリストチェック
        if (in_array($validated['email'], config('reservation_bn.blocked_emails'))) {
            return back()->with(
                'error',
                'We apologize, but we are unable to accept your reservation at this time. ' .
                    'For more information, please contact us at ' . config('reservation_bn.restaurant_info.phone') . '.'
            );
        }

        return view('reservations.confirm', compact('validated'));
    }

    // ReservationController.phpでの実装例
    // ReservationController.php のstoreメソッドを修正
    public function store(ReservationRequest $request)
    {
        try {
            // ブラックリストチェック
            if (in_array($request->email, config('reservation_bn.blocked_emails'))) {
                return back()->with(
                    'error',
                    'We apologize, but we are unable to accept your reservation at this time. ' .
                        'For more information, please contact us at ' . config('reservation_bn.restaurant_info.phone') . '.'
                );
            }

            // DBに保存
            $reservation = Reservation::create($request->validated());

            // 開発環境ではメール送信をスキップ
            if (app()->environment('production')) {
                // 本番環境のみメール送信
                try {
                    Mail::to($request->email)
                        ->send(new ReservationConfirmation($reservation));

                    // Mail::to(config('reservation_bn.admin_email'))
                    //     ->send(new ReservationConfirmation($reservation));

                    // 管理者全員へのメール送信
                    $adminEmails = config('reservation_bn.admin_emails');

                    // 方法1: 一括送信（全員がTO欄に表示される）
                    Mail::to($adminEmails)
                        ->send(new ReservationConfirmation($reservation));
                } catch (\Exception $e) {
                    \Log::error('Mail sending failed: ' . $e->getMessage());
                    // メール送信失敗してもユーザーフローは継続
                }
            } else {
                // 開発環境ではログにメール内容を出力
                \Log::info('Reservation email would be sent to: ' . $request->email);
                \Log::info('Reservation details: ' . print_r($reservation->toArray(), true));
            }

            return redirect()
                ->route('reservation.complete')
                ->with('success', 'Thank you for your reservation. ご予約ありがとうございます。')
                ->with('reservation', $reservation);
        } catch (\Exception $e) {
            \Log::error('Reservation Error: ' . $e->getMessage());

            return back()
                ->with('error', 'An error occurred during the reservation process. Please try again./ 予約処理中にエラーが発生しました。')
                ->withInput();
        }
    }

    public function complete()
    {
        return view('reservations.complete');
    }
}
