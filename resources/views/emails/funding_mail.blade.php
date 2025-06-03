<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Account Funded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5 p-4 border rounded" style="background-color: #f9f9f9;">
        <h2 class="text-center text-primary mb-4">{{ config('app.name') }}</h2>
        <div class="card p-4 shadow-sm">
            <h4 class="mb-3">Hello {{ $data['user']->name ?? '' }},</h4>
            <p>We are pleased to inform you that your account has been successfully funded with:</p>
           <h3 class="text-success">$ {{ number_format($data['profit'], 2) ?: number_format($data['balance'], 2) }}</h3>
            <p class="mt-4">Thank you for choosing {{ config('app.name') }}. We appreciate your trust in us.</p>
            <p>Feel free to contact our support team if you have any questions.</p>
            <p class="mt-4">Best regards,</p>
            <p><strong>{{ env('APP_NAME') }} Team</strong></p>
        </div>
    </div>
</body>
</html>
