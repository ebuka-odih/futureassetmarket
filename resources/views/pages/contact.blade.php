@extends('pages.layout.app2')
@section('content')

   <main>
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-1-2@m uk-text-center">
						<h2 class="uk-margin-small-bottom">Do not hesitate to <span class="in-highlight">reach out.</span></h2>
                        <div style="text-align: center" class="uk-flex uk-flex-middle uk-margin">
                            <div class="in-icon-wrap circle small primary-color uk-margin-small-right">
                                <i class="fas fa-envelope fa-sm"></i>
                            </div>
                            <div>
                                <p class="uk-margin-remove"><a href="mailto:admin@stockgainpulse.com">admin@stockgainpulse.com</a>
                                    <a href="mailto:support@stockgainpulse.com">support@stockgainpulse.com</a>
                                </p>
                            </div>
                        </div>
                        <div style="text-align: center" class="uk-flex uk-flex-middle uk-margin">
                                <div class="in-icon-wrap circle small primary-color uk-margin-small-right">
                                    <i class="fas fa-phone fa-sm"></i>
                                </div>
                                <div style="text-align: center">
                                    <p class="uk-margin-remove">+1 914-449-5848</p>
                                </div>
                            </div>
                            <div style="text-align: center" class="uk-flex uk-flex-middle uk-margin">
                                <div class="in-icon-wrap circle small primary-color uk-margin-small-right">
                                    <i class="fas fa-building fa-sm"></i>
                                </div>
                                <div style="text-align: center">
                                    <p class="uk-margin-remove">405 Lexington Avenue, New York City, NY, 10174</p>
                                </div>
                            </div>
                        {{-- <p>Chat Us via Livechat for quick response</p> --}}
					</div>

				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>

@endsection
