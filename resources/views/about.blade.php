@extends('app')

@section('content')
			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>About Us</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<div class="about"> 
					<h3 class="w3ls-title">About Us</h3> 
					<p class="w3-text">Lorem ipsum dolor sit amet consectetur adip iscing elit. Nam vestibulum ipsum quis purus varius efficitur nunc eget purus ac risus facilisis.</p>
				</div>
				<!-- services -->
				<div class="services"> 
					<div class="title">
						<h3 class="w3ls-title">Services</h3> 
					</div>
					<div class="services-w3ls-row">
						<div class="services-grid">
							<span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
							<h5>Cum soluta nobis</h5>
							<p>Itaque earum rerum hic a sapiente delectus</p>
						</div>
						<div class="services-grid">
							<span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
							<h5>Soluta vum nobis</h5>
							<p>Itaque earum rerum hic a sapiente delectus</p>
						</div>
						<div class=" services-grid">
							<span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
							<h5>Nobis cum soluta</h5>
							<p>Itaque earum rerum hic a sapiente delectus</p>
						</div>
						<div class="services-grid">
							<span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
							<h5>Soluta nobis cum </h5>
							<p>Itaque earum rerum hic a sapiente delectus</p>
						</div>  
						<div class="clearfix"> </div>
					</div>   
				</div>
				<!-- //services -->
				<div class="about"> 
					<h3 class="w3ls-title">Why Choose Us</h3> 
					<ul>
						<li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
					</ul>
				</div>
			</div>
		
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
@endsection