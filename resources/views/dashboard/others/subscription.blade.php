@extends('dashboard.layout.app')
@section('content')
    <style>
        tr, td {
            color: white;
        }
    </style>
<div class="container-fluid main-content px-2 px-lg-4">

    <div  class="container">
        <br>
        <h2 style="margin-top: 20px" class="text-center m-3">Subscribe</h2>
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
        <div class="row">


            @foreach($plans as $item)
                <div class="col-md-4 py-3">
                    <div style="background-color: #212b39; color: white" class="card">
                        <div class="card-header">
                            <div class="section_title">
                                <h3 class="mb-0">{{ $item->name }}</h3>
                            </div>
                        </div>
                        <form class="card-body text-dark" action="{{ route('user.activatePlan') }}" method="POST"
                              >
                            @csrf
                            <input type="hidden" name="plan_id" value="{{ $item->id }}">
                            <div class="mb-4 ">
                                {{--                                    <p class="mb-0 text-dark">Min</p>--}}
                                <span style="font-size: 20px; font-weight: bolder"
                                      class="mb-4  ">Min: ${{ number_format($item->min_amount, 2) }}</span>
                                <span class="mx-1">-</span>
                                <span style="font-size: 20px; font-weight: bolder; white-space: none"
                                      class="mb-4 whitespace-nowrap">Max: ${{ number_format($item->max_amount, 2) }}</span>
                            </div>
                            <h5 class="text-dark">Details</h5>
                            <div style="color: white" class="d-flex">
									<span class="flex-fill p-2  mb-2 rounded border">
										<p class="text-success mb-2">DURATION</p>
										<p class="font-weight-bold mb-0" style="font-size: 16px">{{ $item->duration }} DAYS</p>
									</span>
                                 <span class="flex-fill p-2 mb-2 rounded border">
										<p class="text-success mb-2">DAILY TRADES</p>
										<p class="font-weight-bold  mb-0"
                                           style="font-size: 16px">{{ $item->trade_limit_per_day }}</p>
									</span>

                            </div>

                            <div class="form-group mt-4">
                                <label class="text-dark">Amount</label>
                                <input type="number" name="amount" class="form-control amount" placeholder="100"
                                       min="{{ $item->min_deposit }}" max="{{ $item->min_deposit }}" data-id="4">
                            </div>
                            <p class="text-danger exceedInfo" style="display:none">Amount value cannot exceed current
                                balance.</p>
                            <button class="btn btn-primary btn-block submit-with mt-3" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            @endforeach


            <div class="col-md-12 py-3 mt-5">
                <div style="background-color: #212b39; color: white" class="card my-2">
                    <div class="card-header">
                        <h4 class="mb-0">Active Subscription</h4>
                    </div>
                    <div  class="card-body px-3 py-3">
                         <div class="table-responsive">
                              <table class="table table- text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Package</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach($subscription as $index => $item)
                                        <tr >
                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                            <td>${{ number_format($item->amount, 2) ?? '' }}</td>
                                            <td>{{ $item->package->name ?? '' }}</td>
                                            <td>
                                                @if($item->status == "pending")
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($item->status == "successful")
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Ended</span>
                                                @endif
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
</div>
@endsection
