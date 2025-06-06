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
                <h2>Best Execution Policy</h2>
                <p>
                    {{ env('APP_NAME') }} (hereinafter as “{{ env('APP_NAME') }}” or “the Firm”) provides mainly
                    automated execution-only services to retail and professional clients (“client”) in the following
                    instruments:
                </p>
                <div class="image"><img
                        src="https://boomassetmarket.com/assets/home/wp-content/uploads/2020/04/trading-central-image-980x350.png"
                        class="aos-init aos-animate"></div>
            </div>
            <div class="tabs-box mt-5">
                <div class="row clearfix">
                    <div class="container mt-5">
                        <h3>Trading Platform</h3>
                        <p>{{ env('APP_NAME') }} customers can trade using the following trading platforms:</p>
                        <ul>
                            <li>MetaTrader 4</li>
                            <li>MetaTrader 4 Mobile</li>
                        </ul>
                        <p>Trading is subject to trading hours’ restrictions and are provided per instrument on the
                            platform.</p>

                        <h4>Execution Venues</h4>
                        <p>The Firm also operates as an agent whereby client transactions are received and transmitted
                            to other reputable liquidity providers.</p>

                        <h4>Price</h4>
                        <p>{{ env('APP_NAME') }} provides two-way pricing quoted live across all its products to
                            clients, accessible on the platform. The firm aims to provide fast, reliable, and
                            uninterrupted prices.</p>
                        <p>To avoid over-reliance on a single provider, {{ env('APP_NAME') }} receives raw pricing data
                            from Liquidity Providers (LPs) and Data Providers like banks and multilateral trading
                            facilities. LPs are vetted for reliability and reviewed regularly by the Risk
                            department.</p>
                        <p>The pricing engines ensure consistent quotes based on average spreads listed on the firm's
                            website.</p>
                        <p>In rare cases where a client cannot trade via the platform (e.g., internet issues),
                            instructions may be sent via phone or email. The firm may confirm execution in writing upon
                            request.</p>

                        <h4>Cost</h4>
                        <p>Spreads and commissions are key trading costs. {{ env('APP_NAME') }} monitors spreads to stay
                            competitive, adjusting for factors like liquidity and volatility. All charges are disclosed
                            prior to transactions.</p>

                        <h4>Speed, Size, and Likelihood of Execution</h4>
                        <p>Clients usually receive immediate execution at the displayed price. LPs handle requests
                            within maximum trade sizes defined in each instrument's contract.</p>
                        <p>Orders are executed at VWAP if they exceed the tradable size, potentially leading to less
                            favorable prices. Positive slippage is passed to clients when available.</p>

                        <h4>Best Execution Monitoring</h4>
                        <p>The firm constantly monitors pricing against the market via internal tools and third-party
                            vendors. It ensures competitive prices using spread analysis and latency measurements.</p>

                        <h4>No Order Aggregation</h4>
                        <p>Client orders are never aggregated with others or internal transactions.</p>

                        <h4>Client Protection</h4>
                        <p>Systems provide default protection and ensure best execution for all clients.</p>

                        <h5>Stop Loss Orders</h5>
                        <p>Clients can set stop loss or trailing stop loss levels. When these levels are reached,
                            positions are closed automatically.</p>

                        <h5>Negative Balance Protection</h5>
                        <p>Clients are protected from losing more than their invested capital.</p>

                        <h5>Toxic Trading</h5>
                        <p>{{ env('APP_NAME') }} monitors for toxic trading behavior and reserves the right to alter
                            execution settings to protect market integrity.</p>

                        <h5>Automatic Stop Out</h5>
                        <p>If margin levels drop below 30%, positions may be closed automatically to prevent further
                            losses.</p>

                        <h4>Conflicts of Interest Disclosure</h4>
                        <p>The execution system does not discriminate between retail and professional clients, though
                            professionals may take more risks or use higher leverage.</p>
                    </div>

                    <div class="btn-box mt-2 text-center"><a href="{{ route('user.dashboard') }}"
                                                             class="theme-btn btn-one">Start Trading</a></div>

                </div>
            </div>
        </div>
    </section>
    <!-- platform-section end -->

@endsection
