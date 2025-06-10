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
                                           class="nav-link rounded-3 py-1 "
                                           id="pills-price-tab"
                                           aria-selected="false">
                                            Expert Trader
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.copiedHistory') }}" class="nav-link rounded-3 py-1 active"
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

                           <div class="container my-5">
    <h4 class="mb-4">Copied Trades</h4>

    <div class="table-responsive">
        <table class="table  align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Trader ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Copied At</th>
                </tr>
            </thead>
            <tbody  class="text-white">
                @forelse($copiedTrades as $index => $trade)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $trade->copy_trader->name }}</td>
                        <td>${{ number_format($trade->amount, 2) }}</td>
                        <td>
                            @if($trade->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $trade->created_at->format('d M, Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No trades copied yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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
