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
                    <span class="sub-title mb_14">Market Place</span>
                    <h2>Forex Trading</h2>
                    <h3>Explore an ever-expanding variety of FX instruments</h3>
                    <p>
                        Build your FX-based portfolio and enjoy benefits not offered by most exchanges, such as near-immediate execution of market orders.
                    </p>
                    <div class="image"> <img src="{{ asset('img/forex-image.png') }}"  class="aos-init aos-animate"> </div>

                </div>
                <div class="tabs-box mt-5">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-6">
                                    <div class="content-box">
{{--                                        <figure class="image-box"><img src="{{ asset('assets/images/resource/platform-1.png') }}" alt=""></figure>--}}
                                        <h2>Live Currency Exchange Rates</h2>
                                        <p>
                                            Track real-time exchange rates across major global currencies. Use this dynamic table to stay informed and make smarter trading decisions.
                                        </p>
                                        <div>
                                            <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container">
                                              <div class="tradingview-widget-container__widget"></div>
                                              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                                              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                                              {
                                              "width": "100%",
                                              "height": 400,
                                              "currencies": [
                                                "EUR",
                                                "USD",
                                                "JPY",
                                                "GBP",
                                                "CHF",
                                                "AUD",
                                                "CAD",
                                                "NZD",
                                                "CNY"
                                              ],
                                              "isTransparent": false,
                                              "colorTheme": "light",
                                              "locale": "en",
                                              "backgroundColor": "#ffffff"
                                            }
                                              </script>
                                            </div>
                                            <!-- TradingView Widget END -->
                                        </div>

                                    </div>
                                </div>
                                <div class="tab" id="tab-8">
                                    <div class="content-box">
                                        <figure class="image-box"><img src="assets/images/resource/platform-1.png" alt=""></figure>
                                        <h2>Signal Trading</h2>
                                        <p>
                                            Tap into expert-driven trades with our Signal Trading feature. Copy real-time forex signals from seasoned analysts and automatically mirror their trades with precision. Whether you're new to trading or simply want to follow tested strategies, signal trading gives you the power to act confidently — without the guesswork.
                                        </p>
                                        <ul class="list-style-one clearfix">
                                            <li>Instantly copy trades from professional signal providers</li>
                                            <li>Get notified of high-probability forex setups in real time</li>
                                            <li>Automate your strategy and save time</li>
                                            <li>Reduce risk by following expert-backed entries and exits</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 btn-column">
                            <ul class="tab-btns tab-buttons shop-tab-btn clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-6">Forex Trading</li>
                                <li class="tab-btn" data-tab="#tab-8">Signal Trading</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- platform-section end -->




@endsection
