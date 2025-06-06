@extends('pages.layout.app')
@section('content')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-style-three -->
        <section class="about-style-three pt_90 pb_100">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_seven">
                            <div class="content-box">
                                <div class="sec-title pb_50">
                                    <h2>Future Asset Market</h2>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>Who we are</h3>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                               <p>At {{ env('APP_NAME') }}, we know what it’s like to trade. With the scale of a global fintech and the agility of a start-up, we’re here to arm you with everything you need to take on the global markets with confidence.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>History</h3>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>
                                                    {{ env('APP_NAME') }} was founded in 2010 in Melbourne, Australia by a team of experienced traders with a shared commitment to improve the world of online trading. Frustrated by delayed executions, expensive prices and poor customer support, we set out to provide traders around the world with superior technology, low-cost spreads and a genuine commitment to helping them master the trade.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>How it works</h3>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Facilitating international payments and foreign exchange transactions, issuing credit cards, and more.</p>
                                                <a href="faq.html">Learn More</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                        <div class="video_block_one">
                            <div class="video-box z_1 p_relative ml_50 centred">
                                <figure class="image-box"><img src="{{ asset('img2/banner.png') }}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- funfact-style-two -->
        <section class="funfact-style-two centred pb_100">
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


        <!-- cta-section -->
        <section class="cta-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                    <div class="icon-box"><img src="assets/images/icons/coin-1.png" alt=""></div>
                    <h2><span>Trade for</span> less, <span>with</span> low prices <br /><span>and</span> transparent fees</h2>
                    <div class="btn-box"><a href="index-3.html" class="theme-btn btn-one">Try Demo Trading</a></div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- account-style-three -->
        <section class="account-style-three pt_100 pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-01"></i></div>
                                            <h3><a href="account-details.html">Professional Account</a></h3>
                                            <p>Traders with professional accounts gain access to a wide range of benefits, including enhanced trading platforms</p>
                                        </div>
                                    </div>
                                    <div class="account-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-03"></i></div>
                                            <h3><a href="account-details.html">Demo Account</a></h3>
                                            <p>Trading demo accounts are particularly valuable for novice traders who are new to the world of investing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 account-block pt_75">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-02"></i></div>
                                            <h3><a href="account-details.html">Overview Account</a></h3>
                                            <p>The primary feature of a trading overview account is its ability to aggregate information from multiple accounts and</p>
                                        </div>
                                    </div>
                                    <div class="account-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-04"></i></div>
                                            <h3><a href="account-details.html">Islamic Account</a></h3>
                                            <p>Islamic accounts also adhere to ethical guidelines that prohibit trading certain financial instruments deemed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                    <span class="sub-title mb_14">Accounts</span>
                                    <h2>Level up your trading with <span>Account</span></h2>
                                </div>
                                <div class="text-box">
                                    <p>Not sure which is the right FOREX com platform for you? Check out our handy platform comparison table which will show you all the differences.</p>
                                    <ul class="list-style-one mb_40 clearfix">
                                        <li>Trade with one tap, anywhere, anytime</li>
                                        <li>Seamlessly manage your account and portfolio</li>
                                        <li>Stay ahead with real-time charts and indicators</li>
                                    </ul>
                                    <a href="index-3.html" class="theme-btn btn-one">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account-style-three end -->


    

@endsection
