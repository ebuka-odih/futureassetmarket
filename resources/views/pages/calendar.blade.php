@extends('pages.layout.app')
@section('content')




        <!-- trading-style-five -->
        <section class="trading-style-five pt_90 pb_100">
            <div class="auto-container">
                <div class="sec-title centred pb_60 mb-4">

                    <h2>Economic Calendar</h2>
                     <p style="font-size: 20px">
                        Stay updated with key global economic events that move the markets. Track interest rate decisions, inflation data, GDP releases, and more — all in one place. Use the calendar to time your trades and plan with confidence.
                    </p>
                </div>
                <div class="inner-container">

                   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
  {
  "colorTheme": "light",
  "isTransparent": false,
  "width": "100%",
  "height": "550",
  "locale": "en",
  "importanceFilter": "-1,0,1",
  "countryFilter": "ar,au,br,ca,cn,fr,de,in,id,it,jp,kr,mx,ru,sa,za,tr,gb,us,eu"
}
  </script>
</div>
<!-- TradingView Widget END -->
                </div>
            </div>
        </section>
        <!-- trading-style-five end -->





@endsection
