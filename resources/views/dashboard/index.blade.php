@extends('dashboard.layout.app')
@section('content')

<div class="container-fluid main-content px-2 px-lg-4">
        <div class="row my-2 g-3 g-lg-4">
          <div class="col-md-6">
            <div class="price-box">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-white mb-0">Main Balance</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($user->balance, 2) ?? '' }}</h4>
                </div>
{{--                <img src="assets/img/crypto/bitcoin.png" alt="">--}}
              </div>
              <div class="chart">
                <canvas id="chart_3"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="price-box">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-white mb-0">Total Traded</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($totalCurrentValue, 2) ?? '' }}</h4>
                </div>
                  <div>
                 <p class="text-white mb-0">Profit</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($user->profit, 2) ?? '' }}</h4>
                </div>
              </div>
              <div class="chart">
                <canvas id="chart_2"></canvas>
              </div>
            </div>
          </div>
            <div class="col-md-4">
            <div class="price-box">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-white mb-0">Crypto Holdings</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($crypto, 2) ?? '' }}</h4>
                </div>
                  <div>
                 <p class="text-white mb-0">Profit</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($user->crypto_profit, 2) ?? '' }}</h4>
                </div>
              </div>
              <div class="chart">
                <canvas id="chart_5"></canvas>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="price-box">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-white mb-0">Total Deposit</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($deposit, 2) ?? '' }}</h4>
                </div>
{{--                <img src="assets/img/crypto/dogecoin.png" alt="">--}}
              </div>
              <div  class="chart">
                <canvas id="chart_4"></canvas>
              </div>
            </div>
          </div>

            <div class="col-md-4">
            <div class="price-box">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-white mb-0">Total Withdrawal</p>
                  <h4 class="fw-semibold text-white my-2">${{ number_format($withdrawal, 2) ?? '' }}</h4>
                </div>
{{--                <img src="assets/img/crypto/binance.png" alt="">--}}
              </div>
              <div class="chart">
                <canvas id="chart_5"></canvas>
              </div>
            </div>
          </div>


        </div>

        <!-- Main Chart Area -->


        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
          <div class="col-xl-12 col-xxl-12">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                      <div class="tradingview-widget-container__widget"></div>
                      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                          </a></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                      {
                      "exchanges": [],
                      "dataSource": "SPX500",
                      "grouping": "sector",
                      "blockSize": "market_cap_basic",
                      "blockColor": "change",
                      "locale": "en",
                      "symbolUrl": "",
                      "colorTheme": "dark",
                      "hasTopBar": false,
                      "isDataSetEnabled": false,
                      "isZoomEnabled": true,
                      "hasSymbolTooltip": true,
                      "isMonoSize": false,
                      "width": "100%",
                      "height": 500
                    }
                      </script>
                    </div>
                    <!-- TradingView Widget END -->

                 <div class="col-12">
                <div class="referral-section">
                    <p>Referral link:</p>
                    <div class="input-group">
                        <input
                            type="text"
                            value="{{ route('register', ['ref' => auth()->user()->referral->code]) }}"
                            id="referralLink"
                            readonly
                            class="form-control"
                        >
                        <button
                            class="btn btn-primary"
                            onclick="copyReferral()"
                        >
                            Copy
                        </button>
                    </div>
                </div>

                <script>
                    function copyReferral() {
                        var copyText = document.getElementById("referralLink");
                        copyText.select();
                        document.execCommand("copy");
                        alert("Referral link copied!");
                    }
                </script>
{{--                <a href="{{ url('/register?ref=' . auth()->user()->referral->code ?? '') }}">Your referral link</a>--}}
            </div>
            </div>
          </div>
        </div>

        @include('dashboard.layout.footer')

     <div style="display: none" class="row my-2 g-3 gx-lg-4">
          <div class="col-xl-7 col-xxl-9">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
              <div class="d-flex w-100 flex-wrap justify-content-between pb-4 bottom-border">
                <h4 class="mb-0">Monthly Overall Growth</h4>
                <div class="d-flex align-items-center gap-3">
                  <button class="outline-btn">Week</button>
                  <button class="outline-btn">Month</button>
                  <button class="outline-btn">Year</button>
                </div>
              </div>
              <div class="chart-container">
                <canvas id="chart_1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-3">
            <div class="doughnut">
              <div id="donut_wrapper" class="position-relative">
                <div id="donutchart"></div>
              </div>
              <p class="large text-center mt-3">Total Balance</p>
              <h3 class="text-white text-center">0.3475948</h3>
              <p class="primary text-center">11,032.24 USD</p>
              <div class="d-flex justify-content-center">
                <button class="primary-btn">Withdraw</button>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection
