@extends('app')

@section('content')
			<!-- The page to dispaly the necessary information about the user -->
				<!-- banner -->
				<div class="welcome">
					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids" style="height: 325px">
									<center>
									<h3 style="color: #00ccff"><u>User Profile</u></h3><br>	

										
									<div class="row" style="background: white;height:50%">
									@foreach($details as $code)
									<div class="card">
									  <div class="card-header">
									    <i>#######</i>
									  </div>
									  <div class="card-block">
									    <blockquote class="card-blockquote">
									      <p>Name: {{$code->name}}</p>
									      <p>Phone:{{$code->phone}}</p>
									      <p>Email:{{$code->email}}</p><br>
									      <footer style="color: #00ccff">Retrieved {{$code->date}}</footer>
									    </blockquote>
									  </div>
									</div>
							     
									<span style="float: left"><a href="{{action('MessageController@index')}}" style="color: black"><i class="glyphicon glyphicon-chevron-left"></i> Back</a></span>

									<span style="float: right;"><a href="{!! route('editProfile', ['id'=>$code->id]) !!}" style="color: black"><i class="glyphicon glyphicon-edit"></i> Edit</a></span>
									
										</div>
										@endforeach									
									  </center>
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