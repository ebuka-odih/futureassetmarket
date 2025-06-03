@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">
                        <div class="row g-3 mb-3">
                            <div class="col-lg-12">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <h4 class="m-3">Stocks</h4>

                                        <div class="m-3">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        </div>
                                         <div class="table-responsive">
                                       <table class="table table-striped">
                                          <thead >
                                            <tr>
                                              <th class="fw-bold">Symbol</th>
                                              <th class="fw-bold">Price</th>
                                              <th class="fw-bold">24h %</th>
                                              <th></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($stocks as $index => $item)
                                              <tr>
                                                <td class="d-flex align-items-center gap-2">
                                                  <img style="border-radius: 50%" src="{{ asset($item->avatar()) }}" alt="{{ $item->symbol }}" width="30" height="30">
                                                  {{ $item->name ?? $item->symbol }}
                                                </td>
                                                <td>${{ number_format($item->price, 2) }}</td>
                                                <td class="{{ $item->change_24h >= 0 ? 'text-success' : 'text-danger' }}">
                                                    {{ number_format($item->change_24h, 2) }}%
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.deleteStock', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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

                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

   <!-- Modal Trigger Code -->

<!-- Modal Content Code -->


@endsection
