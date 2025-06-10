@extends('dashboard.layout.app')
@section('content')
    <style>
        .account-card {
            border-radius: 12px;
            padding: 30px 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
        }

        .account-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="activity">
                        <div class="row g-3">
                            <div style="visibility: hidden" class="col-md-6">
                                <h5 class="mb-0">Expert Trader</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.copytrade.index') }}"
                                           class="nav-link rounded-3 py-1 active"
                                           id="pills-price-tab"
                                           aria-selected="false">
                                            Expert Trader
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.copiedHistory') }}" class="nav-link rounded-3 py-1"
                                           id="pills-deep-tab">
                                            Copied History
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container py-5">
                                <h2 class="text-center fw-bold mb-3">EXPERT TRADER</h2>
                                <p class="text-center mb-5"> No experience? No problem. Open an account and start
                                    copying expert traders in real time with Laravel.
                                    {{ env('APP_NAME') }}</p>

                                <div class="row g-4 justify-content-center">
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
                                    <!-- GOLD -->
                                    @foreach($expert_traders as $item)
                                        <div class="col-md-4">
                                            <div
                                                class="position-relative account-card border pt-5 pb-4 px-3 text-center rounded shadow-sm">

                                                <!-- Avatar Positioned Top-Center -->
                                                <div class="position-absolute top-0 start-50 translate-middle"
                                                     style="z-index: 10;">
                                                    <img
                                                        src="{{ $item->avatar ? asset('storage/' . $item->avatar) : asset('img/trader.png') }}"
                                                        class="rounded-circle border border-2" alt="Trader Avatar"
                                                        width="80" height="80">
                                                </div>

                                                <!-- Trader Name -->
                                                <div
                                                    class="account-title text-white bg-success py-2 text-capitalize mt-4 rounded">
                                                    {{ $item->name ?? '' }}
                                                </div>

                                                <!-- Additional Trader Info -->
                                                <p class="mt-3"><strong>Starting
                                                        Deposit</strong><br>${{ number_format($item->amount, 2) }}</p>
                                                <p><strong>Win Rate</strong><br>{{ $item->win_rate ?? 'N/A' }}%</p>
                                                <p><strong>Profit Share</strong><br>{{ $item->profit_share ?? 'N/A' }}
                                                </p>
                                                <p><strong>Wins</strong><br>{{ $item->win ?? '0' }}</p>
                                                <p><strong>Losses</strong><br>{{ $item->loss ?? '0' }}</p>

                                                <hr class="my-3">

                                                {{--            <p><strong>Instruments</strong><br>FX, Metals, CFDs, Cryptos</p>--}}
                                                {{--            <p><strong>Minimum Lot Size</strong><br>0.01 lots FX</p>--}}
                                                {{--            <p><strong>Max Leverage</strong><br>1:500</p>--}}


                                                <div class="mt-4">
                                                    <form action="{{ route('user.copytrade.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="trader_id" value="{{ $item->id }}">
                                                        <div class="mt-3">
                                                            <input name="amount" type="number" step="any"
                                                                   class="form-control" placeholder="enter amount">
                                                        </div>

                                                        <button type="submit" class="btn btn-outline-success mt-2">
                                                            Copy Trader
                                                        </button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>

        @include('dashboard.layout.footer')


    </div>

@endsection
