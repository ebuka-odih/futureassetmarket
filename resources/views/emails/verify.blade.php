<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Your Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN (Email clients may not render external styles, but basic layout will still hold) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 2rem;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 6px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.75rem 1.25rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="email-container">
    <h2 class="text-center mb-4">Welcome to {{ config('app.name') }}</h2>

    <p>Hi there,</p>
    <p>Thanks for signing up. Please confirm your email address by clicking the button below:</p>

    <div class="text-center my-4">
        <a href="{{ $url }}" class="btn btn-primary">Verify Email Address</a>
    </div>

    <p>If you didn’t create an account, you can safely ignore this email.</p>

    <hr>
    <p class="text-muted" style="font-size: 0.9rem;">This link will expire in {{ config('auth.verification.expire', 60) }} minutes.</p>
</div>

</body>
</html>
