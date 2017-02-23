@extends('app')

@section('content')
			<!-- <div class="content"> -->
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
								<h5><span class="glyphicon glyphicon-map-marker"></span><a href="{{action("MapController@index")}}">Vendors</a></h5><br>
								<!-- <h6>Vip: {{$post->vip_ticket}}</h6>  -->
								<p>Regular: {{$post->regular_ticket}}</p>
								<p><b>Tickets Left :</b> {{$post->number_left}} </p>
								<p style="float: right"><a onClick="alert('{{$post->description}}')">More</a></p>
								
							</div>
							
						</div>
						</div>
						@endforeach
						<div class="clearfix"> </div>
					</div>
					
			<!-- </div> -->
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection