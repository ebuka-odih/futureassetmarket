<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Bootstrap CDN (updated to 5.3 for modern styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Inline styles for email client compatibility */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #054d15; /* Green for buy */
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            font-size: 14px;
            color: #333333;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }
        .table th, .table td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h2>Buy Order Processed</h2>
            <p>Your Buy Order Has Been Processed</p>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Dear {{ $order->user->name }},</p>
            <p>We’re excited to inform you that your recent stock purchase has been successfully completed. Here are the details:</p>

            <!-- Order Details Table -->
            <table class="table table-bordered">
                <tr>
                    <th>Stock Symbol</th>
                    <td>{{ $order->stock->symbol }}</td>
                </tr>
                <tr>
                    <th>Shares Purchased</th>
                    <td>{{ number_format($order->shares, 2) }}</td>
                </tr>
                <tr>
                    <th>Buy Price</th>
                    <td>{{ number_format($order->price, 2) }} USD</td>
                </tr>
                <tr>
                    <th>Total Amount Spent</th>
                    <td>{{ number_format($order->amount, 2) }} USD</td>
                </tr>
                <tr>
                    <th>Transaction Date</th>
                    <td>{{ $order->filled_at->format('F j, Y, g:i a') }}</td>
                </tr>
                <tr>
                    <th>Updated Balance</th>
                    <td>{{ number_format($order->user->balance, 2) }} USD</td>
                </tr>
            </table>


        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
            <p>If you didn’t initiate this purchase, contact us at <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>.</p>
        </div>
    </div>
</body>
</html>
