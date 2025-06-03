<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }
        .card-body {
            padding: 30px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            vertical-align: middle;
        }
        table {
            margin-top: 20px;
        }
        .card-footer {
            background-color: #f1f1f1;
            padding: 15px;
            font-size: 14px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <h2>Withdrawal Approval</h2>
            </div>
            <div class="card-body">
                <p>Dear <strong>{{ $withdraw->user->name ?? '' }}</strong>,</p>
                <p>Your withdrawal has been successfully approved. Your account will be credited shortly:</p>
                <table class="table table-bordered">
                    <tr><th>Transaction ID:</th><td>{{ $withdraw->id."#" }}</td></tr>
                    <tr><th>Amount:</th><td>${{ number_format($withdraw->amount, 2) ?? '' }}</td></tr>
                    <tr><th>Withdrawal Method:</th><td>{{ $withdraw->payment_method ?? '' }}</td></tr>
                    <tr><th>Payment Details:</th>
                        <td>
                            @if($withdraw->payment_method == 'crypto')
                                {{ $withdraw->wallet ?? '' }}<br>{{ $withdraw->address ?? '' }}
                            @elseif($withdraw->payment_method == 'bank')
                                {{ $withdraw->bank_name ?? '' }}<br>{{ $withdraw->acct_name ?? '' }}<br>{{ $withdraw->acct_number ?? '' }}
                            @else
                                {{ $withdraw->paypal ?? '' }}
                            @endif
                        </td>
                    </tr>
                </table>
                <p class="mt-4">For any questions, contact us at <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>.</p>
                <p>Thank you for choosing {{ env('APP_NAME') }}!</p>
                <p>Best regards,<br><strong>The Finance Team</strong></p>
            </div>
            <div class="card-footer text-center text-muted">
                © {{ date('Y') }} {{ env('APP_NAME') }} - All Rights Reserved
            </div>
        </div>
    </div>
</body>
</html>
