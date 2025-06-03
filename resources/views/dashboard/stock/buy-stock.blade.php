@extends('dashboard.layout.app')
@section('content')

    <style>
        .stock-price-display {
            background-color: #161617;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        .order-radio {
            margin-right: 20px;
        }
    </style>


    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="activity">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">Buy Stock</h5>
                            </div>
                            <div class="d-none flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link rounded-3 py-1 active" id="pills-price-tab"
                                           aria-selected="false">
                                            Buy Stock
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link rounded-3 py-1" id="pills-deep-tab">
                                            Sell Stock
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-8">


                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                                                             rel="noopener nofollow" target="_blank">
                                    </a></div>
                                @php
                                    $nyseStocks = ['DIS', 'V', 'MA', 'JPM', 'GS', 'BA', 'XOM', 'WMT'];
                                @endphp
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
                                        "{{ in_array($stock->symbol, $nyseStocks) ? 'NYSE:' : 'NASDAQ:' }}{{ $stock->symbol ?? '' }}",
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
                            <!-- TradingView Widget END -->
                        </div>

                        <div class="col-lg-4">
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
                            <form action="{{ route('user.buyStock.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                <input type="hidden" name="stock_price" value="{{ $stock->price }}">
                                <div class="mb-3">
                                    <div class="stock-price-display">
                                        <span class="fw-bold"> {{ $stock->symbol ?? '' }} Price: </span>
                                        <span class="text-success">${{ $stock->price ?? ''}}</span>
                                    </div>

                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                           step="0.01" required placeholder="Enter amount">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Order Type</label>
                                    <select name="order_type" id="order_type" class="form-control">
                                        <option value="1">Market Order</option>
                                        <option value="2">Limit Order</option>
                                    </select>

                                </div>

                                <div class="mb-3" id="limit_price_field" style="display: none;">
                                    <label for="limit_price" class="form-label">Limit Price</label>
                                    <input type="number" class="form-control" id="limit_price"
                                           name="limit_price" step="0.01" placeholder="Enter limit price">
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mt-3">Buy</button>
                            </form>
                        </div>
                    </div>


                </div>


                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 mt-5">

                    <div class="price-table">
                        <h5 class="mb-3">Pending Orders</h5>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="text-white">
                                <tr>
                                    <th>Stock Symbol</th>
                                    <th>Order Type</th>
                                    <th>Amount</th>
                                    <th>Limit Price</th>
                                    <th>Current Price</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                @foreach($data as $item)
                                    <tr>
                                        <td class="d-flex align-items-center gap-2">
                                            <img style="border-radius: 50%" src="{{ asset($item->stock->avatar()) }}"
                                                 alt="{{ $item->stock->symbol }}" width="30" height="30">
                                            {{  $item->stock->symbol  ?? ''}}
                                        </td>
                                        <td>{{ $item->order_type == 1 ? 'Market' : 'Limit' }}</td>
                                        <td>{{ number_format($item->amount, 2) }}</td>
                                        <td>{{ number_format($item->limit_price, 2) ?? '' }}</td>
                                        <td>{{ number_format($item->stock->price, 2) }}</td>
                                        <td>
                                            {!! $item->status() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        @include('dashboard.layout.footer')


    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('order_type').addEventListener('change', function () {
            document.getElementById('limit_price_field').style.display =
                this.value == '2' ? 'block' : 'none';
        });
    </script>

@endsection
