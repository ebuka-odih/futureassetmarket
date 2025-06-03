@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">
        <div class="container">
            <br>

            <h3 class="text-center mt-4">Copy Expert Trades</h3>
            <div class="mt-4" style="max-width: 600px"></div>

            <div class="row">
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
                @foreach($traders as $item)
                     <div class="col-md-4 py-3">
                    <div style="background-color: #212b39; color: white" class="card">
                        <div class="card-body">
                            <img src="{{ asset($item->avatar ?? 'img/trader.jpg') }}" class="rounded-circle"
                                 style="width: 100px">
                            <h4 class="my-2">{{ $item->name ?? '' }}</h4>
                            <div class="my-4">
									<span class="p-2 mr-2 mb-2 rounded border d-inline-block">
										<p class="text-primary mb-0">WIN RATE</p>
										<p class="font-weight-bold text-white mb-0" style="font-size: 16px">{{ $item->win_rate }}%</p>
									</span>
                                <span class=" p-2 mr-2 mb-2 rounded border d-inline-block">
										<p class="text-primary mb-0">PROFIT SHARE</p>
										<p class="font-weight-bold text-white mb-0" style="font-size: 16px">{{ $item->profit_share }}%</p>
									</span>
                                <span class=" p-2 mr-2 mb-2 rounded border d-inline-block">
										<p class="text-primary mb-0">WINS</p>
										<p class="font-weight-bold text-white mb-0" style="font-size: 16px">{{ $item->win }}</p>
									</span>
                                <span class="p-2 mb-2 rounded border d-inline-block">
										<p class="text-primary mb-0">LOSSES</p>
										<p class="font-weight-bold text-white mb-0" style="font-size: 16px">{{ $item->loss }}</p>
									</span>
                                <span class="p-2 mb-2 rounded border d-inline-block">
										<p class="text-primary mb-0">STAKE</p>
										<p class="font-weight-bold text-white mb-0" style="font-size: 16px">${{ number_format($item->amount, 2) }}</p>
									</span>
                            </div>

                            <form action="{{ route('user.expert-trader.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="amount" value="{{ $item->amount }}">
                                <input type="hidden" name="trader_id" value="{{ $item->id }}">

                                <button  type="submit" class="btn btn-primary btn-block mt-3 col-12">Copy</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-12 py-3">
                    <div style="background-color: #212b39; color: white" class="card my-2">
                        <div class="card-header">
                            <h4 class="mb-0">Active Copied Trades</h4>
                        </div>
                        <div class="card-body px-3 py-3 text-white">
                            <table class="table table- text-white">
                                <thead>
                                <tr class="text-white">
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Trader</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Profit/Loss</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($copiedTrades as $index => $item)
                                    <tr>
                                        <td >{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                        <td>${{ number_format($item->amount, 2) ?? '' }}</td>
                                        <td>{{ $item->copy_trader->name ?? '' }}</td>
                                        <td>
                                            @if($item->status == "pending")
                                                <span class="badge bg-warning">Pending</span>
                                            @elseif($item->status == "successful")
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Ended</span>
                                            @endif
                                        </td>
                                        <td>${{ number_format($item->profit_loss, 2) ?? '' }}</td>
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
