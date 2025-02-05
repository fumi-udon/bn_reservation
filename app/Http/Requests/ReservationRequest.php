<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // falseからtrueに変更
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // ReservationRequest.php
    public function rules()
    {
        // タイムゾーンを設定してnow()を使用
        $now = now()->timezone('Africa/Tunis');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|min:8|max:12|regex:/^[0-9]+$/',
            'date' => [
                'required',
                'date',
                'after:' . $now->addDays(config('reservation_bn.booking_start_days') - 1),
                'before:' . $now->addDays(config('reservation_bn.booking_end_days')),
                function ($attribute, $value, $fail) {
                    $date = \Carbon\Carbon::parse($value)->timezone('Africa/Tunis');
                    if ($date->isSunday()) {
                        $fail('Sorry, we are closed on Sundays.');
                    }
                },
            ],
            'time' => 'required|in:' . implode(',', config('reservation_bn.available_times')),
            'guests' => [
                'required',
                'integer',
                'min:' . config('reservation_bn.min_guests'),
                'max:' . config('reservation_bn.max_guests'),
            ],
            'notes' => 'nullable|string|max:1000',
        ];
    }

    /**
     * Custom error messages
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number must contain only numbers.',
            'date.required' => 'Reservation date is required.',
            'date.after' => 'Please select a date from tomorrow onwards.',
            'time.required' => 'Reservation time is required.',
            'time.in' => 'Please select a valid reservation time.',
            'guests.required' => 'Number of guests is required.',
            'guests.integer' => 'Please select a valid number of guests.',
            'guests.min' => 'Minimum reservation is for 1 guest.',
            'guests.max' => 'For parties of 8 or more, please contact us by phone.',
        ];
    }

    /**
     * バリデーション前の準備
     */
    protected function prepareForValidation()
    {
        // 電話番号からハイフンを除去
        if ($this->has('phone')) {
            $this->merge([
                'phone' => str_replace('-', '', $this->phone)
            ]);
        }
    }
}
