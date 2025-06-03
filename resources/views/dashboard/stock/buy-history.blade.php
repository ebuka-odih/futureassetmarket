@extends('dashboard.layout.app')
@section('content')
    <style>
        .text-success {
            color: #28a745;
            font-weight: bold;
        }

        .text-danger {
            color: #dc3545;
            font-weight: bold;
        }
    </style>

    <div class="container-fluid main-content px-2 px-lg-4">


        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
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

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 mt-4">
                     <div class="activity">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">Holding History</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.stockHoldings') }}" class="nav-link rounded-3 py-1 active" id="pills-price-tab"
                                           aria-selected="false">
                                           <- Back
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="price-table mt-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-white">
                                <tr>
                                    <th>Symbol</th>
                                    <th>Shares</th>
                                    <th>Buy Price</th>
                                    <th>Current Price</th>
                                    <th>PnL (%)</th>
                                    <th>Current Value</th>
                                    <th>Filled At</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                @foreach ($buyOrders as $order)
                                    <tr>
                                        <td class="d-flex align-items-center gap-2">
                                            <img style="border-radius: 50%" src="{{ asset($order->stock->avatar()) }}"
                                                 alt="{{ $order->stock->symbol }}" width="30" height="30">
                                            {{  $order->stock->symbol  ?? ''}}
                                        </td>
                                        <td>{{ number_format($order->shares, 2) }}</td>
                                        <td>{{ number_format($order->price, 2) }}</td>
                                        <td>{{ $order->current_price ? number_format($order->current_price, 2) : 'N/A' }}</td>
                                        <td class="{{ $order->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $order->pnl ? number_format($order->pnl, 2) . '%' : '0.00%' }}
                                        </td>
                                        <td>{{ $order->current_value ? number_format($order->current_value, 2) : 'N/A' }}</td>
                                        <td>{{ $order->filled_at ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="mt-5">
                                <h4>Holding Summary</h4>
                                <p>Total Shares: {{ number_format($stockHolding->total_shares, 4) }}</p>
                                <p>Average Buy Price: {{ number_format($stockHolding->average_price, 2) }}</p>
                                <p>Current
                                    Value: {{ $holdingCurrentValue ? number_format($holdingCurrentValue, 2) : 'N/A' }}</p>
                                <p>PnL: <span class="{{ $holdingPnL >= 0 ? 'text-success' : 'text-danger' }}">
                                {{ $holdingPnL ? number_format($holdingPnL, 2) . '%' : 'N/A' }}</span></p>
                            </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection
