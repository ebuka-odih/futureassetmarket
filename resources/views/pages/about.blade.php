@extends('pages.layout.app2')
@section('content')

    <main>
        <div class="uk-section in-liquid-13">
            <div class="uk-container">
                <div class="uk-grid-large uk-child-width-1-2@m uk-grid" data-uk-grid="">
                    <div>
                        <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-card-body">
                                <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Stockbroker.jpg/800px-Stockbroker.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-first-column">
                        <h2 class="uk-margin-small-bottom">Who <span class="in-highlight">We Are.</span></h2>
                        <p>
                            At {{ env('APP_NAME') }}, we are more than just a financial company—we are innovators at the
                            intersection of technology and finance. With the customer at the heart of our operations,
                            the internet as our foundation, and technology as our driving force, we’re committed to
                            empowering investors through intelligent tools and exceptional services. Our leadership team
                            brings deep expertise from both the tech and finance industries, and we focus on creating
                            efficient, reliable, and accessible solutions that make investing easier and smarter. Enjoy
                            Tech. Enjoy Investing.

                        </p>
                        <h4 class="text-center">Our Belief</h4>
                        <p>
                            We believe that individual investors are a vital part of the financial ecosystem and deserve
                            more than just traditional services. Investors should be empowered with better information,
                            advanced tools, opportunities, and lower costs to help them thrive. At {{ env('APP_NAME') }},
                            respecting the investor is respecting the market. Technology is the investor’s best
                            ally—enabling smarter, faster decisions and expanding capabilities in terms of time, scale,
                            and technique. Technology is the future, and we’re here to make it work for you.
                        </p>
                        <h4 class="text-center">What we offer</h4>
                        <p>
                            As a forward-thinking financial company driven by technology, {{ env('APP_NAME') }} offers an
                            all-in-one self-directed investment platform designed to provide a seamless and superior
                            user experience. Our platform is equipped with advanced tools that help investors take
                            control of their financial futures.
                        </p>
                        <h4 class="text-center">Key Features:</h4>
                        <ul>
                            <li> Zero Commission on trades</li>
                            <li> Free Real-Time Quotes (provided by Nasdaq Last Sale)</li>
                            <li> Multi-Platform Accessibility for seamless trading across mobile, desktop, and web</li>
                            <li> Full Extended Hours Trading to access the market outside regular trading hours</li>
                            <li> Online Help for quick and responsive support whenever you need it</li>
                        </ul>
                        <p>
                            We make investing accessible and intuitive for all, from novice traders to seasoned
                            professionals. With {{ env('APP_NAME') }}, you can easily manage your portfolio, trade stocks,
                            ETFs, and options, and get the real-time insights you need to make informed decisions.

                        </p>
                    </div>

                </div>

                <br><br>
                <div>
                    <h4>Brokerage Services & Legal Information</h4>
                    <p>
                        Brokerage Services & Legal Information

                        Brokerage services are provided by {{ env('APP_NAME') }} Financial LLC, a broker-dealer registered with
                        the
                        Securities and Exchange Commission (SEC). {{ env('APP_NAME') }} Financial LLC is a member of the
                        Financial
                        Industry Regulatory Authority (FINRA), Securities Investor Protection Corporation (SIPC), the
                        New
                        York Stock Exchange (NYSE), NASDAQ, and Cboe EDGX Exchange, Inc. (CBOE EDGX).

                    </p>
                    <p>{{ env('APP_NAME') }} Financial LLC is a member of SIPC, which provides protection for securities
                        customers
                        up to $500,000 (including $250,000 for claims for cash). For additional protection, our clearing
                        firm, TD Ameritrade Clearing, a subsidiary of Charles Schwab, offers supplementary insurance
                        coverage for securities and cash. This coverage extends to an aggregate of $500 billion, with
                        specific limits of $1 billion for any one customer’s securities and $5 million for any one
                        customer’s cash. Please note that similar to SIPC protection, this additional insurance does not
                        cover market value losses.
                        <br><br>
                        At {{ env('APP_NAME') }}, we prioritize data security, implementing the latest technology to protect
                        your personal and financial information.

                    </p>
                    <h4>Risk Disclosure:</h4>
                    <p>
                        Investing involves risk, including the potential loss of capital. Market fluctuations can lead
                        to changes in the value of securities, and clients may lose more than their initial investment.
                        We recommend that all investors carefully assess their risk tolerance and financial goals before
                        trading.
                    </p>
                    <h4>Account Protection:</h4>
                    <p>
                        Securities accounts at {{ env('APP_NAME') }} Financial LLC are protected by SIPC and additional excess
                        SIPC coverage, depending on the clearing arrangement. For accounts under the omnibus clearing
                        relationship with TD Ameritrade Clearing, excess SIPC coverage is provided up to $2 billion,
                        with higher limits for cash. For fully-disclosed accounts, TD Ameritrade Clearing offers
                        additional insurance coverage of up to $500 million for securities and cash.
                        <br>
                         Please note that SIPC and excess SIPC protections do not cover losses in the market value of
                        securities.
                    </p>
                    <h4>Options and Futures Trading:</h4>
                    <p>
                        Options trading entails significant risk, and the value of options can decline rapidly. Only
                        investors who understand the risks involved should trade options. Futures trading involves
                        additional risk, and these products may not be suitable for all investors. Please review the
                        Risk Disclosure Statement and other relevant materials before engaging in futures or options
                        trading.
                    </p>
                    <h4>Diversification and Margin Trading:</h4>
                    <p>
                        Diversification does not eliminate risk, and margin trading increases the potential for loss,
                        including the possibility of forced sales if account equity falls below required levels. Margin
                        trading privileges are subject to approval, and leverage can lead to larger losses in adverse
                        market conditions.
                    </p>
                     <h4>Invest with Confidence.</h4>
                    <p>
                        {{ env('APP_NAME') }} combines technology and finance to deliver a comprehensive, efficient, and secure
                        platform for investors. Whether you’re trading stocks, ETFs, or options, we provide the tools,
                        resources, and support you need to succeed in the markets. With {{ env('APP_NAME') }}, you can trade
                        smarter and more confidently—making technology work for you.
                    </p>

                </div>

            </div>
        </div>


    </main>

@endsection
