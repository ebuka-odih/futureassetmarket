@extends('dashboard.layout.app')
@section('content')



    <div class="container-fluid main-content px-2 px-lg-4 ">


        <!-- Main Chart Area -->
        <div class="row my-2 g-3 gx-lg-4 exchange">
            <div class="col-xl-7 col-xxl-8">
                <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js"
                                async>
                            {
                                "width"
                            :
                                "100%",
                                    "height"
                            :
                                500,
                                    "symbol"
                            :
                                "BINANCE:BTCUSD",
                                    "interval"
                            :
                                "D",
                                    "timezone"
                            :
                                "Etc/UTC",
                                    "theme"
                            :
                                "dark",
                                    "style"
                            :
                                "1",
                                    "locale"
                            :
                                "en",
                                    "allow_symbol_change"
                            :
                                true,
                                    "calendar"
                            :
                                false,
                                    "support_host"
                            :
                                "https://www.tradingview.com"
                            }
                        </script>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="doughnut">

                    <div>

                        <div class="container">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('user.placeTrade') }}" method="POST">
                            @csrf


                            <div class="market-trade-buy col-md-12 col-lg-12">
                                <div class="form-group mb-3">
                                <label for="marketType">Market Type</label>
                                <select name="trade_pair_id" id="marketType" class="form-control">
                                    <option value="crypto">Crypto</option>
                                    <option value="forex">Forex</option>
                                    <option value="stock">Stock</option>
                                </select>
                            </div>

                            <!-- Crypto Pairs -->
                            <div class="form-group mb-3" id="cryptoPairs" style="display: none;">
                                <label for="cryptoPair">Crypto Pairs</label>
                                <select name="crypto_trade_pair_id" id="cryptoPair" class="form-control">
                                    @foreach($pairs as $item)
                                        @if($item->type == 'crypto')
                                            <option value="{{ $item->id }}">{{ $item->pair }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Forex Pairs -->
                            <div class="form-group mb-3" id="forexPairs" style="display: none;">
                                <label for="forexPair">Forex Pairs</label>
                                <select name="forex_trade_pair_id" id="forexPair" class="form-control">
                                    @foreach($pairs as $item)
                                        @if($item->type == 'forex')
                                            <option value="{{ $item->id }}">{{ $item->pair }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Stock Pairs -->
                            <div class="form-group mb-4" id="stockPairs" style="display: none;">
                                <label for="stockPair">Stock Pairs</label>
                                <select name="stock_trade_pair_id" id="stockPair" class="form-control">
                                    @foreach($pairs as $item)
                                        @if($item->type == 'stock')
                                            <option value="{{ $item->id }}">{{ $item->pair }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                                <div class="input-group mb-3">
                                    <input type="number" name="amount" class="form-control"
                                           placeholder="100" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Leverage</label>
                                            <select class="form-control" name="leverage" id="leverage">
                                                <option value="10">1:10</option>
                                                <option value="20">1:20</option>
                                                <option value="30">1:30</option>
                                                <option value="40">1:40</option>
                                                <option value="50">1:50</option>
                                                <option value="60">1:60</option>
                                                <option value="70">1:70</option>
                                                <option value="80">1:80</option>
                                                <option value="90">1:90</option>
                                                <option value="100">1:100</option>
                                                <option value="110">1:110</option>
                                                <option value="120">1:120</option>
                                                <option value="130">1:130</option>
                                                <option value="140">1:140</option>
                                                <option value="150">1:150</option>
                                                <option value="160">1:160</option>
                                                <option value="170">1:170</option>
                                                <option value="180">1:180</option>
                                                <option value="190">1:190</option>
                                                <option value="200">1:200</option>
                                                <option value="210">1:210</option>
                                                <option value="220">1:220</option>
                                                <option value="230">1:230</option>
                                                <option value="240">1:240</option>
                                                <option value="250">1:250</option>
                                                <option value="260">1:260</option>
                                                <option value="270">1:270</option>
                                                <option value="280">1:280</option>
                                                <option value="290">1:290</option>
                                                <option value="300">1:300</option>
                                                <option value="310">1:310</option>
                                                <option value="320">1:320</option>
                                                <option value="330">1:330</option>
                                                <option value="340">1:340</option>
                                                <option value="350">1:350</option>
                                                <option value="360">1:360</option>
                                                <option value="370">1:370</option>
                                                <option value="380">1:380</option>
                                                <option value="390">1:390</option>
                                                <option value="400">1:400</option>
                                                <option value="410">1:410</option>
                                                <option value="420">1:420</option>
                                                <option value="430">1:430</option>
                                                <option value="440">1:440</option>
                                                <option value="450">1:450</option>
                                                <option value="460">1:460</option>
                                                <option value="470">1:470</option>
                                                <option value="480">1:480</option>
                                                <option value="490">1:490</option>
                                                <option value="500">1:500</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <select class="form-control" name="duration" id="expire">
                                                <option value="1">1 Minute</option>
                                                <option value="2">2 Minutes</option>
                                                <option value="3">3 Minutes</option>
                                                <option value="4">4 Minutes</option>
                                                <option value="5">5 Minutes</option>
                                                <option value="10">10 Minutes</option>
                                                <option value="15">15 Minutes</option>
                                                <option value="30">30 Minutes</option>
                                                <option value="60">1 Hour</option>
                                                <option value="120">2 Hours</option>
                                                <option value="180">4 Hours</option>
                                                <option value="360">6 Hours</option>
                                                <option value="720">12 Hours</option>
                                                <option value="1440">1 Day</option>
                                                <option value="2880">2 Days</option>
                                                <option value="5320">3 Days</option>
                                                <option value="7200">5 Days</option>
                                                <option value="10080">7 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Stop Loss</label>
                                            <input type="number" step="0.0001" name="stop_loss" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Take Profit</label>
                                            <input type="number" step="0.0001" name="take_profit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @if($user->trader == 1)
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="primary-btn py-2 px-4"  name="action_type" value="buy">Buy</button>
                                <span class="mx-3"></span>
                                <button type="submit" class="btn btn-danger py-2 px-4" name="action_type" value="sell">Sell</button>
                            </div>
                                 @else
                                <div class="card mt-3">
                                    <div class="card-body bg-dark">
                                        <h4>No Active Subscription</h4>
                                        <p>To access trading features, please subscribe to one of our trader subscription plans.
                                            <a class="text-primary" href="{{ route('user.sub.plans') }}">Subscribe</a>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3 exchange">
            <div class="col-xl-12 col-xxl-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Trade History</h5>
                    </div>
                    <div class="tab-content" id="pills-tabContent2">
                        <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                            <div class="recent-contact pb-2 pt-3">
                                <table>
                                    <thead>
                                    <tr class="border-b2">
                                        <th class="fw-bold">Time</th>
                                        <th class="fw-bold">Price (USDT)</th>
                                        <th class="fw-bold">Amount (BTC)</th>
                                        <th class="fw-bold">Total (USDT)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b2">
                                        <td>21:00</td>
                                        <td>$247.68</td>
                                        <td>2573 BTC</td>
                                        <td>$66826.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>12:00</td>
                                        <td>$211.68</td>
                                        <td>24,9753 BTC</td>
                                        <td>$1586.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>21:00</td>
                                        <td>$278.68</td>
                                        <td>2473 BTC</td>
                                        <td>$166.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>10:00</td>
                                        <td>$241.68</td>
                                        <td>75,973 BTC</td>
                                        <td>$7486.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>13:00</td>
                                        <td>$224.68</td>
                                        <td>5473 BTC</td>
                                        <td>$1286.67</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="deep" role="tabpanel" tabindex="0">
                            <div class="recent-contact pb-2 pt-3">
                                <table>
                                    <thead>
                                    <tr class="border-b2">
                                        <th class="fw-bold">Time</th>
                                        <th class="fw-bold">Price (USDT)</th>
                                        <th class="fw-bold">Amount (BTC)</th>
                                        <th class="fw-bold">Total (USDT)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b2">
                                        <td>14:00</td>
                                        <td>$281.68</td>
                                        <td>25,143 BTC</td>
                                        <td>$1686.7</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>12:00</td>
                                        <td>$211.68</td>
                                        <td>24,9753 BTC</td>
                                        <td>$1586.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>21:00</td>
                                        <td>$278.68</td>
                                        <td>2473 BTC</td>
                                        <td>$166.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>10:00</td>
                                        <td>$241.68</td>
                                        <td>75,973 BTC</td>
                                        <td>$7486.67</td>
                                    </tr>
                                    <tr class="border-b2">
                                        <td>13:00</td>
                                        <td>$224.68</td>
                                        <td>5473 BTC</td>
                                        <td>$1286.67</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('dashboard.layout.footer')
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const marketTypeSelect = document.getElementById('marketType');
        const cryptoPairs = document.getElementById('cryptoPairs');
        const forexPairs = document.getElementById('forexPairs');
        const stockPairs = document.getElementById('stockPairs');

        // Function to hide all pairs and show the selected one
        function handleMarketTypeChange() {
            const selectedValue = marketTypeSelect.value;

            // Hide all divs
            cryptoPairs.style.display = 'none';
            forexPairs.style.display = 'none';
            stockPairs.style.display = 'none';

            // Show the corresponding div based on the selected value
            if (selectedValue === 'crypto') {
                cryptoPairs.style.display = 'block';
            } else if (selectedValue === 'forex') {
                forexPairs.style.display = 'block';
            } else if (selectedValue === 'stock') {
                stockPairs.style.display = 'block';
            }
        }

        // Add event listener for when the user selects a different market type
        marketTypeSelect.addEventListener('change', handleMarketTypeChange);

        // Run the function once on page load to set the initial visibility
        handleMarketTypeChange();
    });
</script>

@endsection
