@extends('app')

@section('content')
		<!-- This page shows the various messages received from the administrators of the application -->
				<!-- banner -->
				<div class="banner">
					<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
						<!-- Wrapper-for-Slides -->
						<div class="carousel-inner" role="listbox"> 
							<!-- First-Slide -->
							<div class="item active">
								<div class="banner-img"> 
									<div class="carousel-caption kb_caption">
										<h3 data-animation="animated flipInX">We provide the best</h3>  
									</div>
								</div>
							</div> 
							<!-- Second-Slide -->
							<div class="item">
								<div class="banner-img banner-img1"> 
									<div class="carousel-caption kb_caption kb_caption_right">
										<h3 data-animation="animated flipInX">Dream Events</h3> 
									</div>
								</div>
							</div> 
							<!-- Third-Slide -->
							<div class="item">
								<div class="banner-img banner-img2"> 
									<div class="carousel-caption kb_caption kb_caption_center">
										<h3 data-animation="animated flipInX">Latest Gigs</h3> 
									</div>
								</div>
							</div> 
						</div> 
						<!-- Left-Button -->
						<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a> 
						<!-- Right-Button -->
						<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
							<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> 
					</div>
					<script src="js/custom.js"></script>
				</div>
				<!-- //banner -->
				<!-- welcome -->
				<div class="welcome">
					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids">
									<center>
									<ul class="list-group">
									<li class="list-group-item" style="color: white; background: #00ccff">Send Message</li>
									</ul>
									
									<div class="row">
									@foreach($message as $post)
										@if ($post->choices === 'no')
											<a href="{!! route('show', ['id'=>$post->id]) !!}" class="btn btn-secondary" type="button" style="width: 100%;background: #00ccff">
												 <span style="color: white">{{$post->date}}</span> &nbsp; {{$post->topic}} <i class="glyphicon glyphicon-info-sign" style="color: white"></i>
											</a><br>
										@else
										<a href="{!! route('show', ['id'=>$post->id]) !!}" class="btn btn-secondary" type="button" style="width: 100%;background: #00ccff;color: black">
												 <span>{{$post->date}}</span> &nbsp; {{$post->topic}}
											</a><br>
										@endif
									@endforeach
									 
										</div>
										 </center>
										<div>........................</div>
										<div id="found"></div>
									 </div>
								</div>
							</div>  
					</div>  	
				</div> 
			</div> 
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

