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
                                        <a href="{{ route('user.tradeSignal') }}"
                                           class="nav-link rounded-3 py-1 active"
                                           id="pills-price-tab"
                                           aria-selected="false">
                                            Trade Signal
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.tradeSignalHistory') }}" class="nav-link rounded-3 py-1"
                                           id="pills-deep-tab">
                                            Signal History
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container">
                                <h4>Trade Signal</h4>
                                <div class="row mt-4">
                                    @foreach($signals as $item)
                                        <div class="col-md-4">
                                            <div class="card bg-dark text-white mb-4 shadow rounded border-0">
                                                <div
                                                    class="card-header bg-secondary d-flex justify-content-between align-items-center rounded-top">
                                                    <h5 class="card-title mb-0 text-uppercase">{{ $item->pair['crypto'] ?? $item->pair['stock'] ?? $item->pair['forex']}}</h5>
                                                    {!! $item->expiry_badge ?? '' !!}
                                                </div>

                                                <div class="card-body">
                                                    <p><strong>Min Amount:</strong> ${{ $item->min_amount ?? 'N/A' }}
                                                    </p>
                                                    <p><strong>Type:</strong>
                                                        <span
                                                            class="badge bg-{{ $item->signal_type === 'buy' ? 'success' : 'danger' }}">
                            {{ ucfirst($item->signal_type) }}
                        </span>
                                                    </p>
                                                    <p><strong>Entry
                                                            Price:</strong> {{ number_format($item->entry_price, 2) }}
                                                    </p>
                                                    <p><strong>Take
                                                            Profit:</strong> {{ $item->take_profit ? number_format($item->take_profit, 2) : 'N/A' }}
                                                    </p>
                                                    <p><strong>Stop
                                                            Loss:</strong> {{ $item->stop_loss ? number_format($item->stop_loss, 2) : 'N/A' }}
                                                    </p>
                                                    <p><strong>Notes:</strong> {{ $item->notes ?? 'None' }}</p>
                                                    <p><strong>Expires At:</strong>
                                                        {{ $item->expires_at ? \Carbon\Carbon::parse($item->expires_at)->toDayDateTimeString() : 'Never' }}
                                                    </p>
                                                </div>

                                                <div class="card-footer bg-transparent border-top-0 text-center">
                                                    @if(!$item->expires_at || \Carbon\Carbon::parse($item->expires_at)->isFuture())
                                                        <a href="{{ route('user.tradeSignal.create', $item->id) }}"
                                                           class="btn btn-outline-light btn-sm mb-2">
                                                            Copy Signal
                                                        </a>
                                                    @endif
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
