@extends('pages.layout.app2')
@section('content')

    <!-- banner-style-four -->
    <section class="banner-style-four pt_160 pb_100">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
        <div class="shape">
            <div class="shape-1 rotate-me" style="background-image: url(assets/images/shape/shape-21.png);"></div>
            <div class="shape-2 rotate-me" style="background-image: url(assets/images/shape/shape-22.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_six">
                        <div class="content-box mr_30">
                            <span class="sub-title mb_20">Trade Now</span>
                            <h2>Shape Your Future with <span>Smarter Trading</span></h2>
                            <p>Where opportunity meets strategy. Explore global financial markets, backed by
                                cutting-edge tools and real-time insights.</p>
                            <div class="btn-box">
                                <a href="{{ route('register') }}" class="theme-btn btn-one mr_15">Create Account</a>
                                <a style="margin-top: -15px" href="{{ route('login') }}" class="theme-btn btn-two">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image float-bob-y"><img src="assets/images/banner/banner-img-7.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-four end -->


    <!-- clients-style-two -->
    <section class="clients-style-two">
        <div class="auto-container">
            <div class="inner-container">
                <ul class="clients-list">
                    <li><a href="index.html"><img src="assets/images/clients/clients-8.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-9.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-10.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-11.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-12.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-13.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- clients-style-two end -->


    <!-- process-section -->
    <section class="process-section pt_100 pb_100">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-24.png);"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box pr_130 mr_40 pl_150">
                            <figure class="image image-1"><img src="assets/images/resource/mockup-2.png" alt="">
                            </figure>
                            <figure class="image image-2 p_absolute r_0 b_50"><img
                                    src="assets/images/resource/dashboard-3.png" alt=""></figure>
                            <div class="content-one">
                                <div class="shape"
                                     style="background-image: url(assets/images/shape/shape-23.png);"></div>
                                <span>Sales</span>
                                <h3>1.25 kk</h3>
                                <p>Washington, D.C.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="process-block-one">
                            <div class="inner-box">
                                <div class="shape"
                                     style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <span class="count-text">1</span>
                                <h3> Sign Up Free — No Hidden Fees</h3>
                                <p>Create your free account in minutes. Our team will walk you through setup and give
                                    you instant access to your personal trading dashboard.</p>
                            </div>
                        </div>
                        <div class="process-block-one">
                            <div class="inner-box">
                                <div class="shape"
                                     style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <span class="count-text">2</span>
                                <h3>Discover Top Deals & Trade Instantly</h3>
                                <p>
                                    Browse high-yield investment opportunities ranging from low to high risk. Customize
                                    your strategy and trade with as little or as much as you like — from 1% to 100%.
                                </p>
                            </div>
                        </div>
                        <div class="process-block-one">
                            <div class="inner-box">
                                <div class="shape"
                                     style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <span class="count-text">3</span>
                                <h3>Watch Your Profits Grow</h3>
                                <p>
                                    Track real-time performance, review your investments, and reinvest with ease.
                                    Withdraw or compound your earnings seamlessly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process-section end -->


    <!-- trading-style-three -->
    <section class="trading-style-three">
        <div class="outer-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow"
                                                             target="_blank"></a></div>
                <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols"
                    :
                        [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500 Index"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100 Cash CFD"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR to USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            },
                            {
                                "description": "BNB",
                                "proName": "BINANCE:BNBUSDT"
                            },
                            {
                                "description": "TSLA",
                                "proName": "NASDAQ:TSLA"
                            },
                            {
                                "description": "GBPUSD",
                                "proName": "OANDA:GBPUSD"
                            },
                            {
                                "description": "USD to JPY",
                                "proName": "FX:USDJPY"
                            },
                            {
                                "description": "NVDA",
                                "proName": "NASDAQ:NVDA"
                            },
                            {
                                "description": "",
                                "proName": "NASDAQ:AAPL"
                            },
                            {
                                "description": "",
                                "proName": "NASDAQ:META"
                            },
                            {
                                "description": "",
                                "proName": "NASDAQ:MSFT"
                            }
                        ],
                            "showSymbolLogo"
                    :
                        true,
                            "isTransparent"
                    :
                        false,
                            "displayMode"
                    :
                        "adaptive",
                            "colorTheme"
                    :
                        "dark",
                            "locale"
                    :
                        "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>
    <!-- trading-style-three -->

    <section class="trading-section pt_100 pb_100">
        <div class="auto-container">
            <div class="sec-title centred pb_60">
                <span class="sub-title mb_14">Trading Platforms</span>
                <h2 class="text-white">Things We Trade</h2>
            </div>
            <div class="inner-container clearfix">
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-1.png" alt=""></figure>
                        <h3><a class="text-white" href="markets-details.html">Crypto Trading</a></h3>
                        <p class="text-white">One of the primary methods of gold trading is through the spot</p>
                        <div class="btn-box"><a href="markets-details.html" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div class="trading-block-one ">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-2.png" alt=""></figure>
                        <h3><a class="text-white" href="markets-details.html">Shares Trading</a></h3>
                        <p class="text-white">One of the primary methods of gold trading is through the spot</p>
                        <div class="btn-box"><a href="markets-details.html" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-3.png" alt=""></figure>
                        <h3><a class="text-white" href="markets-details.html">Gold Trading</a></h3>
                        <p class="text-white">One of the primary methods of gold trading is through the spot</p>
                        <div class="btn-box"><a href="markets-details.html" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-4.png" alt=""></figure>
                        <h3><a class="text-white" href="markets-details.html">Currency Trading</a></h3>
                        <p class="text-white">One of the primary methods of gold trading is through the spot</p>
                        <div class="btn-box"><a href="markets-details.html" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-5.png" alt=""></figure>
                        <h3><a class="text-white" href="markets-details.html">Silver Trading</a></h3>
                        <p class="text-white">One of the primary methods of gold trading is through the spot</p>
                        <div class="btn-box"><a href="markets-details.html" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- trading-style-two -->
    <section class="trading-style-two centred pt_100 pb_90">
        <div class="shape">
            <div class="shape-1 float-bob-x" style="background-image: url(assets/images/shape/shape-25.png);"></div>
            <div class="shape-2 rotate-me" style="background-image: url(assets/images/shape/shape-26.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title light pb_60">
                <span class="sub-title mb_14">Trade Now</span>
                <h2>Market Spreads and Swaps</h2>
            </div>
            <div class="project-tab">
                <div class="tab-btn-box mb_40">
                    <ul class="tab-btns product-tab-btns clearfix">
                        <li class="p-tab-btn active-btn" data-tab="#tab-1">Forex</li>
                        <li class="p-tab-btn" data-tab="#tab-2">Cryto CFDs</li>
                        <li class="p-tab-btn" data-tab="#tab-3">Share CFDs</li>
                        <li class="p-tab-btn" data-tab="#tab-4">Commondities</li>
                        <li class="p-tab-btn" data-tab="#tab-5">Spot Metals</li>
                        <li class="p-tab-btn" data-tab="#tab-6">Energies</li>
                        <li class="p-tab-btn" data-tab="#tab-7">Indices</li>
                    </ul>
                </div>
                <div class="p-tabs-content">
                    <div class="p-tab active-tab" id="tab-1">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-2">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-3">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-4">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-5">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-6">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-7">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>AUD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-1.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-2.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64191</span></li>
                                        <li><h6>Bid</h6><span>0.64171</span></li>
                                        <li><h6>Spread</h6><span>12</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>EUR-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-3.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-4.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64156</span></li>
                                        <li><h6>Bid</h6><span>0.64276</span></li>
                                        <li><h6>Spread</h6><span>09</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>GBP-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-5.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-6.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.64578</span></li>
                                        <li><h6>Bid</h6><span>0.64228</span></li>
                                        <li><h6>Spread</h6><span>17</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>CAD-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-7.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-8.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84535</span></li>
                                        <li><h6>Bid</h6><span>0.64589</span></li>
                                        <li><h6>Spread</h6><span>15</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                            <div class="trading-block-two">
                                <div class="inner-box">
                                    <h5>RYL-USD</h5>
                                    <ul class="flag">
                                        <li><img src="assets/images/icons/flag-9.png" alt=""></li>
                                        <li><img src="assets/images/icons/flag-10.png" alt=""></li>
                                    </ul>
                                    <ul class="text-list clearfix">
                                        <li><h6>Ask</h6><span>0.84346</span></li>
                                        <li><h6>Bid</h6><span>0.64514</span></li>
                                        <li><h6>Spread</h6><span>13</span></li>
                                    </ul>
                                    <div class="btn-box"><a href="account-details.html">Trade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trading-style-two end -->


    <!-- platform-section -->
    <section class="platform-section pt_0 pb_100">
        <div class="auto-container">
            <div class="sec-title light centred pb_60">
                <span class="sub-title mb_14">Platforms</span>
                <h2>Trading Platforms</h2>
            </div>
            <div class="tabs-box">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-8">
                                <div class="content-box">
                                    <figure class="image-box"><img src="assets/images/resource/platform-1.png" alt="">
                                    </figure>
                                    <h2>FXT App</h2>
                                    <p>Navigate the financial waves with FXT’s premier trading app, designed to put the
                                        power of the markets in your palm. Our cutting-edge app blends sophisticated
                                        functionality with user-friendly design, enabling traders of all levels to seize
                                        market opportunities anytime, anywhere.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Trade with one tap, anywhere, anytime</li>
                                        <li>Seamlessly manage your account and portfolio</li>
                                        <li>Stay ahead with real-time charts and indicators</li>
                                        <li>Trade with confidence through encrypted</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab" id="tab-9">
                                <div class="content-box">
                                    <figure class="image-box"><img src="assets/images/resource/platform-1.png" alt="">
                                    </figure>
                                    <h2>MT4/MT</h2>
                                    <p>Navigate the financial waves with FXT’s premier trading app, designed to put the
                                        power of the markets in your palm. Our cutting-edge app blends sophisticated
                                        functionality with user-friendly design, enabling traders of all levels to seize
                                        market opportunities anytime, anywhere.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Trade with one tap, anywhere, anytime</li>
                                        <li>Seamlessly manage your account and portfolio</li>
                                        <li>Stay ahead with real-time charts and indicators</li>
                                        <li>Trade with confidence through encrypted</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab" id="tab-10">
                                <div class="content-box">
                                    <figure class="image-box"><img src="assets/images/resource/platform-1.png" alt="">
                                    </figure>
                                    <h2>FXT Cpoy</h2>
                                    <p>Navigate the financial waves with FXT’s premier trading app, designed to put the
                                        power of the markets in your palm. Our cutting-edge app blends sophisticated
                                        functionality with user-friendly design, enabling traders of all levels to seize
                                        market opportunities anytime, anywhere.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Trade with one tap, anywhere, anytime</li>
                                        <li>Seamlessly manage your account and portfolio</li>
                                        <li>Stay ahead with real-time charts and indicators</li>
                                        <li>Trade with confidence through encrypted</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 btn-column">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-8">FXT Webtrader</li>
                            <li class="tab-btn" data-tab="#tab-9">MT4/MT</li>
                            <li class="tab-btn" data-tab="#tab-10">FXT Cpoy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- platform-section end -->


    <!-- trading-style-four -->
    <section class="trading-style-four pt_0 pb_100">
        <div class="auto-container">
            <div class="sec-title light centred pb_60">
                <span class="sub-title mb_14">Learn More</span>
                <h2>What is Trading</h2>
            </div>
            <div class="tabs-box">
                <ul class="tab-btns tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-11">
                        <div class="icon-box"><i class="icon-20"></i></div>
                        <h4>Financial Markets</h4>
                    </li>
                    <li class="tab-btn" data-tab="#tab-12">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>What is Forex</h4>
                    </li>
                    <li class="tab-btn" data-tab="#tab-13">
                        <div class="icon-box"><i class="icon-22"></i></div>
                        <h4>Tools Overview</h4>
                    </li>
                    <li class="tab-btn" data-tab="#tab-14">
                        <div class="icon-box"><i class="icon-23"></i></div>
                        <h4>Platform Comparison</h4>
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-11">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Financial Markets</h2>
                                        <p>Not sure which is the right FOREX com platform for you? Check out our handy
                                            platform comparison table which will show you all the differences.</p>
                                        <p>Check out our handy platform comparison table which will show you all the
                                            differences.</p>
                                        <div class="btn-box">
                                            <a href="account-details.html" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                            <a href="index-2.html" class="theme-btn btn-two">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="assets/images/resource/dashboard-2.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>What is Forex</h2>
                                        <p>Not sure which is the right FOREX com platform for you? Check out our handy
                                            platform comparison table which will show you all the differences.</p>
                                        <p>Check out our handy platform comparison table which will show you all the
                                            differences.</p>
                                        <div class="btn-box">
                                            <a href="account-details.html" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                            <a href="index-2.html" class="theme-btn btn-two">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="assets/images/resource/dashboard-2.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-13">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Tools Overview</h2>
                                        <p>Not sure which is the right FOREX com platform for you? Check out our handy
                                            platform comparison table which will show you all the differences.</p>
                                        <p>Check out our handy platform comparison table which will show you all the
                                            differences.</p>
                                        <div class="btn-box">
                                            <a href="account-details.html" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                            <a href="index-2.html" class="theme-btn btn-two">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="assets/images/resource/dashboard-2.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-14">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Platform Comparison</h2>
                                        <p>Not sure which is the right FOREX com platform for you? Check out our handy
                                            platform comparison table which will show you all the differences.</p>
                                        <p>Check out our handy platform comparison table which will show you all the
                                            differences.</p>
                                        <div class="btn-box">
                                            <a href="account-details.html" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                            <a href="index-2.html" class="theme-btn btn-two">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="assets/images/resource/dashboard-2.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trading-style-four end -->


    <!-- funfact-style-two -->
    <section class="funfact-style-two centred pb_70">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-two">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="10">00</span><span>k</span>
                                </div>
                                <p>Client World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-two">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="99">00</span><span>%</span>
                                </div>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-two">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="150">00</span>m+
                                </div>
                                <p>Money Invested</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-two">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="800">00</span><span>+</span>
                                </div>
                                <p>Expert Traders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-two end -->


    <!-- apps-section -->
    <section class="apps-section">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-27.png);"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                <figure class="image-layer"><img src="assets/images/resource/mockup-3.png" alt=""></figure>
                <div class="content_block_two">
                    <div class="content-box">
                        <div class="sec-title light pb_40">
                            <span class="sub-title mb_14">Download App</span>
                            <h2>Download Trading App</h2>
                            <p>We use cookines to understand how you use our website and to give you the best possible
                                experience.</p>
                        </div>
                        <ul class="download-list clearfix">
                            <li><a href="index.html"><i class="fab fa-apple"></i></a></li>
                            <li><a href="index.html"><img src="assets/images/icons/icon-2.png" alt=""></a></li>
                            <li><a href="index.html"><i class="fab fa-android"></i></a></li>
                            <li><a href="index.html"><img src="assets/images/icons/icon-6.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- apps-section end -->


    <!-- working-section -->
    <section class="working-section pt_100 pb_100">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-28.png);"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div class="video_block_one">
                        <div class="video-box z_1 p_relative pl_50 pb_50 centred">
                            <div class="video-inner" style="background-image: url(assets/images/resource/video-2.jpg);">
                                <div class="video-content">
                                    <div class="curve-text">
                                        <span class="curved-circle">watch&nbsp;&nbsp;the&nbsp;&nbsp;video&nbsp;&nbsp;right&nbsp;&nbsp;now&nbsp;&nbsp;</span>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                                       class="lightbox-image video-btn" data-caption=""><i class="icon-11"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_nine">
                        <div class="content-box ml_70">
                            <div class="sec-title light pb_35">
                                <span class="sub-title mb_10">Easy Steps</span>
                                <h2>How it Works</h2>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <span class="count-text">1</span>
                                    <h3><a href="index-2.html">Sign up, It's Free!</a></h3>
                                    <p>Our team will set up your account and help you build job to easy-to-use web
                                        dashboard.</p>
                                </div>
                                <div class="single-item">
                                    <span class="count-text">2</span>
                                    <h3><a href="index-2.html">Find best Deals and Invest</a></h3>
                                    <p>Create and post anywhere from 1-100 job openings with just a few clicks.
                                        customize your own.</p>
                                </div>
                                <div class="single-item">
                                    <span class="count-text">3</span>
                                    <h3><a href="index-2.html">Get you profit back</a></h3>
                                    <p>View bios, reviews, and rosters before workers arrive on the job, and post
                                        reviews and pay, effortlessly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working-section end -->


    <!-- experience-section -->
    <section class="experience-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title light pb_14">
                                <span class="sub-title mb_14">Experience</span>
                                <h2>Your trades in the right place</h2>
                            </div>
                            <div class="text-box">
                                <p>We use cookines to understand how you use our website and to give you the best
                                    possible</p>
                                <a href="index-3.html" class="theme-btn btn-one">Create Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item mb_95">
                                        <h2>1 milion+</h2>
                                        <p>XTB Group Clients</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item mb_95">
                                        <h2>5 milion+</h2>
                                        <p>App downloads</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <h2>18+</h2>
                                        <p>Years on the market</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <h2>FSC</h2>
                                        <p>Regulated by authorities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experience-section end -->


    <!-- news-section -->
    <section class="news-section pt_100 pb_70">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-27.png);"></div>
        <div class="auto-container">
            <div class="sec-title centred light pb_60">
                <span class="sub-title mb_14">Media Center</span>
                <h2>Latest News Update</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <span class="post-date">20TH April, 2024</span>
                            <h3><a href="blog-details.html">USD/JPY Stages the more upsides can Bulls Aim for 160x
                                    Bonus?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida
                                gravida. Discovery of the text's origin is attributed</p>
                            <div class="link"><a href="blog-details.html">Read More</a></div>
                        </div>
                        <div class="author-box">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <span>Daniel Marcon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <span class="post-date">19TH April, 2024</span>
                            <h3><a href="blog-details.html">Nemo's Eurovision win fires up Swiss advocates for
                                    non-binary rights</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida
                                gravida. Discovery of the text's origin is attributed</p>
                            <div class="link"><a href="blog-details.html">Read More</a></div>
                        </div>
                        <div class="author-box">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <span>Robert Henry</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <span class="post-date">18TH April, 2024</span>
                            <h3><a href="blog-details.html">Wall St Week Ahead-Earnings bolster US stocks but crucial
                                    inflation report looms</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida
                                gravida. Discovery of the text's origin is attributed</p>
                            <div class="link"><a href="blog-details.html">Read More</a></div>
                        </div>
                        <div class="author-box">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <span>Victor Classic</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text-box">
                            <h2>Subscribe for latest update</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="https://azim.hostlin.com/Fortradex/contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit" class="theme-btn btn-one">Subscribe<i class="icon-26"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

@endsection
