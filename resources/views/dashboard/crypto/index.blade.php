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
                                        <a href="{{ route('user.cryptoExchange') }}"
                                           class="nav-link rounded-3 py-1 active"
                                           id="pills-price-tab"
                                           aria-selected="false">
                                            Crypto Exchange
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.OrderHistory') }}" class="nav-link rounded-3 py-1"
                                           id="pills-deep-tab">
                                            Order History
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container">
                                <h4>Crypto Exchange</h4>
                                <p>Buy and hold your favourite cryptocurrency</p>

                                <!-- Search Input -->
                                <div class="mb-3">
                                    <input type="text" id="stockSearch" class="form-control"
                                           placeholder="Search stocks by symbol...">
                                </div>

                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table sm-table mb-0" id="stockTable">
                                        <thead class="table-dark">
                                        <tr>

                                            <th scope="col">Asset</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Last (24H)</th>
                                            <th scope="col">Balance</th>
                                            <th scope="col" class="text-center">...</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($assets as $item)
                                            <tr>

                                                <td>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img style="height: 35px" src="{{ asset($item->avatar()) }}"
                                                             alt=""
                                                             class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <span class="flex-grow-1 d-flex flex-column">
                                <span style="margin-left: 5px"
                                      class="text-md mb-0 fw-medium text-primary-light d-block">{{ $item->name ?? '' }}</span>
                              </span>
                                                    </a>
                                                </td>
                                                <td class="text-white">${{ number_format($item->price, 2) ?? '' }}</td>
                                                <td>
                            <span
                                class="{{ $item->change >= 0 ? 'badge bg-success text-success-600' : 'badge bg-danger text-danger-600' }} px-16 py-6 rounded-pill fw-semibold text-xs">
                                <i class="{{ $item->change >= 0 ? 'ri-arrow-up-s-fill' : 'ri-arrow-down-s-fill' }}"></i>
                                {{ number_format($item->change, 2) ?? '0' }}%
                            </span>
                                                </td>

                                                <td><span>{{ number_format($item->balance, 5) ?? '' }}</span><br>
                                                    <span
                                                        class="text-success">${{ number_format($item->usd_rate, 2) ?? '' }}</span>
                                                </td>

                                                <td class="text-center">
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#exampleModal-{{ $item->id }}"
                                                       class="btn btn-sm btn-success">
                                                        Buy
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#withdrawalModal-{{ $item->id }}"
                                                       class="btn btn-sm btn-danger">
                                                        Sell
                                                    </a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                @foreach($assets as $item)
                                    <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 style="color: black" class="modal-title fs-5"
                                                        id="exampleModalLabel">
                                                        Fund {{ $item->name ?? '' }} Wallet</h1>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('user.cryptoExchange.store') }}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="crypto_asset_id"
                                                               value="{{ $item->id }}">
                                                        <!-- Amount Input -->
                                                        <div class="col mb-3">

                                                            <label style="color: black" for="amount">Amount
                                                                (USD)</label>
                                                            <input
                                                                type="number"
                                                                step="any"
                                                                class="form-control"
                                                                id="amount{{ $item->id }}"
                                                                name="amount"
                                                                placeholder="Enter amount in USD"
                                                                oninput="calculateEquivalent('{{ $item->id }}', '{{ $item->price }}', '{{ $item->name }}')">
                                                            <strong class="mt-2 text-success">Equivalent:
                                                                0 {{ $item->name }}</strong>
                                                        </div>


                                                        <!-- Wallet Address and QR Code -->
                                                        <div class="d-none">
                                                            <label for="walletAddres" class="d-block">Wallet
                                                                Address</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                       id="walletAddress"
                                                                       value="{{ $item->getCryptoValue($item->name) ?? 'No Wallet Address' }}"
                                                                       readonly>
                                                                <button type="button"
                                                                        class="btn btn-outline-secondary"
                                                                        id="copyWalletAddress"
                                                                        onclick="copyToClipboard('walletAddress')">
                                                                    <i class="fa fa-clipboard"></i>
                                                                    <!-- Bootstrap Icons -->
                                                                </button>
                                                            </div>
                                                            <!-- QR Code -->
                                                            <div class="text-center mt-3">
                                                                <p class="m-2">Scan Qrcode For Address</p>
                                                                {!! QrCode::size(120)->generate($item->getCryptoValue($item->name) ?? 'No wallet') !!}
                                                            </div>
                                                        </div>

                                                        <!-- Confirm Button -->
                                                        <div class="mt-4 text-center">
                                                            <button
                                                                type="submit"
                                                                class="btn btn-success btn-sm mt-3">
                                                                Buy {{ $item->getCryptoShort($item->name) ?? '' }}
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="withdrawalModal-{{ $item->id }}" tabindex="-1"
                                         aria-labelledby="withdrawalModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 style="color: black" class="modal-title fs-5 "
                                                        id="withdrawalModalLabel">Withdrawal
                                                        For {{ $item->name ?? '' }} Wallet</h1>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('user.cryptoExchange.withdrawal') }}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="crypto_asset_id"
                                                               value="{{ $item->id }}">
                                                        <!-- Amount Input -->
                                                        <strong
                                                            class="text-warning mb-4">Bal: {{ number_format($item->balance, 5) }}</strong>
                                                        <div class="col mb-2">

                                                                    <span style="color: black" class="text-black"
                                                                          for="amount">Amount</span>
                                                            <input type="number"
                                                                   step="any"
                                                                   class="form-control"
                                                                   id="amount"
                                                                   name="amount"
                                                                   data-price="{{ $item->price }}"
                                                                   placeholder="Enter amount" required>
                                                            <strong id="usdEquivalent" class="text-success">Equivalent:
                                                                $0.00</strong>

                                                        </div>

                                                        <!-- Wallet Address and QR Code -->
                                                        <div class="mt-3">
                                                            <label for="walletAddres" class="d-block">Withdrawal
                                                                Wallet Address</label>
                                                            <div class="col mt-2">
                                                                <input type="text" name="withdrawal_wallet"
                                                                       required class="form-control"
                                                                       id="walletAddress">
                                                            </div>
                                                            <p class="text-warning">Enter
                                                                your {{ $item->name ?? '' }} wallet address</p>
                                                        </div>

                                                        <!-- Confirm Button -->
                                                        <div class="mt-4 text-center">
                                                            <button
                                                                type="submit"
                                                                class="btn btn-danger btn-sm mt-3">
                                                                Confirm Withdrawal
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach


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


    <script>
        function calculateEquivalent(assetId, price, tokenName) {
            try {
                // Convert price to a clean number and handle possible formatting issues
                price = parseFloat(String(price).replace(',', ''));

                // Get the input element
                const amountInput = document.getElementById(`amount${assetId}`);

                // Get the paragraph element that shows the equivalent (it's the next sibling after the input)
                const equivalentParagraph = amountInput.nextElementSibling;

                // Get the entered USD amount and clean it
                const usdAmount = parseFloat(amountInput.value || '0');

                // Calculate the equivalent token amount (USD amount divided by token price)
                const tokenAmount = !isNaN(price) && price > 0 ? (usdAmount / price) : 0;

                // Format the token amount to a reasonable number of decimal places
                let formattedAmount;
                if (isNaN(tokenAmount)) {
                    formattedAmount = '0';
                } else if (tokenAmount < 0.0001) {
                    formattedAmount = tokenAmount.toFixed(8);
                } else {
                    formattedAmount = tokenAmount.toFixed(4);
                }

                // Update the equivalent text
                equivalentParagraph.textContent = `Equivalent: ${formattedAmount} ${tokenName}`;
            } catch (error) {
                console.error('Error calculating equivalent:', error);
            }
        }

        function calculateTokenToUSD(tokenAmount, price) {
            try {
                // Clean the input values
                const amount = parseFloat(tokenAmount) || 0;
                const tokenPrice = parseFloat(String(price).replace(',', '')) || 0;

                // Calculate USD value
                const usdValue = amount * tokenPrice;

                // Format as USD currency
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                }).format(usdValue);
            } catch (error) {
                console.error('Error calculating USD value:', error);
                return '$0.00';
            }
        }

        // Example usage in your HTML:
        document.getElementById('amount').addEventListener('input', function () {
            const tokenAmount = this.value;
            const price = this.getAttribute('data-price');
            const usdValue = calculateTokenToUSD(tokenAmount, price);
            document.getElementById('usdEquivalent').textContent = `Equivalent: ${usdValue}`;
        });

        function copyToClipboard(elementId) {
            const input = document.getElementById(elementId);

            // Check if the input exists
            if (input) {
                // Select the text in the input field
                input.select();
                input.setSelectionRange(0, 99999); // For mobile devices

                try {
                    // Attempt to copy the selected text
                    const successful = document.execCommand('copy');
                    if (successful) {
                        alert("Wallet address copied to clipboard!");
                    } else {
                        alert("Failed to copy wallet address. Please try again.");
                    }
                } catch (err) {
                    console.error('Copy error: ', err);
                    alert("Failed to copy wallet address.");
                }
            }
        }
    </script>

@endsection
