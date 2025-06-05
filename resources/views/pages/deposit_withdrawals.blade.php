@extends('pages.layout.app')
@section('content')


 <!-- page-title -->
{{--        <section class="page-title centred pt_90 pb_0">--}}
{{--            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>--}}
{{--            <div class="auto-container">--}}
{{--                <div class="content-box">--}}
{{--                    <h1>Forex Trading</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- page-title end -->


        <!-- platform-section -->
        <section class="platform-section alternat-2 pt_90 pb_130">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <h2>Deposit & Withdrawals</h2>
                    <p>
                        At {{ env('APP_NAME') }} we call ourselves a boutique FX shop for a reason. We take the support of our customers very seriously and by doing so have earned the trust of hundreds of white labels and thousands of IBs.

                    </p>
                    <div class="image"> <img src="https://boomassetmarket.com/assets/home/wp-content/uploads/2020/04/deposit-withdrawal-image-980x350.png" class="aos-init aos-animate"> </div>

                </div>
                <div class="tabs-box mt-5">
                    <div class="row clearfix">
                        <h3>Stay in Control of Your Funds</h3>
                        <p>
                            Being able to quickly replenish your account using multiple deposit options can be critical during the fast market moves. At {{ env('APP_NAME') }} we believe that it is crucial you can manage your funds effectively with minimal transaction costs.
                        </p>
                        <div class="mt-4">
                            <h3>
                            Deposit / Withdrawal Methods
                        </h3>
                        <p>
                            Additionally, we provide Instant Internal Transfer options to clients who hold multiple accounts. It can be done with just a few clicks from inside the Client Portal. Please note, this function only works during market open hours, so always refer to your Client Portal for more details.
                            <br><br>
                            Some options are only available to residents of certain countries. For added security, we are constantly adding new deposit channels as well as doing maintenance checks on the existing ones. Please refer to your Client Portal for up to date information on each channel and operating hours as they may change. Also note that, when you request a withdrawal from your Client Portal, the withdrawal will be in the base currency of your trading account.
                        </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- platform-section end -->




@endsection
