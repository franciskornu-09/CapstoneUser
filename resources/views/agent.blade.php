@extends('app')

@section('content')
			<!-- <div class="content"> -->
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Search</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- agents -->

				<div class="w3agile agents" style="margin-bottom: 120px"> 
					<h3 class="w3ls-title">Find Something!!!</h3>
					 <center>
					 <form method="post" action="{{action("FindController@index")}}">
				        <input data-provide="typeahead" data-items="4" id="item" name="item" type="text" 
				           class="span2 search-query">
				           <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				        <!-- <button class="btn" id="search">Search</button> -->
						<button class="btn btn btn-info active" role="button" aria-pressed="true" style="width: auto">Search</button>
					</form>
					</center>					
					</div> 
				<!-- </div> --> 
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
    <script src="{{ asset('js/jquery.mobile.js') }}"></script>
    <link href="{{ asset('/css/jquery.mobile.structure.css') }}" type="text/css" rel="stylesheet" media="all">  
    <link href="{{ asset('/css/jquery.mobile.theme.css') }}" type="text/css" rel="stylesheet" media="all">
@endsection