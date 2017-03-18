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
									<div class="tabcontent-grids" style="height: 325px">
									<center>
									<h3 style="color: #00ccff"><u>Barcodes</u></h3><br>	

										@foreach($events as $code)

										<a href="{!! route('codeDisplay', ['id'=>$code->id]) !!}" class="btn btn-secondary" type="button" style="width: 100%;background: #00ccff;margin-bottom: 2%">
												 <span style="color: white">{{$code->name}}</span>
											</a><br>

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