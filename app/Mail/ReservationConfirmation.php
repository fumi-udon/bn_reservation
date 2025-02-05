<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        $date = Carbon::parse($this->reservation->date)->format('m/d');
    
        return $this
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->replyTo('currykitano@gmail.com', 'Japanese Curry Kitano')
            ->subject(
                sprintf(
                    'KI-%s %s %s名様 - ご予約確認', // 緊急性を強調
                    $date,
                    $this->reservation->time,
                    $this->reservation->guests
                )
            )
            ->priority(1)
            ->withSwiftMessage(function ($message) {
                $headers = $message->getHeaders();
                
                // 標準的な優先度ヘッダー
                $headers->addTextHeader('X-Priority', '1')
                       ->addTextHeader('Priority', 'Urgent')
                       ->addTextHeader('X-MSMail-Priority', 'High')
                       ->addTextHeader('Importance', 'High')
                       
                    // Gmailの優先度判定に影響を与えるヘッダー
                    ->addTextHeader('X-Google-Priority', 'high')
                    ->addTextHeader('X-Urgent', 'high')
                    ->addTextHeader('X-Importance', '1')
                       
                    // メールクライアント互換性のためのヘッダー
                    ->addTextHeader('X-Precedence', 'urgent')
                    ->addTextHeader('Precedence', 'urgent')
                       
                    // メッセージの性質を示すヘッダー
                    ->addTextHeader('X-Message-Type', 'URGENT-RESERVATION')
                    ->addTextHeader('X-Message-Info', 'HIGH_PRIORITY_BOOKING')
                       
                    // 既存のヘッダー
                    ->addTextHeader('X-Entity-Ref-ID', 'urgent-reservation-'.time())
                    ->addTextHeader('X-Sender-Domain', 'bistronippon.tn')
                    ->addTextHeader('X-Auto-Response-Suppress', 'OOF, AutoReply');
    
                // Content-Typeヘッダーの拡張
                $message->setContentType('text/html; charset=utf-8; importance=high; priority=urgent');
            })
            ->view('emails.reservation-confirmation');
    }
}