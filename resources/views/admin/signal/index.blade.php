@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">

                        <div class="row g-gs">

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
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
                                    <div class="card-inner">
                                        <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal"
                                                data-bs-target="#modalForm">Add Signal
                                        </button>
                                        <h4 class="m-2">Signal Trading Plans</h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Min Amount</th>
                                                    <th>Market</th>
                                                    <th>Pair</th>
                                                    <th>Type</th>
                                                    <th>Entry</th>
                                                    <th>TP</th>
                                                    <th>SL</th>
                                                    <th>Notes</th>
                                                    <th>Expires</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($data as $index => $signal)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>${{ number_format($signal->min_amount, 2) ?? '' }}</td>
                                                        <td>{{ $signal->market ?? '' }}</td>
                                                        <td>{{ $signal->pair[strtolower($signal->market)] ?? 'N/A' }}</td>
                                                        <td class="text-uppercase">{{ $signal->signal_type }}</td>
                                                        <td>{{ $signal->entry_price }}</td>
                                                        <td>{{ $signal->take_profit ?? '-' }}</td>
                                                        <td>{{ $signal->stop_loss ?? '-' }}</td>
                                                        <td>{{ $signal->notes ?? '-' }}</td>
                                                        <td>{{ $signal->expires_at ? \Carbon\Carbon::parse($signal->expires_at)->diffForHumans() : '-' }} {!! $signal->expiry_badge !!}</td>
                                                        <td class="d-none">
                                                            <input type="text" class="form-control"
                                                                   value="{{ url('/trade-signal/' . $signal->slug) }}"
                                                                   readonly id="url-{{ $signal->id }}">
                                                            <button class="btn btn-sm btn-outline-primary mt-1"
                                                                    onclick="copyToClipboard('url-{{ $signal->id }}')">
                                                                Copy
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#modalForm-{{ $signal->id }}"
                                                               class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="#" class="btn btn-sm btn-danger"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteModal-{{ $signal->id }}"
                                                               data-href="/items/1/delete">Delete</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="9" class="text-center">No signals available.</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                        @foreach($data as $item)

                                            <div class="modal fade" id="modalForm-{{ $item->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Trade Signal</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.signal.update', $item->id) }}"
                                                                  method="POST" class="form-validate is-alter"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <!-- Min Amount -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="min_amount">Min
                                                                        Amount</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" step="0.001"
                                                                               name="min_amount" class="form-control"
                                                                               id="min_amount"
                                                                               value="{{ old('min_amount', $item->min_amount) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Pair -->


                                                                <div class="form-group mt-3">
                                                                    <label for="">Market</label>
                                                                    <select name="market" id="marketSelect"
                                                                            class="form-select">
                                                                        <option disabled selected>Select Market</option>
                                                                        <option value="Crypto">Cryptocurrency</option>
                                                                        <option value="Stock">Stock</option>
                                                                        <option value="Forex">Forex</option>

                                                                    </select>
                                                                </div>
                                                                <div data-pair-container="Crypto" class="pair-container"
                                                                     style="display: none;">
                                                                    <label for="">Pair</label>
                                                                    <select class="form-select" name="pair[crypto]"
                                                                            aria-label="Default select example">

                                                                        @foreach($pairs as $item)
                                                                            @if($item->type == 'crypto')
                                                                                <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div data-pair-container="Stock" style="display: none;">
                                                                    <label for="">Pair</label>
                                                                    <select class="form-select" name="pair[stock]"
                                                                            aria-label="Default select example">
                                                                        @foreach($pairs as $item)
                                                                            @if($item->type == 'stock')
                                                                                <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div data-pair-container="Forex" style="display: none;">
                                                                    <label for="">Pair</label>
                                                                    <select class="form-select" name="pair[forex]"
                                                                            aria-label="Default select example">
                                                                        @foreach($pairs as $item)
                                                                            @if($item->type == 'forex')
                                                                                <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <!-- Signal Type -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="signal_type">Signal
                                                                        Type</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="signal_type" id="signal_type"
                                                                                class="form-control" required>
                                                                            <option value="">-- Select Type --</option>
                                                                            <option
                                                                                    value="buy" {{ old('signal_type', $item->signal_type) === 'buy' ? 'selected' : '' }}>
                                                                                Buy
                                                                            </option>
                                                                            <option
                                                                                    value="sell" {{ old('signal_type', $item->signal_type) === 'sell' ? 'selected' : '' }}>
                                                                                Sell
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- Entry Price -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="entry_price">Entry
                                                                        Price</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" step="0.01"
                                                                               name="entry_price" class="form-control"
                                                                               id="entry_price"
                                                                               value="{{ old('entry_price', $item->entry_price) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Take Profit -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="take_profit">Take
                                                                        Profit</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" step="0.01"
                                                                               name="take_profit" class="form-control"
                                                                               id="take_profit"
                                                                               value="{{ old('take_profit', $item->take_profit) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Stop Loss -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="stop_loss">Stop
                                                                        Loss</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" step="0.01"
                                                                               name="stop_loss" class="form-control"
                                                                               id="stop_loss"
                                                                               value="{{ old('stop_loss', $item->stop_loss) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Notes -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="notes">Notes
                                                                        (optional)</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea name="notes" class="form-control"
                                                                                  id="notes"
                                                                                  rows="3">{{ old('notes', $item->notes) }}</textarea>
                                                                    </div>
                                                                </div>

                                                                <!-- Expiration Time -->
                                                                <div class="form-group mt-3">
                                                                    <label class="form-label" for="expires_at">Expires
                                                                        At</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="datetime-local" name="expires_at"
                                                                               class="form-control" id="expires_at"
                                                                               value="{{ old('expires_at', optional($item->expires_at)->format('Y-m-d\TH:i')) }}">
                                                                    </div>
                                                                </div>

                                                                <!-- Submit Button -->
                                                                <div class="form-group mt-4">
                                                                    <button type="submit"
                                                                            class="btn btn-lg btn-primary">Update
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                                Delete</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this item? This action
                                                            cannot be undone.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel
                                                            </button>
                                                            <form id="deleteForm" method="POST"
                                                                  action="{{ route('admin.signal.destroy', $item->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div><!-- .card -->
                        </div><!-- .col -->


                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Trade Signal</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.signal.store') }}" method="POST" class="form-validate is-alter"
                          enctype="multipart/form-data">
                        @csrf
                        <!-- Min Amount -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="min_amount">Min Amount</label>
                            <div class="form-control-wrap">
                                <input type="number" step="0.001" name="min_amount" class="form-control"
                                       id="min_amount">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Market</label>
                            <select name="market" id="marketSelect" class="form-select"
                                    aria-label="Default select example">
                                <option disabled selected>Select Market</option>
                                <option value="Crypto">Cryptocurrency</option>
                                <option value="Stock">Stock</option>
                                <option value="Forex">Forex</option>

                            </select>
                        </div>
                        <div data-pair-container="Crypto" class="pair-container" style="display: none;">
                            <label for="">Pair</label>
                            <select class="form-select" name="pair[crypto]"
                                    aria-label="Default select example">

                                @foreach($pairs as $item)
                                    @if($item->type == 'crypto')
                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div data-pair-container="Stock" style="display: none;">
                            <label for="">Pair</label>
                            <select class="form-select" name="pair[stock]"
                                    aria-label="Default select example">
                                @foreach($pairs as $item)
                                    @if($item->type == 'stock')
                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div data-pair-container="Forex" style="display: none;">
                            <label for="">Pair</label>
                            <select class="form-select" name="pair[forex]"
                                    aria-label="Default select example">
                                @foreach($pairs as $item)
                                    @if($item->type == 'forex')
                                        <option value="{{ $item->pair }}">{{ $item->pair }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <!-- Signal Type -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="signal_type">Signal Type</label>
                            <div class="form-control-wrap">
                                <select name="signal_type" id="signal_type" class="form-control" >
                                    <option value="">-- Select Type --</option>
                                    <option value="buy">Buy</option>
                                    <option value="sell">Sell</option>
                                </select>
                            </div>
                        </div>

                        <!-- Entry Price -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="entry_price">Entry Price</label>
                            <div class="form-control-wrap">
                                <input type="number" step="0.01" name="entry_price" class="form-control"
                                       id="entry_price" >
                            </div>
                        </div>

                        <!-- Take Profit -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="take_profit">Take Profit</label>
                            <div class="form-control-wrap">
                                <input type="number" step="0.01" name="take_profit" class="form-control"
                                       id="take_profit">
                            </div>
                        </div>

                        <!-- Stop Loss -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="stop_loss">Stop Loss</label>
                            <div class="form-control-wrap">
                                <input type="number" step="0.01" name="stop_loss" class="form-control" id="stop_loss">
                            </div>
                        </div>

                        <!-- Notes -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="notes">Notes (optional)</label>
                            <div class="form-control-wrap">
                                <textarea name="notes" class="form-control" id="notes" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Expiration Time -->
                        <div class="form-group mt-3">
                            <label class="form-label" for="expires_at">Expires At</label>
                            <div class="form-control-wrap">
                                <input type="datetime-local" name="expires_at" class="form-control" id="expires_at">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>




    <script>
        function copyToClipboard(elementId) {
            const copyText = document.getElementById(elementId);
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            document.execCommand("copy");
            alert("Copied: " + copyText.value);
        }
    </script>

    <script>

        // Get the DOM elements
        const marketSelect = document.querySelector('select[name="market"]');
        const pairContainers = document.querySelectorAll('[data-pair-container]');

        // Hide all pair containers initially
        pairContainers.forEach(container => {
            container.style.display = "none";
        });

        // Add event listener to the market select dropdown
        marketSelect.addEventListener("change", () => {
            const selectedMarket = marketSelect.value;

            // Hide all pair containers
            pairContainers.forEach(container => {
                container.style.display = "none";
            });

            // Show the corresponding pair container if a valid market is selected
            if (selectedMarket) {
                const targetContainer = document.querySelector(`[data-pair-container="${selectedMarket}"]`);
                if (targetContainer) {
                    targetContainer.style.display = "block";
                }
            }
        });

    </script>
@endsection
