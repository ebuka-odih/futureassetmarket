@extends('pages.layout.app')
@section('content')

    <!-- about-style-three -->
    <section class="about-style-three pt_90 pb_100">
        <div class="auto-container">
            <div class="container mt-5 mb-5">
  <h3 class="mb-4">Risk Disclaimer</h3>

  <p class="mb-3">
    Trading financial instruments such as stocks, forex, and derivatives on {{ env('APP_NAME') }} involves a high level of risk and may not be suitable for all investors. Before engaging in any trading activity, you should carefully assess your financial situation, level of experience, and risk tolerance. You could lose more than your initial investment.
  </p>

  <p class="mb-3">
    The information provided on {{ env('APP_NAME') }} does not constitute financial advice, investment recommendations, or solicitation to buy or sell any asset. All trading decisions made by users are their sole responsibility. Past performance is not indicative of future results.
  </p>

  <p class="mb-3">
    Leveraged trading amplifies both potential profits and potential losses. It is crucial to understand how margin trading works and the implications of using leverage. In volatile market conditions, stop-loss orders and other risk-management tools may not always protect you from heavy losses.
  </p>

  <p class="mb-3">
    {{ env('APP_NAME') }} provides educational content and tools to support informed trading, but we do not guarantee accuracy, completeness, or timeliness of market data or signals. Users should conduct their own research or seek independent professional advice before making financial decisions.
  </p>

  <p class="mb-3">
    By using {{ env('APP_NAME') }}, you acknowledge that you fully understand the risks involved and accept full responsibility for your trading activity. If you are unsure about any aspect of trading, we strongly advise that you consult a licensed financial advisor.
  </p>
</div>


        </div>
    </section>
    <!-- about-style-three end -->

@endsection
