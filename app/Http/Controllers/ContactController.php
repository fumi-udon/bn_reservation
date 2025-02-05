<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display contact form
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Process the form submission
     */
    public function submit(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:8|max:20',
            'inquiry_type' => 'required|string|in:Reservation,Employment,Business,Feedback,Other',
            'message' => 'nullable|string|max:1000',
        ]);

        // WhatsAppのURLを生成
        $whatsappNumber = '21654872429'; // チュニジアの国番号+電話番号
        $message = $this->formatWhatsAppMessage($validated);

        return response()->json([
            'whatsapp_url' => "https://wa.me/{$whatsappNumber}?text=" . urlencode($message)
        ]);
    }

    /**
     * Format message for WhatsApp
     */
    private function formatWhatsAppMessage($data)
    {
        return "*New Contact Form Submission*\n" .
               "Name: {$data['name']}\n" .
               "Phone: {$data['phone']}\n" .
               "Type: {$data['inquiry_type']}\n" .
               "Message: {$data['message']}";
    }
}