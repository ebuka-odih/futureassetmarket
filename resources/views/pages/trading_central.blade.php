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
                    <h2>{{ env('APP_NAME') }} Central</h2>
                    <p>
                        {{ env('APP_NAME') }} offers investors Trading Central, a cutting-edge trading signal tool used by the world's largest banks and professional traders. The tool gives immediate operational advice, technical form and in-depth analysis of market changes.
                    </p>
                    <div class="image"> <img src="https://boomassetmarket.com/assets/home/wp-content/uploads/2020/04/trading-central-image-980x350.png"  class="aos-init aos-animate"> </div>
                </div>
                <div class="tabs-box mt-5">
                    <div class="row clearfix">
                        <h3 class="text-center mb-3">Trading Central Tools</h3>
                        <p>
                            A web-based application that enables you to access TRADING CENTRAL's global research directly as it updates technical levels, targets and time-frames all assets throughout the trading day. This award-winning research portal will allow you to receive up-to-the-minute technical analysis.
                        </p>
                        <div class="mt-4 text-center">
                            <h4 class="text-center">Why choose Trading Central</h4>
                            <p>
                                TRADING CENTRAL (TC) is a service provider specializing in investment research and financial market technical analysis. Its offices cover the financial centers of Paris, London, New York and Hong Kong. It has provided financial market technical analysis services to 38 of the top 50 global investment banks, hedge funds, specialized traders and brokers.
                            </p>
                        </div>
                        <div class="btn-box mt-2 text-center"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading</a></div>




                    </div>
                </div>
            </div>
        </section>
        <!-- platform-section end -->




@endsection
