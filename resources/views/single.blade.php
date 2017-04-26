@extends('app')

@section('content')
	<!-- This page displays more information about the event and allows the user make payment for the ticket using various options -->
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
						<form class="form-horizontal" method="post" action="{{ action('SingleController@show') }}">
						<div class="view-caption">
							<h4><span class="glyphicon glyphicon-map-marker"></span> {{$post->name}} </h4>  
						</div> 
					</div>
					<div class="w3ls-details">   
						
						<div class="w3ls-text">
						
							
							<h4>Event Description</h4> 

    						<p class="agile-text">{{$post->description}} </p>
							
							<div class="form-group">
							<label class="col-md-4 control-label">Ticket Prices</label>
							<div class="col-md-6">
								<input type="text" name="eventName" id="eventName" value="{{$post->name}}" style="display: none">
								<input name="ticket" id="ticket" type="radio" value="{{$post->regular_ticket}}">Regular @ GH$  {{$post->regular_ticket}}&nbsp;
							    <input name="ticket" id="ticket" type="radio" value="{{$post->vip_ticket}}">VIP @ GH$ {{$post->vip_ticket}}
							</div>
						</div>
							
							<div class="form-group">
							 <label class="col-md-4 control-label">Quantity:</label><br>
							 <center>
							<input data-provide="typeahead" data-items="4" id="quantity" name="quantity" type="number" class="span2 search-query" style="width: 90%">
							</center>
							</div>

							<div class="form-group">
							<label class="col-md-4 control-label">Select Payment Method:</label><br>
							<center>
							<select name="age" id="optionList"style="width: 90%" onchange="showCard(document.getElementById('optionList').value);">
							  <option value="">Select Option</option>
							  <option value="card" onchange="showCard()">Card</option>
							  <option value="mobile">Mobile</option>
							</select>
							</center>
							</div>

							<div class="form-group">
							<label class="col-md-4 control-label">Tickets Available: </label>
							 {{$post->number_left}}
							</div>

							<div class="form-group" style="display:none;" id="mobile" >
							<label class="col-md-4 control-label">Mobile Payment Details:</label><br>
							<center>
							<select name="mobilePayment" id="optionList"style="width: 90%">
							  <option value="">Select Option</option>
							  <option value="mtn" onchange="showCard()">MTN</option>
							  <option value="vodafone">Vodafone</option>
							  <option value="tigo">Tigo</option>
							  <option value="airtel">Airtel</option>
							</select><br><br>
							</center>

							
							<label class="col-md-4 control-label">Number:</label><br>
							 <center>
							<input data-provide="typeahead" data-items="4" id="phoneNumber" name="phoneNumber" type="number" class="span2 search-query" placeholder="233XXXXXXXXX" style="width: 90%">
							</center>
							</div>

							<div class="form-group" style="display:none;" id="card">
							<label class="col-md-4 control-label">Card Payment Details:</label><br>
							<center>
							<input name="visa" type="radio" value="visa">VISA
							<input name="credit" type="radio" value="credit">CREDIT CARDS
							<input name="master" type="radio" value="master">MASTER CARDS
							</center>

							<input data-provide="typeahead" data-items="4" id="phone" name="phone" type="number" class="span2 search-query" placeholder="Valid Card Number" style="width: 90%">
							<input data-provide="typeahead" data-items="4" id="phone" name="phone" type="text" class="span2 search-query" placeholder="Card Holders Name" style="width: 90%">
							<input data-provide="typeahead" style="width: 50%" data-items="2" id="phone" name="phone" type="number" class="span2 search-query" placeholder="MM/YY" style="width: auto">
							<input data-provide="typeahead" style="width: 50%" data-items="2" id="phone" name="phone" type="number" class="span2 search-query" placeholder="MM/YY" style="width: auto">
							</div>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button class="btn btn btn-info active" role="button" aria-pressed="true" style="width: auto">Buy</button>
							</form>
						</div>
					</div>
					
				</div>
				@endforeach
			</div>
		</div>
	<!-- menu-js -->
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> 
	

	<!-- This is a script to drop down different details based on what the user picks -->
	<script>
		function showCard(name) {
			if (name == "card"){
				document.getElementById('mobile').style.display = "none";
				document.getElementById('card').style.display = "block";
			}else if (name == "mobile") {
				document.getElementById('card').style.display = "none";
				document.getElementById('mobile').style.display = "block";
			}
			}
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection