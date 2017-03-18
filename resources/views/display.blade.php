@extends('app')

@section('content')
		<!-- 	<div class="content"> -->
				<!-- welcome -->
				<!-- <center><u><div style="width: 50%;font-size: 230%">Inbox</div></u></center> -->
				<!-- <ul class="nav nav-tabs" role="tablist">
									  <li class="nav-item">
									    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
									  </li>
									  </ul> -->
				<div class="agile-main"> 
		
		<div class="content-wrap">
			<div class="header" style="background: white"> 

				<div style="color: #00ccff;text-align: center;border-bottom: solid #00ccff">Messages</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
				<div class="welcome" style="background: white">

					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids" style="height: 320px">
									<center>

									
									<div class="row" style="background: white;height:50%">
									@foreach($message as $post)
									<div class="card">
									  <div class="card-header">
									    <i>{{$post->topic}}</i>
									  </div>
									  <div class="card-block">
									    <blockquote class="card-blockquote">
									      <p>{{$post->messages}}</p>
									      <footer>{{$post->date}}</footer>
									    </blockquote>
									  </div>
									</div>
							        @endforeach
									<span style="float: left"><a href="{{action('MessageController@index')}}" style="color: black"><i class="glyphicon glyphicon-chevron-left"></i> Back</a></span>
									
										</div>
										 </center>
										<div>........................</div>
										
									 </div>
								</div>
							</div>  
					</div>  	
				</div> 
				</div> 
			<!-- </div> -->
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
	<script>		
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	<script src="{{ asset('js/bootstrap') }}"></script>
@endsection

