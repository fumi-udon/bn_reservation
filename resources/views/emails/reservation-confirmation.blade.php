<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .reservation-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- 既存のコンテンツ -->

    <hr style="margin: 30px 0;">
    <h2>Reservation Confirmation</h2>
    <!-- 予約情報のサマリー（追加） -->
    <div class="reservation-summary" style="margin: 20px 0; padding: 15px; background: #f8f9fa; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; width: 120px;"><strong>Name:</strong></td>
                <td style="padding: 8px;">{{ $reservation->name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;"><strong>Date:</strong></td>
                <td style="padding: 8px;">{{ Carbon\Carbon::parse($reservation->date)->format('F j, Y') }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;"><strong>Time:</strong></td>
                <td style="padding: 8px;">{{ $reservation->time }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;"><strong>Guests:</strong></td>
                <td style="padding: 8px;">{{ $reservation->guests }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;"><strong>Phone:</strong></td>
                <td style="padding: 8px;">{{ $reservation->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 8px;"><strong>Email:</strong></td>
                <td style="padding: 8px;">{{ $reservation->email }}</td>
            </tr>
        </table>
    </div>
    <div class="important-notice"
        style="background: #fff8f8; padding: 20px; border-radius: 5px; border-left: 4px solid #dc3545;">
        <h4 style="color: #dc3545;">
            <i class="bi bi-exclamation-circle-fill"></i> Important Information
        </h4>
        <ul style="color: #dc3545; margin: 0; padding-left: 20px;">
            <li>
                ⚠️ Cancellations: As a small venue, we kindly request cancellation notice by phone or WhatsApp.
            </li>
            <li>
                ⏰ Late Arrival: Reservations will be automatically canceled after 20 minutes delay.
            </li>
        </ul>
    </div>

    <div class="restaurant-info" style="background: #f8f9fa; padding: 15px; border-radius: 5px; margin-top: 20px;">
        <h4>Restaurant Information</h4>
        <p>
            {{ config('reservation_bn.restaurant_info.name') }}<br>
            <strong>Address:</strong> {{ config('reservation_bn.restaurant_info.address') }}<br>
            <strong>Phone:</strong> {{ config('reservation_bn.restaurant_info.phone') }}<br>
        </p>
    </div>

    <p style="margin-top: 20px; font-size: 0.9em; color: #666;">
        This is an automated confirmation email. Please do not reply to this message.
    </p>
</body>

</html>
