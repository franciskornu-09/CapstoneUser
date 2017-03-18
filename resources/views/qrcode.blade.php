@extends('app')

@section('content')
			<!-- <div class="content"> -->
				<!-- banner -->
				<div class="welcome">
					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids">
									<center>
									
									  @foreach($ret as $qr)

									  <a href="{!! route('qr', ['id'=>$qr->user]) !!}" class="btn btn-secondary" type="button" style="width: 100%;background: white">
												 <span style="color: blue">{{$qr->qrcode}}</span><i class="glyphicon glyphicon-info-sign" style="color: blue"></i>
											</a>
									  @endforeach
									  </center>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
		
<!-- 	</div>  -->
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