<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Account Types</title>
{{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">--}}
  <style>
    .account-card {
      border-radius: 12px;
      padding: 30px 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
      text-align: center;
      transition: all 0.3s ease;
    }
    .account-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .account-title {
      font-weight: bold;
      font-size: 1.2rem;
      margin-bottom: 20px;
    }
    .btn-outline-dark {
      border-radius: 25px;
      padding: 10px 20px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center fw-bold mb-3">CHOOSE YOUR ACCOUNT TYPE</h2>
  <p class="text-center mb-5">You don’t have an account yet? Start trading with Boom Asset Market</p>

  <div class="row g-4 justify-content-center">
    <!-- GOLD -->
    <div class="col-md-4">
      <div class="account-card border">
        <div class="account-title text-white bg-success py-2">GOLD</div>
        <p><strong>Starting Deposit</strong><br>$10,000</p>
        <p><strong>Instruments</strong><br>FX, Metals, CFDs,<br>Cryptos</p>
        <p><strong>Minimum Lot Size</strong><br>0.01 lots FX</p>
        <p><strong>Max Leverage</strong><br>1:500</p>
         <a href="{{ route('user.dashboard') }}" class="btn btn-outline-dark">GET STARTED</a>
      </div>
    </div>

    <!-- DIAMOND -->
    <div class="col-md-4">
      <div class="account-card border">
        <div class="account-title text-white bg-secondary py-2">DIAMOND</div>
        <p><strong>Starting Deposit</strong><br>$25,000</p>
        <p><strong>Instruments</strong><br>FX, Metals, CFDs,<br>Cryptos</p>
        <p><strong>Minimum Lot Size</strong><br>0.01 lots FX</p>
        <p><strong>Max Leverage</strong><br>1:500</p>
        <a href="{{ route('user.dashboard') }}" class="btn btn-outline-dark">GET STARTED</a>
      </div>
    </div>

    <!-- PLATINUM -->
    <div class="col-md-4">
      <div class="account-card border">
        <div class="account-title text-white bg-success py-2" >PLATINUM</div>
        <p><strong>Starting Deposit</strong><br>$100,000</p>
        <p><strong>Instruments</strong><br>FX, Metals, CFDs,<br>Cryptos</p>
        <p><strong>Minimum Lot Size</strong><br>0.01 lots FX</p>
        <p><strong>Max Leverage</strong><br>1:200</p>
        <a href="{{ route('user.dashboard') }}" class="btn btn-outline-dark">GET STARTED</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
