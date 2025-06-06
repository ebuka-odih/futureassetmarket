<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th, td {
      padding: 5px;
      text-align: left;
    }
    </style>
</head>
<body>


    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-black text-white">
                 <h2 class="mb-0">{{ env('APP_NAME') }}</h2>

            </div>
            <div class="card-body">
                 <h5 class="text-center">Deposit Confirmation</h5>
                <p>Dear <strong>{{ $deposit->user->name ?? '' }}</strong>,</p>
                <p>We have received your deposit request. Here are the details of your transaction:</p>
                <table style="width:100%" class="table table-striped">
                  <tr>
                    <th>Transaction ID:</th>
                     <td>{{ $deposit->id."#" }}</td>
                  </tr>
                  <tr>
                    <th>Amount:</th>
                    <td>${{ number_format($deposit->amount, 2) ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>Deposit Method:</th>
                    <td>{{ $deposit->payment_method->wallet ?? '' }}</td>
                  </tr>
                  <tr>
                    <th>Date:</th>
                    <td>{{ date('d M, Y', strtotime($deposit->created_at)) }}</td>
                  </tr>
                </table>

                <p class="mt-4">If you have any questions or concerns regarding this transaction, feel free to contact us <a target="_blank" href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>.</p>

                <p>Thank you for choosing our service!</p>

                <p>Best regards,<br><strong>The Finance Team</strong></p>
            </div>
            <div class="card-footer text-center text-muted">
                © {{ Date('Y') }} {{ env('APP_NAME') }} - All Rights Reserved
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
