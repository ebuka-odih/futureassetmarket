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
        <div class="row my-2 g-3 g-lg-4">
            <div class="col-md-6 col-lg-5 col-xxl-4">
                <div class="wallet-balance">
                    <div class="left-wrapper">
                        <div class="left">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                          d="M12 3.248c.415 0 .752.336.752.752v.464h.051c1.014 0 1.824.827 1.824 1.833a.752.752 0 0 1-1.504 0a.324.324 0 0 0-.32-.328h-1.607c-.1 0-.152.031-.189.067a.4.4 0 0 0-.106.225a.44.44 0 0 0 .033.263a.26.26 0 0 0 .157.133l2.361.85c1.827.659 1.365 3.394-.598 3.394h-.077v.599a.752.752 0 1 1-1.504 0v-.599h-.077a1.83 1.83 0 0 1-1.823-1.833a.752.752 0 1 1 1.504 0c0 .187.15.328.32.328h1.657c.093 0 .136-.028.161-.051a.27.27 0 0 0 .077-.152a.3.3 0 0 0-.02-.17c-.017-.03-.048-.07-.13-.1l-2.361-.85c-.966-.349-1.287-1.294-1.166-2.05c.122-.764.732-1.56 1.781-1.56h.052V4c0-.416.336-.752.752-.752M7.37 13.542c.54-.338 1.2-.544 2.063-.544H12.5c.533 0 1.007.167 1.354.489a1.616 1.616 0 0 1 0 2.376c-.347.322-.82.49-1.354.49h-2c-.2 0-.283.061-.313.091a.2.2 0 0 0-.06.152a.2.2 0 0 0 .06.15c.03.03.112.093.313.093h3c.788 0 1.541-.275 2.31-.712c.591-.335 1.142-.735 1.713-1.149q.285-.207.579-.416l.053-.034a1.7 1.7 0 0 1 2.283.453c.23.321.357.735.3 1.171c-.057.429-.284.817-.648 1.117l-.004.004l-.112.114a16 16 0 0 1-1.87 1.58c-1.177.845-2.86 1.785-4.604 1.785H4A.75.75 0 0 1 3.248 20v-3.5c0-.416.336-.752.752-.752c.624 0 1.017-.14 1.309-.32c.314-.192.556-.453.872-.805l.031-.035c.292-.326.658-.734 1.158-1.046m11.663 2.656a1 1 0 0 1 .086-.078c.118-.091.126-.155.128-.165a.14.14 0 0 0-.03-.096a.2.2 0 0 0-.113-.078c-.027-.007-.08-.012-.163.032q-.234.166-.483.348c-.586.425-1.233.894-1.903 1.274c-.89.506-1.906.909-3.054.909H10.5c-.55 0-1.03-.187-1.375-.53a1.72 1.72 0 0 1-.502-1.218c0-.436.164-.881.502-1.218c.345-.344.826-.53 1.375-.53h2c.216 0 .305-.064.332-.09a.11.11 0 0 0 .04-.083a.11.11 0 0 0-.04-.084c-.027-.025-.116-.089-.332-.089H9.433c-.603 0-.982.138-1.266.316c-.307.192-.546.453-.865.81l-.015.015c-.298.333-.672.75-1.192 1.069a3.6 3.6 0 0 1-1.343.485v2.05h8.75c1.254 0 2.611-.703 3.725-1.502a14.4 14.4 0 0 0 1.78-1.518l.021-.023z"
                                          clip-rule="evenodd"/>
                                </svg>
                                {{--                    <span class="fw-bold">Bitcoin</span>--}}
                            </div>
                            <span>Total Holding</span>
                            <h2 class="text-white mt-2">
                                {{ number_format($totalCurrentValue, 2) }} <small style="font-size: 16px">USD</small>
                            </h2>
                            <span class="my-">{{ number_format($totalShares, 2) }} Shares</span>
                            <span class="{{ $portfolioPercentage >= 0 ? 'text-success' : 'text-danger' }}">
                                    {{ number_format($portfolioPercentage, 2) }}%
                                </span>
{{--                            <div class="d-flex gap-3 pt-4">--}}
{{--                                <button class="primary-btn-lg">Buy</button>--}}
{{--                                <button class="outline-btn-lg bg-danger">Sell</button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xxl-7">
                <div class="right">
                    <div class="py-3">
                        <div class="d-flex  justify-content-between align-items-end">
                            <div class="d-flex flex-column">
                                <span>Total Buy</span>
                                <span class="fw-bold text-white pg-large my-1">${{ number_format($totalBuy, 2) ?? ''}}</span>

                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span class="fw-bold small text-white mt-2">+{{ number_format($buyCount, 2) ?? '' }}</span>
                          </div>
                        </div>
                        <div class="green-bar mt-2">
                            <div class="inner"></div>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="d-flex  justify-content-between align-items-end">
                            <div class="d-flex flex-column">
                                <span>Total Sell</span>
                                <span class="fw-bold text-white pg-large my-1">${{ number_format($totalSell, 2) }}</span>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span class="fw-bold small text-white mt-2">{{ number_format($sellCount, 2) ?? '' }}</span>
                          </div>
                        </div>
                        <div class="red-bar mt-2">
                            <div class="inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 mt-4">
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
                    <div class="d-flex align-items-center justify-content-between text-center">
                        <h5 class="mb-0 text-center">Stock Holdings</h5>
                    </div>

                    <div class="price-table mt-5">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="text-white">
                                <tr>
                                    <th>Symbol</th>
                                    <th>Total Shares</th>
                                    <th>Average Price</th>
                                    <th>Current Price</th>
                                    <th>Current Value</th>
                                    <th>PnL (%)</th>
                                    <th>Last Updated</th>
                                    <th>Sell</th>
                                    <th>...</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                @foreach ($stocks as $stock)
                                    <tr>
                                        <td class="d-flex align-items-center gap-2">
                                            <img style="border-radius: 50%" src="{{ asset($stock->stock->avatar()) }}"
                                                 alt="{{ $stock->stock->symbol }}" width="30" height="30">
                                            {{  $stock->stock->symbol  ?? ''}}
                                        </td>
                                        <td>{{ number_format($stock->total_shares, 2) }}</td>
                                        <td>{{ number_format($stock->average_price, 2) }}</td>
                                        <td>{{ $stock->current_value ? number_format($stock->current_value / $stock->total_shares, 2) : 'N/A' }}</td>
                                        <td>{{ $stock->current_value ? number_format($stock->current_value, 2) : 'N/A' }}</td>
                                        <td class="{{ $stock->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $stock->pnl !== null ? number_format($stock->pnl, 2) . '%' : 'N/A' }}
                                        </td>
                                        <td>{{ $stock->updated_at->diffForHumans() }}</td>
                                        <td><a href="{{ route('user.sellStock', $stock->id) }}" class="btn btn-sm btn-danger" >Sell</a></td>
{{--                                        <td><a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $stock->id }}">Sell</a></td>--}}
                                        <td><a href="{{ route('user.buyHistory', $stock->id) }}" class="btn btn-link"><i
                                                    class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @foreach($stocks as $item)
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div  class="modal-dialog ">
                                <div  class="modal-content bg-black">
                                  <div class="modal-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Sell Stock</h1>

                                        </div>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="card text-center bg-black">
                                      <div class="card-body">
                                         <img style="border-radius: 50%" src="{{ asset($item->stock->avatar()) ?? ''}}" alt="{{ $item->stock->symbol ?? ''}}" width="50" height="50">
                                            <h5 class="card-title text-white mt-2">{{ $item->stock->symbol ?? '' }}</h5>
                                          <div class="mt-3">
                                               <form action="" method="POST">
                                                @csrf
                                                @method('POST')
                                              <p>Enter amount of shares to sell</p>
                                              <input type="hidden" name="stock_id" value="{{ $item->id }}">
                                              <div class="form-group">
                                               <input type="number" class="form-control" name="shares" placeholder="Shares" min="0" max="{{ $item->total_shares }}" step="0.0001" required>

                                                 <span class="text-white">Total Shares <strong class="text-success text-start"> {{ number_format($item->total_shares, 4) ?? '' }}</strong></span>
                                              </div>
                                              <button type="submit" class="btn btn-danger mt-4">Confirm Sell</button>
                                          </form>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>


    </div>

@endsection
