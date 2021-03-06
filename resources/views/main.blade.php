@extends('app')

@section('content')
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
										<table>
										<tr>
										<td>
										<!-- A button to send the user to a page to view personal details -->
										 <a href="{{action('PrefernceController@create')}}" class="btn btn btn-info btn-lg active" role="button" aria-pressed="true" style="width: 100%;"><i class="glyphicon glyphicon-folder-open"></i> <br>User Tab</a>
										 </td>
										 <!-- A button to send the user to a page to view messages sent by the administrator -->
										 <td>
										 <a href="{{action('MessageController@index')}}" class="btn btn btn-default btn-lg active" role="button" aria-pressed="true" style="width: 100%;"><i class="glyphicon glyphicon-comment"></i> <br>Message</a>
										 </td>
										 </tr>
										 <tr>
										 <!-- A button to send user to a page where he/she can send a report to the administrator of the application -->
										 <td>
										 <a href="{{action('PullController@create')}}" class="btn btn btn-default btn-lg active" role="button" aria-pressed="true" style="width: 100%;"><i class="glyphicon glyphicon-alert"></i> <br>Issues</a>
										 </td>
										 <!-- A button to send user to a page to view etickets in the form of QR codes -->
										 <td>
										 <a href="{{action('GalleryController@show')}}" class="btn btn btn-info btn-lg active" role="button" aria-pressed="true" style="width: 100%;"><i class="glyphicon glyphicon-barcode"></i> <br>Barcode</a>
										 </td>
										 </tr>
										 </table>
										 </center>
										<div>........................</div>
										<div id="found"></div>
									 </div>
								</div>
							</div>  
					</div>  	
				</div> 
		    </div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
@endsection