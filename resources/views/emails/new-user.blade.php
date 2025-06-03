<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h2>New User Signed Up</h2>
            </div>
            <div class="card-body">
                <p>Hello Admin,</p>
                <p>A new user has just signed up on <strong>{{ env('APP_NAME') }}</strong>.</p>
                <table class="table table-striped">
                    <tr>
                        <th>Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
                <p>You can review the user details in the admin dashboard.</p>
                <a href="{{ url('/admin') }}" class="btn btn-primary">Go to Dashboard</a>
            </div>
            <div class="card-footer text-center text-muted">
                © {{ date('Y') }} {{ env('APP_NAME') }} - All Rights Reserved
            </div>
        </div>
    </div>
</body>
</html>
