@extends('dashboard.layout.app')
@section('content')
    @include('dashboard.layout.alert')
    <div class="container-fluid main-content px-2 px-lg-4 ">
        <div class="row my-2 g-3 g-lg-4">
            <div class="col-12">
                <h4 class="text-center">Trade Room</h4>
            </div>
        </div>

        <!-- Main Chart Area -->
        <div class="row my-2 g-3 gx-lg-4 exchange">
            <div class="col-xl-7 col-xxl-8">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                                                     rel="noopener nofollow" target="_blank">
                            </a></div>
                        <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js"
                                async>
                            {
                                "width"
                            :
                                "100%",
                                    "height"
                            :
                                "500",
                                    "symbol"
                            :
                                "BINANCE:BTCUSDT",
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
                                    "support_host"
                            :
                                "https://www.tradingview.com"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="row gy-4">
                    <div class="col-xxl-12 col-lg-6">
                        <div style="background: #1e2734" class="card bg-drk h-100">
                            <div class="card-body p-24">
                                <span class="mb-4 text-sm text-secondary-light">Avail Balance</span>
                                <h6 class="mb-4 text-warning">${{ number_format($user->balance, 2) }}</h6>

                                <form action="{{ route('user.trade.store') }}" method="POST">
                                    @csrf
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
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label for="">Market</label>
                                        <select name="market" id="marketSelect" class="form-select"
                                                aria-label="Default select example">
                                            <option disabled selected>Select Market</option>
                                            <option value="Crypto">Cryptocurrency</option>
                                            <option value="Stock">Stock</option>
                                            <option value="Forex">Forex</option>
                                            {{--                                            <option value="Commodities">Commodities</option>--}}
                                            {{--                                            <option value="Indices">Indices</option>--}}
                                            {{--                                            <option value="Bonds">Bonds</option>--}}
                                            {{--                                            <option value="ETFs">ETFs</option>--}}

                                        </select>
                                    </div>

                                    <div class="mb-3">

                                        <div data-pair-container="Crypto" class="pair-container" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="crypto_pair"
                                                    aria-label="Default select example">

                                                @foreach($pairs as $item)
                                                    @if($item->type == 'crypto')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="Stock" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="stock_pair"
                                                    aria-label="Default select example">
                                                @foreach($pairs as $item)
                                                    @if($item->type == 'stock')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="Forex" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="forex_pair"
                                                    aria-label="Default select example">
                                                @foreach($pairs as $item)
                                                    @if($item->type == 'forex')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="Commodities" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="common_pair"
                                                    aria-label="Default select example">
                                                @foreach($pairs as $item)
                                                    @if($item->type == 'commodities')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="Indices" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="indices_pair"
                                                    aria-label="Default select example">

                                                @foreach($pairs as $item)
                                                    @if($item->type == 'indices')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="Bonds" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="bond_pair"
                                                    aria-label="Default select example">

                                                @foreach($pairs as $item)
                                                    @if($item->type == 'bonds')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div data-pair-container="ETFs" style="display: none;">
                                            <label for="">Pair</label>
                                            <select class="form-select" name="etf_pair"
                                                    aria-label="Default select example">
                                                <option selected disabled>..select..</option>
                                                @foreach($pairs as $item)
                                                    @if($item->type == 'etf')
                                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="time-interval">Select Time Interval</label>
                                        <select id="time-interval" name="time_interval" class="form-control">
                                            <option value="5min">5 mins</option>
                                            <option value="10min">10 mins</option>
                                            <option value="15min">15 mins</option>
                                            <option value="30min">30 mins</option>
                                            <option value="1hr">1 hr</option>
                                            <option value="2hr">2 hrs</option>
                                            <option value="3hr">3 hrs</option>
                                            <option value="4hr">4 hrs</option>
                                            <option value="5hr">5 hrs</option>
                                            <option value="6hr">6 hrs</option>
                                            <option value="12hr">12 hrs</option>
                                            <option value="24hr">24 hrs</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <label for="stopLoss" class="form-label text-danger">Stop
                                                        Loss</label>
                                                    <input type="number" step="any" id="stopLoss" name="stop_loss"
                                                           class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <label for="takeProfit" class="form-label text-success">Take
                                                        Profit</label>
                                                    <input type="number" step="any" id="takeProfit" name="take_profit"
                                                           class="form-control ">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="takeProfit" class="form-label"> Amount</label>
                                                <input type="number" step="any" id="takeProfit" name="amount"
                                                       class="form-control " required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <button type="submit" name="trade_type" value="buy"
                                                    class="btn btn-success w-100">Buy
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="trade_type" value="sell"
                                                    class="btn btn-danger w-100">Sell
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3 exchange mt-5">
            <div class="col-lg-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Order History</h5>
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-price-tab" data-bs-toggle="pill"
                                        data-bs-target="#price" type="button" role="tab">Buy Orders
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-deep-tab" data-bs-toggle="pill"
                                        data-bs-target="#deep" type="button" role="tab">Sell Orders
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent2">
                        <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                            <div class="recent-contact pb-2 pt-3">

                                <table>
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Market</th>
                                        <th>Pair</th>
                                        <th>Order</th>
                                        <th>Interval</th>
                                        <th>TP</th>
                                        <th>SL</th>
                                        <th>Amount</th>
                                        <th>PNL</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    @foreach($buy_trades as $item)
                                        <tr>
                                            <td>{{ date('d M, Y', strtotime($item->created_at ?? '')) }}</td>
                                            <td>{{ $item->market ?? '' }}</td>
                                            <td>{{ $item->tradePair() ?? '' }}</td>
                                            <td>{!! $item->trade_type() ?? '' !!}</td>
                                            <td>{{ $item->time_interval ?? '' }}</td>
                                            <td>{{ $item->take_profit ?? '' }}</td>
                                            <td>{{ $item->stop_loss ?? '' }}</td>
                                            <td>${{ number_format($item->amount, 2) }}</td>
                                            <td>${{ number_format($item->profit, 2) }}</td>
                                            <td>{!! $item->status() ?? ''!!}</td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="deep" role="tabpanel" tabindex="0">
                            <div class="recent-contact pb-2 pt-3">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Market</th>
                                        <th>Pair</th>
                                        <th>Order</th>
                                        <th>Interval</th>
                                        <th>TP</th>
                                        <th>SL</th>
                                        <th>Amount</th>
                                        <th>PNL</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    @foreach($sell_trades as $item)
                                        <tr>
                                            <td>{{ date('d M, Y', strtotime($item->created_at ?? '')) }}</td>
                                            <td>{{ $item->market ?? '' }}</td>
                                            <td>{{ $item->tradePair() ?? '' }}</td>
                                            <td>{!! $item->trade_type() ?? '' !!}</td>
                                            <td>{{ $item->time_interval ?? '' }}</td>
                                            <td>{{ $item->take_profit ?? '' }}</td>
                                            <td>{{ $item->stop_loss ?? '' }}</td>
                                            <td>${{ number_format($item->amount, 2) }}</td>
                                            <td>${{ number_format($item->profit, 2) }}</td>
                                            <td>{!! $item->status() ?? ''!!}</td>
                                        </tr>
                                    @endforeach

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

        // Get the DOM elements
        const marketSelect = document.querySelector('select[name="market"]');
        const pairContainers = document.querySelectorAll('[data-pair-container]');

        // Hide all pair containers initially
        pairContainers.forEach(container => {
            container.style.display = "none";
        });

        // Add event listener to the market select dropdown
        marketSelect.addEventListener("change", () => {
            const selectedMarket = marketSelect.value;

            // Hide all pair containers
            pairContainers.forEach(container => {
                container.style.display = "none";
            });

            // Show the corresponding pair container if a valid market is selected
            if (selectedMarket) {
                const targetContainer = document.querySelector(`[data-pair-container="${selectedMarket}"]`);
                if (targetContainer) {
                    targetContainer.style.display = "block";
                }
            }
        });

    </script>
@endsection
