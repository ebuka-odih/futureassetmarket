@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">

        <div class="card mt-3 my-2 bg-dark">
            <div class="card-body">

                <ul class="nav nav-pills justify-content-center">
                   <li class="nav-item">
                    <a class="nav-link"  href="{{ route('user.deposit') }}">Crypto Deposit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.bankDeposit') }}">Bank Deposit</a>
                  </li>
                </ul>
            </div>
        </div>

        <div class="row my-2 g-3 g-lg-4">
          <div class="col-md-6 col-lg-5 ">
            <div class="wallet-balance ">
                <h4>Bank Details</h4>
                <div class="table-responsive">
                    @foreach($bank as $paymentMethod)
                        <table class="table text-white mb-4">
                            <tr>
                                <th>Bank Name</th>
                                <td>{{ $paymentMethod->bank['name'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Account No</th>
                                <td>{{ $paymentMethod->bank['acct_num'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Account Name</th>
                                <td>{{ $paymentMethod->bank['acct_name'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Routing</th>
                                <td>{{ $paymentMethod->bank['routing'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>SWIFT Code</th>
                                <td>{{ $paymentMethod->bank['swift_code'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Bank Address</th>
                                <td>{{ $paymentMethod->bank['bank_address'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Wire Instruction</th>
                                <td>{{ $paymentMethod->bank['wire_instruction'] ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 ">
            <div class="right">
              <div style="background-color: #171f2a" class="card my-2 ">
                    <div class="card-header">
                        <h4 class="mb-0 text-center">Submit Payment</h4>
                    </div>
                    <div class="card-body px-3 py-5">
                        <form action="{{ route('user.bankPayment') }}" method="POST" enctype="multipart/form-data"
                              class="mx-auto" style="max-width: 360px">
                            @csrf

                            <p>
                                Please wire transfer the amount you wish to deposit into your {{ env('APP_NAME') }} account using the bank details provided above.
                                <br>
                                Once the transfer is complete, enter the amount, click "Choose File" to upload the payment proof, and then click "Process Deposit."
                                After this step, the wired funds will be automatically credited to your {{ env('APP_NAME') }} account.
                            </p>

                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group mb-2">
                                <div class="col-md-12">
                                    <label class="fw-semibold mb-2 mt-3">Payment Method</label>
                                    <select class="form-control" name="payment_method_id">
                                       @foreach($bank as $item)
                                            <option value="{{ $item->id }}">{{ $item->bank['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label>Amount</label>
                                <input type="number" name="amount" class="form-control" required="">
                            </div>
                            <div>
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" name="proof" required>
                            </div>
                            <div class="text-center mt-2">
                                 <button class="btn btn-success btn-block mt-3 ">Process Deposit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 py-3">
            <div style="background-color: #171f2a" class="card my-2">
                <div class="card-header">
                    <h4 class="m-4">Deposits History</h4>
                </div>
                <div class="card-body px-3 py-5">
                   <div class="table-responsive">
                           <table class="table table-striped text-white">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach($deposits as $index => $item)
                                        <tr>
                                            <td class="text-white">{{ $index+1 ."SRX2#" }}</td>
                                            <td class="text-white">${{ number_format($item->amount, 2) ?? '' }}</td>
                                            <td class="text-white">{{ optional($item->payment_method)->name ?? 'Bank' }}</td>
                                            <td>
                                                @if($item->status == 0)
                                                    <span class="badge bg-warning">Pending</span>
                                                @else
                                                    <span class="badge bg-success">Successful</span>
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



    <script>
        document.getElementById("customFile").addEventListener("change", function () {
            var fileName = this.files[0].name;

            var label = this.nextElementSibling;
            label.textContent = fileName;
        });
    </script>






@endsection
