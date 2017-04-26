@extends('app')

@section('content')
<!-- This page is what the user would see if the word searched for does not turn up any results. The user is given the chance to search again using the search box at the bottom of the screen -->
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Results</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				<div class="w3agile properties"> 
					<h3 class="w3ls-title">Results</h3> 
						{{$events}}
						<center>
						<br><br>
						<form method="post" action="{{action("FindController@index")}}">
				        <input data-provide="typeahead" data-items="4" id="item" name="item" type="text" 
				           class="span2 search-query">
				           <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				        <!-- <button class="btn" id="search">Search</button> -->
						<button class="btn btn btn-info active" role="button" aria-pressed="true" style="width: auto">Search</button>
					</form>
					</center>
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
