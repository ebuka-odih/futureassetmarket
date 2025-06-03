<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} Sell Order Confirmation</title>
    <!-- Bootstrap CDN -->
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
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #054d15; /* Bootstrap danger (red) for sell */
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
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
            <h2>Sell Order Processed</h2>
            <p>Your sell order has been successfully completed!</p>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Hello {{ $order->user->name ?? ''}},</p>
            <p>We’ve processed your sell order for <strong>{{ $order->stock->symbol ?? ''}}</strong>. Below are the details:</p>

            <!-- Order Details Table -->
            <table class="table table-bordered">
                <tr>
                    <th>Stock Symbol</th>
                    <td>{{ $order->stock->symbol ?? ''}}</td>
                </tr>
                <tr>
                    <th>Shares Sold</th>
                    <td>{{ number_format($order->shares, 4) ?? ''}}</td>
                </tr>
                <tr>
                    <th>Sell Price</th>
                    <td>{{ number_format($order->price, 2) ?? ''}} USD</td>
                </tr>
                <tr>
                    <th>Total Amount Credited</th>
                    <td>{{ number_format($order->amount, 2) ?? ''}} USD</td>
                </tr>
                <tr>
                    <th>Transaction Date</th>
                    <td>{{ $order->filled_at->format('F j, Y, g:i a') ?? ''}}</td>
                </tr>
                <tr>
                    <th>Updated Balance</th>
                    <td>{{ number_format($order->user->balance, 2) ?? ''}} USD</td>
                </tr>
            </table>

        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }}. All rights reserved.</p>
            <p>If you didn’t initiate this action, contact us at <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>.</p>
        </div>
    </div>
</body>
</html>
