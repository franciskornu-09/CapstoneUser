@extends('app')

@section('content')
			<!-- This page displays information obtained from the database. This show details about the event-->
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Events</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				<div class="w3agile properties"> 
					<h3 class="w3ls-title">Events</h3> 
					<p class="w3-text">This page is to provide users with the available events happening around the country.</p>
					@foreach($users as $post)

					<div class="properties-w3lsrow"> 
						<div class="properties-bottom">
							<div class="properties-img">
							
							<img alt="" class="banner-img2">
								<div class="view-caption">
									<h4>{{$post->name}} </h4>  
								</div>
								<div class="w3ls-buy">
									<a href="{!! route('switch', ['id'=>$post->name]) !!}">Buy</a> 
								</div>
							</div>
							<div class="w3ls-text">
								<h5><span class="glyphicon glyphicon-map-marker"></span><a href="{!! route ('mapLoc', ['id'=>$post->name]) !!}">vendor locations</a></h5><br>
								<p>Regular: {{$post->regular_ticket}}</p>
								<p><b>Tickets Left :</b> {{$post->number_left}} </p>
								<p><b>Description: </b>{{$post->description}}</p>
								</div>
							
						</div>
					</div>
						@endforeach
					<div class="clearfix"> </div>
				</div>
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