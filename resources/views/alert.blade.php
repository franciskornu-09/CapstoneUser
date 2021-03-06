@extends('app')

@section('content')
<!-- This page has the form the user can fil to send the administrator a message
	 Any information is redirected to the PullController for processing -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">Send Message</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ action('PullController@store') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Topic</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="topic">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Message</label>
							<div class="col-md-6">
								<textarea class="form-control" name="message" rows="3">
									
								</textarea>
							</div>
						</div>

						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Send
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
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
