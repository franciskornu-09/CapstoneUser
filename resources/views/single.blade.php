@extends('app')

@section('content')
			<!-- <div class="content"> -->
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Detailed View</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				@foreach($events as $post)
				<div class="w3agile properties">   
					<div class="properties-img properties-img-single">
						<img class="banner-img2">
						<div class="view-caption">
							<h4><span class="glyphicon glyphicon-map-marker"></span> {{$post->name}} </h4>  
						</div> 
					</div>
					<div class="w3ls-details">   
						<h4>Event Description</h4> 
						<p class="agile-text">{{$post->description}} </p>
						<div class="w3ls-text">
							<h4>Event Details</h4>  
							<p><b>Price :</b>GH$ {{$post->regular_ticket}} </p>
							<p><b>VIP :</b>GH$ {{$post->vip_ticket}} </p>
							<p><b>Tickets Available :</b> {{$post->number_left}} </p>
							<p><b>Venue of Event :</b>  </p>
						</div>
					</div>
					
				</div>
				@endforeach
			</div>
		</div>
<!-- 	</div>  -->
	<!-- menu-js -->
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