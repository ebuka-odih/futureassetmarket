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

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container">
                                <h4>Available Stocks</h4>

                                <!-- Search Input -->
                                <div class="mb-3">
                                    <input type="text" id="stockSearch" class="form-control"
                                           placeholder="Search stocks by symbol...">
                                </div>

                                <div class="table-responsive">
                                    <table class="table" id="stockTable">
                                        <thead class="text-white">
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Price</th>
                                            <th>Change (24h)</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                        @foreach ($stocks as $stock)
                                            <tr>
                                                <td class="d-flex align-items-center gap-2">
                                                    <img style="border-radius: 50%"
                                                         src="{{ asset($stock->avatar()) }}"
                                                         alt="{{ $stock->symbol }}"
                                                         width="30"
                                                         height="30">
                                                    {{ $stock->symbol }}
                                                </td>
                                                <td>{{ $stock->current_price ? number_format($stock->current_price, 2) : number_format($stock->price, 2) }}</td>
                                                <td class="{{ $stock->change_24h >= 0 ? 'text-success' : 'text-danger' }}">
                                                    {{ $stock->change_24h ? number_format($stock->change_24h, 2) . '%' : 'N/A' }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.buyStock', $stock->id) }}"
                                                       class="btn btn-sm btn-primary">
                                                        Buy
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('stockSearch');
            const table = document.getElementById('stockTable');
            const rows = table.getElementsByTagName('tr');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.toLowerCase();

                // Loop through table rows (skip header row)
                for (let i = 1; i < rows.length; i++) {
                    const symbolCell = rows[i].getElementsByTagName('td')[0];
                    const symbol = symbolCell.textContent.trim().toLowerCase();

                    // Show or hide row based on search term
                    if (symbol.includes(searchTerm)) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            });


        });


    </script>
@endsection
