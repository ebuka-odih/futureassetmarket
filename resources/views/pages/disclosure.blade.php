@extends('pages.layout.app2')
@section('content')

    <main>
        <div class="uk-section in-liquid-13">
			<div class="uk-container">
                <h4>FCM Disclosure</h4>

                <p>
                    Securities trading is offered to self-directed customers by {{ env('APP_NAME') }} Financial LLC, a broker dealer registered with the Securities and Exchange Commission (SEC). {{ env('APP_NAME') }} Financial LLC is a member of the Financial Industry Regulatory Authority (FINRA), Securities Investor Protection Corporation (SIPC), The New York Stock Exchange (NYSE), NASDAQ and Cboe EDGX Exchange, Inc (CBOE EDGX).
{{ env('APP_NAME') }} Financial LLC is a CFTC registered Futures Commission Merchant with the Commodity Futures Trading Commission (CFTC) and a Member of the National Futures Association (NFA). Futures and futures options trading involves substantial risk and is not suitable for all investors. Please read the Risk Disclosure Statement and other relevant Futures Disclosures located at www.webull.com/fcm-disclosures prior to trading futures products. Futures accounts are not protected by the Securities Investor Protection Corporation (SIPC).
Advisory accounts and services are provided by {{ env('APP_NAME') }} Advisors LLC (also known as "{{ env('APP_NAME') }} Advisors"). {{ env('APP_NAME') }} Advisors is an Investment Advisor registered with and regulated by the SEC under the Investment Advisors Act of 1940. Registration does not imply a level of skill or training. See additional information on the Disclosures webpage. Trades in your {{ env('APP_NAME') }} Advisors account are executed by {{ env('APP_NAME') }} Financial LLC.
                    <br>
                    Account Protection: SIPC and Excess SIPC Coverage
Client securities accounts at {{ env('APP_NAME') }} Financial LLC are protected by the Securities Investor Protection Corporation ("SIPC") for a maximum coverage of $500,000 (with a cash sublimit of $250,000). In addition, {{ env('APP_NAME') }} offers clients Excess SIPC coverage based on the clearing arrangement: For securities accounts under the omnibus clearing relationship with Apex, {{ env('APP_NAME') }} carries an excess SIPC policy with certain underwriters at Lloyd's of London, which extends per account coverage for securities and cash up to an aggregate of $100 million, subject to a maximum limit of $1,900,000 for any one customer’s cash. Securities positions are not subject to any per account sublimit. (ii) For securities accounts that are fully-disclosed to the clearing firm, Apex has purchased an additional insurance policy. The coverage limits provide protection for securities and cash up to an aggregate of $150 million, subject to maximum limits of $37.5 million for any one customer's securities and $900,000 for any one customer's cash.
                    <br>
                    For the purpose of determining a {{ env('APP_NAME') }} Financial LLC covered account, accounts with like names and titles are combined, but accounts with different titles are not (e.g. Individual/John Doe and IRA/John Doe). Futures and other assets held outside the securities account are not covered. SIPC and Excess SIPC Protections do not protect against a loss in the market value of securities.
SIPC is a non-profit, membership corporation funded by broker-dealers that are members of SIPC. For more information about SIPC and answers to frequently asked questions please refer to the following websites:
                    (i)  http://www.SIPC.org (ii) https://www.finra.org/investors/have-problem/your-rights-under-sipc-protection=
Options trading entails significant risk and is not appropriate for all investors. Option investors can rapidly lose the value of their investment in a short period of time and incur permanent loss by expiration date. Losses can potentially exceed the initial required deposit. You need to complete an options trading application and get approval on eligible accounts. Please read the Characteristics and Risks of Standardized Options before trading options.
                    <br>
                    All investments involve risk, and not all risks are suitable for every investor. The value of securities may fluctuate and as a result, clients may lose more than their original investment. The past performance of a security, or financial product does not guarantee future results or returns. Keep in mind that while diversification may help spread risk, it does not assure a profit or protect against loss in a down market.  There is always the potential of losing money when you invest in securities or other financial products. Investors should consider their investment objectives and risks carefully before investing.
                    <br>
                    Diversification does not eliminate the risk of experiencing investment losses. Margin trading increases risk of loss and includes the possibility of a forced sale if account equity drops below required levels. Margin is not available in all account types. Margin trading privileges are subject to {{ env('APP_NAME') }} Financial, LLC review and approval. Leverage carries a high level of risk and is not suitable for all investors. Greater leverage creates greater losses in the event of adverse market movements.
Investors should be aware that system response, execution price, speed, liquidity, market data, and account access times are affected by many factors, including market volatility, size and type of order, market conditions, system performance, and other factors. Market volatility, volume and system availability may delay account access and trade executions.
Free trading of stocks, ETFs, and options refers to $0 commissions for {{ env('APP_NAME') }} Financial LLC self-directed individual cash or margin brokerage accounts and IRAs that trade U.S. listed securities via mobile devices, desktop or website products. A $0.55 per contract fee applies for certain index options and a $0.10 per contract fee applies for oversized option orders. Relevant regulatory and exchange fees may apply. Please refer to our Fee Schedule for more details.


                </p>
                <p>No content on the {{ env('APP_NAME') }} Financial LLC website shall be considered as a recommendation or solicitation for the purchase or sale of securities, options, or other investment products. All information and data on the website is for reference only and no historical data shall be considered as the basis for judging future trends.</p>

			</div>
		</div>



	</main>

@endsection
