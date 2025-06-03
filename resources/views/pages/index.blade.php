@extends('pages.layout.app')
@section('content')

    <!-- banner-section -->
    <section class="banner-section p_relative pt_20">
        <div class="large-container">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-1.jpg);"></div>
                    <div class="content-box">
                        <h2>Discover High-Growth Stocks</h2>
                        <p>Unlock curated stock picks backed by research and performance insights. From tech giants to emerging disruptors — start building a portfolio that reflects the future.</p>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn btn-one">Create Account</a>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-2.jpg);"></div>
                    <div class="content-box">
                        <h2>Smart Investing, Simplified</h2>
                        <p>Manage your stocks with ease — track gains, set alerts, and rebalance anytime. Whether you're a long-term investor or looking for short-term opportunities, we’ve got the tools.</p>
                        <div class="btn-box">
                            <a href="{{ route('login') }}" class="theme-btn btn-one">Login</a>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-3.jpg);"></div>
                    <div class="content-box">
                        <h2>Secure & Informed Decisions</h2>
                        <p>We combine real-time data, analyst ratings, and historical trends to help you make confident investment moves — with full transparency and risk levels clearly marked.</p>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


<section class="process-section pt_100 pb_100">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-24.png);"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box pr_130 mr_40 pl_150">
                            <figure class="image image-1"><img src="assets/images/resource/mockup-2.png" alt="">
                            </figure>
                            <figure class="image image-2 p_absolute r_0 b_50"><img src="assets/images/resource/dashboard-3.png" alt=""></figure>
                            <div class="content-one">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-23.png);"></div>
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
                                <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <span class="count-text">1</span>
                                <h3> Sign Up Free — No Hidden Fees</h3>
                                <p>Create your free account in minutes. Our team will walk you through setup and give
                                    you instant access to your personal trading dashboard.</p>
                            </div>
                        </div>
                        <div class="process-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <span class="count-text">2</span>
                                <h3>Discover Top Deals &amp; Trade Instantly</h3>
                                <p>
                                    Browse high-yield investment opportunities ranging from low to high risk. Customize
                                    your strategy and trade with as little or as much as you like — from 1% to 100%.
                                </p>
                            </div>
                        </div>
                        <div class="process-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
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


    <!-- account-section -->
    <section class="account-section pt_100 pb_70">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
        <div class="auto-container">
            <div class="sec-title pb_60 centred">
                <span class="sub-title mb_14">Account</span>
                <h2>Trading Accounts</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                    <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-01"></i></div>
                            <h3><a href="account-details.html">Professional Account</a></h3>
                            <p>Traders with professional accounts gain access to a wide range of benefits, including
                                enhanced trading platforms</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                    <div class="account-block-one wow fadeInUp animated" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-02"></i></div>
                            <h3><a href="account-details.html">Overview Account</a></h3>
                            <p>The primary feature of a trading overview account is its ability to aggregate information
                                from multiple accounts and</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                    <div class="account-block-one wow fadeInUp animated" data-wow-delay="400ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-03"></i></div>
                            <h3><a href="account-details.html">Demo Account</a></h3>
                            <p>Trading demo accounts are particularly valuable for novice traders who are new to the
                                world of investing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                    <div class="account-block-one wow fadeInUp animated" data-wow-delay="600ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-04"></i></div>
                            <h3><a href="account-details.html">Islamic Account</a></h3>
                            <p>Islamic accounts also adhere to ethical guidelines that prohibit trading certain
                                financial instruments deemed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- account-section -->

    <section class="trading-style-four pt_0 pb_100">
        <div class="auto-container">
            <div class="sec-title light centred pb_60">

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
                        <h4>Stock Market</h4>
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
                    <div class="tab active-tab" id="tab-11" style="display: block;">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Financial Markets</h2>
                                       <p>
                                           Explore the broad landscape of financial opportunities. From public companies to commodities, learn how markets work and what drives them.
                                       </p>
                                        <div class="btn-box">
                                            <a href="{{ route('user.dashboard') }}" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="{{ asset('img/stock.webp') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-12" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Explore Public Company Shares</h2>
                                        <p>
                                            The stock market is a dynamic environment where investors buy and sell shares of publicly traded companies. It offers a gateway to own a piece of businesses across industries — from technology and healthcare to energy and retail. Every stock represents a share in a company’s potential growth, profits, and market influence.
                                        </p>
                                        <p>
                                            Stock prices fluctuate based on a range of factors including earnings reports, economic data, industry trends, and global events. As an investor, understanding what moves the market is crucial to making informed decisions and managing risk.
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('user.dashboard') }}" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_70">
                                    <figure class="image"><img src="{{ asset('img/STOCK.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-13" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Tools Overview</h2>
                                        <p>Get familiar with the essential tools that support smarter investing. Charts, indicators, analysis platforms — learn how each one helps you make better decisions.</p>
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
                    <div class="tab" id="tab-14" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_three">
                                    <div class="content-box mr_30">
                                        <h2>Platform Comparison</h2>
                                        <p>
                                            Choosing the right platform can make all the difference. We've compared the top investment dashboards side by side so you can quickly find what fits your strategy and comfort level.
                                        </p>
                                        <p>
                                            Browse features, user experience, and supported assets in one view to help you decide where to manage your investments.
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('user.dashboard') }}" class="theme-btn btn-one mr_20">Start
                                                Trading</a>
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

        <!-- trading-section -->
    <section class="trading-section pt_100 pb_100">
        <div class="auto-container">
            <div class="sec-title centred pb_60">
                <span class="sub-title mb_14">Market</span>
                <h2>What To Trade </h2>
            </div>
            <div class="inner-container clearfix">
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-2.png" alt=""></figure>
                        <h3><a href="{{ route('user.dashboard') }}">Shares Trading</a></h3>
                        <p>
                            Trade stocks of major global companies and build a portfolio with long-term growth potential. Ideal for investors seeking consistent returns, dividends, and ownership in established businesses.
                        </p>
                        <div class="btn-box"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading</a></div>
                    </div>
                </div>
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="https://img.freepik.com/premium-photo/stock-trading-icon-candle-stick-with-money-coin_34478-3031.jpg?semt=ais_hybrid&w=740" alt=""></figure>
                        <h3><a href="{{ route('user.dashboard') }}">ETF Trading</a></h3>
                        <p>
                            Exchange Traded Funds (ETFs) offer a balanced approach to investing. Gain exposure to multiple assets stocks, bonds, or commodities through a single trade. Perfect for diversified, low cost investing with reduced risk.
                        </p>
                        <div class="btn-box"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>

                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-3.png" alt=""></figure>
                        <h3><a href="markets-details.html">Gold Trading</a></h3>
                        <p>Use gold to protect your capital during market swings. It's a reliable asset in times of economic uncertainty.</p>
                        <div class="btn-box"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-4.png" alt=""></figure>
                        <h3><a href="markets-details.html">Currency Trading</a></h3>
                        <p>Exchange global currencies based on economic trends. The market runs 24/5 and offers unmatched liquidity.</p>
                        <div class="btn-box"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
                <div style="visibility: hidden" class="trading-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/trading-4.png" alt=""></figure>
                        <h3><a href="markets-details.html">Currency Trading</a></h3>
                        <p>Exchange global currencies based on economic trends. The market runs 24/5 and offers unmatched liquidity.</p>
                        <div class="btn-box"><a href="{{ route('user.dashboard') }}" class="theme-btn btn-one">Start Trading
                                Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trading-section end -->


    <!-- funfact-section -->
    <section class="funfact-section mb-3 d-none">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="150">00</span>+<span
                                        class="text">Countries</span>
                                </div>
                                <p>We operate across more than 150 countries, offering access to global markets shaped by local regulations and trade policies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="40">00</span>+<span
                                        class="text">Million Invest</span>
                                </div>
                                <p>Over 40 million dollars in active investments reflect the trust and confidence of our growing investor community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="90">00</span>+<span class="text">Recognitions</span>
                                </div>
                                <p>Our commitment to innovation and client success has earned us over 90 recognitions from financial industry leaders worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- trading-style-two -->
    <section class="trading-style-two centred pt_100 pb_90">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="sec-title light pb_60">
                <span class="sub-title mb_14">Trade Now</span>
                <h2>Market Exchange</h2>
            </div>
            <div class="project-tab">
                <div class="tab-btn-box mb_40">
                    <ul class="tab-btns product-tab-btns clearfix">
                        <li class="p-tab-btn active-btn" data-tab="#tab-1">Stocks</li>
                        <li class="p-tab-btn" data-tab="#tab-2">Crypto</li>
                        <li class="p-tab-btn" data-tab="#tab-3">Forex</li>
                        <li class="p-tab-btn" data-tab="#tab-7">Indices</li>
                    </ul>
                </div>
                <div class="p-tabs-content">
                    <div class="p-tab active-tab" id="tab-1">
                        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "exchange": "US",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": false,
  "showFloatingTooltip": false,
  "width": "100%",
  "height": "550",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(219, 219, 219, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
}
  </script>
</div>
<!-- TradingView Widget END -->
                    </div>
                    <div class="p-tab" id="tab-2">
                        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": 550,
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                    </div>
                    <div class="p-tab" id="tab-3">
                        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": 550,
  "defaultColumn": "overview",
  "defaultScreen": "general",
  "market": "forex",
  "showToolbar": true,
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                    </div>
                    <div class="p-tab" id="tab-7">
                        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": "100%",
  "height": 550,
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "FOREXCOM:SPXUSD",
          "displayName": "S&P 500 Index"
        },
        {
          "name": "FOREXCOM:NSXUSD",
          "displayName": "US 100 Cash CFD"
        },
        {
          "name": "FOREXCOM:DJI",
          "displayName": "Dow Jones Industrial Average Index"
        },
        {
          "name": "INDEX:NKY",
          "displayName": "Japan 225"
        },
        {
          "name": "INDEX:DEU40",
          "displayName": "DAX Index"
        },
        {
          "name": "FOREXCOM:UKXGBP",
          "displayName": "FTSE 100 Index"
        }
      ]
    },
    {
      "name": "Forex",
      "originalName": "Forex",
      "symbols": [
        {
          "name": "FX:EURUSD",
          "displayName": "EUR to USD"
        },
        {
          "name": "FX:GBPUSD",
          "displayName": "GBP to USD"
        },
        {
          "name": "FX:USDJPY",
          "displayName": "USD to JPY"
        },
        {
          "name": "FX:USDCHF",
          "displayName": "USD to CHF"
        },
        {
          "name": "FX:AUDUSD",
          "displayName": "AUD to USD"
        },
        {
          "name": "FX:USDCAD",
          "displayName": "USD to CAD"
        }
      ]
    },
    {
      "name": "Futures",
      "originalName": "Futures",
      "symbols": [
        {
          "name": "BMFBOVESPA:ISP1!",
          "displayName": "S&P 500 Index Futures"
        },
        {
          "name": "BMFBOVESPA:EUR1!",
          "displayName": "Euro Futures"
        },
        {
          "name": "PYTH:WTI3!",
          "displayName": "WTI CRUDE OIL"
        },
        {
          "name": "BMFBOVESPA:ETH1!",
          "displayName": "Hydrous ethanol"
        },
        {
          "name": "BMFBOVESPA:CCM1!",
          "displayName": "Corn"
        }
      ]
    },
    {
      "name": "Bonds",
      "originalName": "Bonds",
      "symbols": [
        {
          "name": "EUREX:FGBL1!",
          "displayName": "Euro Bund"
        },
        {
          "name": "EUREX:FBTP1!",
          "displayName": "Euro BTP"
        },
        {
          "name": "EUREX:FGBM1!",
          "displayName": "Euro BOBL"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": false,
  "colorTheme": "dark",
  "locale": "en",
  "backgroundColor": "#131722"
}
  </script>
</div>
<!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trading-style-two end -->





@endsection
