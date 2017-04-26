@extends('app')

@section('content')
			<!-- This page is to generate a QR code that code be scanned at the entrance of event locations to represent a ticket. -->
				<div class="welcome">
					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids" style="height: 335px">
									<center>
										@foreach($events as $code)
										<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{$code->qrcode}}&choe=UTF-8" height="200" width="200">
										@endforeach									
									  </center>
									  <span style="float: left"><a href="{{action('GalleryController@show')}}" style="color: black"><i class="glyphicon glyphicon-chevron-left"></i> Back</a></span>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
	<!-- menu-js -->
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> 
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection