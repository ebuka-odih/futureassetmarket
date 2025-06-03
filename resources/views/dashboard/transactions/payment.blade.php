@extends('dashboard.layout.app')
@section('content')


    <div class="container-fluid main-content px-2 px-lg-4">

        <div class="row my-2 g-3 g-lg-4">

          <div class="col-lg-7 offset-lg-2">
            <div class="right">
              <div style="background-color: #171f2a" class="card my-2 ">
                    <div class="card-header">
                        <h4 class="mb-0 text-center">Crypto Payment</h4>
                    </div>
                    <div class="card-body px-3 py-5">
                        <form action="{{ route('user.confirmPayment', $deposit->id) }}" method="POST" enctype="multipart/form-data"
                              class="mx-auto" style="max-width: 360px">
                            @csrf
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

                            <h5>Pay to {{ $deposit->payment_method->name }} Address</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" id="wallet" value="{{ $deposit->payment_method->value }}" readonly>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="copyFunction()">
                                        <i class="fas fa-clipboard"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="m-3 text-center">
                                <h6>Scan Qrcode</h6>
                                {!! QrCode::size(130)->color(0, 0, 0)->backgroundColor(255, 255, 255)->generate($deposit->payment_method->value) !!}

                            </div>
                            <div class="mt-5">
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" name="proof" required>
                            </div>
                            <div class="text-center mt-2">
                                 <button class="btn btn-success btn-block mt-3 ">Confirm Deposit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>



      </div>




  <script>
    function copyFunction() {
        var copyText = document.getElementById("wallet");

        // Create a temporary textarea to copy the text
        var tempInput = document.createElement("textarea");
        tempInput.value = copyText.value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        alert("Copied: " + copyText.value);
    }
</script>





    <!-- Script -->
<script>
    // Function to toggle the collapse
    document.addEventListener('DOMContentLoaded', function () {
        const accordions = document.querySelectorAll('.card-link');
        accordions.forEach(accordion => {
            accordion.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href').replace('#', '');
                const target = document.getElementById(targetId);
                const isOpen = target.classList.contains('show');

                // Close all open collapses
                document.querySelectorAll('.collapse.show').forEach(collapse => {
                    collapse.classList.remove('show');
                });

                // Toggle the clicked collapse
                if (!isOpen) {
                    target.classList.add('show');
                } else {
                    target.classList.remove('show');
                }

                e.preventDefault();
            });
        });
    });

    // Function to copy wallet address to clipboard

</script>

@endsection
