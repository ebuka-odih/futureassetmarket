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


                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="activity mb-5">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">Pending Orders</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.filledOrders') }}" class="nav-link rounded-3 py-1 " id="pills-price-tab"
                                           aria-selected="false">
                                            Active Orders
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.limitOrders') }}" class="nav-link rounded-3 py-1 active" id="pills-deep-tab">
                                            Pending Orders
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

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
                    <div class="price-table">
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
                                @foreach($buyStocks as $item)
                                    <tr>
                                        <td class="d-flex align-items-center gap-2">
                                            <img style="border-radius: 50%" src="{{ asset($item->stock->avatar()) }}"
                                                 alt="{{ $item->stock->symbol }}" width="30" height="30">
                                            {{  $item->stock->symbol  ?? ''}}
                                        </td>
                                        <td>{{ $item->order_type == 1 ? 'Market' : 'Limit' }}</td>
                                        <td>{{ number_format($item->amount, 2) }}</td>
                                        <td>{{ number_format($item->limit_price, 2) }}</td>
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


    </div>

@endsection
