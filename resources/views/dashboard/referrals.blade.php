@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-xl-12 col-xxl-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">

                    <div class="container">
                        <h3>Your Referrals</h3>

                        <div class="mb-5">
                             <div class="col-12">
                <div class="referral-section">
                    <p>Referral link:</p>
                    <div class="input-group">
                        <input
                            type="text"
                            value="{{ route('register', ['ref' => auth()->user()->referral->code]) }}"
                            id="referralLink"
                            readonly
                            class="form-control"
                        >
                        <button
                            class="btn btn-primary"
                            onclick="copyReferral()"
                        >
                            Copy
                        </button>
                    </div>
                </div>

                <script>
                    function copyReferral() {
                        var copyText = document.getElementById("referralLink");
                        copyText.select();
                        document.execCommand("copy");
                        alert("Referral link copied!");
                    }
                </script>
{{--                <a href="{{ url('/register?ref=' . auth()->user()->referral->code ?? '') }}">Your referral link</a>--}}
            </div>

                        </div>

                        @if($referrals->count() > 0)
                            <table class="table">
                                <thead class="text-white">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                @foreach($referrals as $referredUser)
                                    <tr>
                                        <td>{{ $referredUser->name }}</td>
                                        <td>{{ $referredUser->email }}</td>
                                        <td>{{ $referredUser->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>You haven't referred anyone yet. Share your referral link to invite friends!</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        @include('dashboard.layout.footer')


    </div>

@endsection
