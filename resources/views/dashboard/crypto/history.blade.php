@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
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

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="activity">
                        <div class="row g-3">
                            <div style="visibility: hidden" class="col-md-6">
                                <h5 class="mb-0">Sell Orders</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.cryptoExchange') }}" class="nav-link rounded-3 py-1"
                                           id="pills-price-tab"
                                           aria-selected="false">
                                            Crypto Exchange
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.OrderHistory') }}"
                                           class="nav-link rounded-3 py-1 active" id="pills-deep-tab">
                                            Order History
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container ">

                                <div class="col-12 mt-5">
                                    <div class="card bg-dark p-0 overflow-hidden position-relative radius-12 h-100">

                                        <div class="card-body  p-24 pt-10">
                                            <ul class="nav bordered-tab border border-top-0 border-start-0 border-end-0 d-inline-flex nav-pills mb-16"
                                                id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link px-16 py-10 active" id="pills-home-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-home" type="button" role="tab"
                                                            aria-controls="pills-home"
                                                            aria-selected="true">Buy Order
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link px-16 py-10" id="pills-details-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-details" type="button" role="tab"
                                                            aria-controls="pills-details" aria-selected="false"
                                                            tabindex="-1">Sell Order
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                                     aria-labelledby="pills-home-tab" tabindex="0">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table basic-border-table mb-3">
                                                                <thead class="table-dark">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Token</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody class="table-dark">
                                                                @foreach($buy_data as $index => $item)
                                                                    <tr>
                                                                        <td>{{ $index+1 }}</td>
                                                                        <td>{{ $item->crypto_asset->getCryptoShort($item->crypto_asset->name)  ?? '' }}</td>
                                                                        <td>${{ number_format($item->amount, 2) }}
                                                                            <br>
                                                                            <span class="text-success">{{ number_format($item->cryptoValue(), 4) }}</span>
                                                                        </td>
                                                                        <td>{!! $item->status() !!}</td>
                                                                        <td>{{ date('d M, Y', strtotime($item->created_at)) }} </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-details" role="tabpanel"
                                                     aria-labelledby="pills-details-tab" tabindex="0">
                                                    <div >

                                                        <div class="table-responsive">
                                                            <table class="table  mb-3">
                                                                <thead class="table-dark">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Token</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody class="table-dark">
                                                                @foreach($sell_data as $index => $item)
                                                                    <tr>
                                                                        <td>{{ $index+1 }}</td>
                                                                         <td>{{ $item->crypto_asset->getCryptoShort($item->crypto_asset->name)  ?? '' }}</td>
                                                                        <td>${{ number_format($item->usdValue(), 2) }}
                                                                            <br>
                                                                            <span class="text-warning">{{ number_format($item->amount, 2) }}</span>
                                                                        </td>
                                                                        <td>{!! $item->status() !!}</td>
                                                                        <td>{{ date('d M, Y', strtotime($item->created_at)) }} </td>
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
                                </div>
                            </div>

                            <style>
                                .text-success {
                                    color: #28a745;
                                }

                                .text-danger {
                                    color: #dc3545;
                                }
                            </style>


                        </div>


                    </div>

                </div>
            </div>
        </div>

        @include('dashboard.layout.footer')


    </div>

@endsection
