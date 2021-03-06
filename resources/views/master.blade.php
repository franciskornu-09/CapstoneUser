<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Capstone</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fortune Estates Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="{{ asset('/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files -->
<!-- js -->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<!-- //js -->
<!-- pop-up-box -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<!--//pop-up-box -->
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
<style type="text/css">
	html, body {
    margin: 0;
    height: 100%;
}

#image {
    background-image: url("../images/log2.png");
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
</style>
</head>
<body class="bg" id="image">
	<div class="agile-main"> 
		<div class="menu-wrap" id="style-1" style="background: black">  
			<nav class="top-nav">
				<ul class="icon-list">
					<li class="menu-title" style="background: white;color:black">Capstone</li>
					<li><a href="{{action('HomeController@index')}}"><i class="glyphicon glyphicon-home"></i> Home </a></li>
					<li><a href="{{action("AboutController@index")}}"><i class="glyphicon glyphicon-info-sign"></i> About </a></li>
					<li><a href="{{action("EventController@index")}}"><i class="glyphicon glyphicon-briefcase"></i> Events </a></li>
					<li><a href="{{action("AgentController@index")}}"><i class="glyphicon glyphicon-eye-open"></i> Search </a></li>
					<li><a href="{{action("GalleryController@index")}}"><i class="glyphicon glyphicon-picture"></i> Gallery</a></li>
					<li><a href="{{action("GalleryController@index")}}"><i class="glyphicon glyphicon-thumbs-up"></i> Preference</a></li>
					<li><a href="contact.html"><i class="glyphicon glyphicon-envelope"></i> Contact </a></li>
				</ul>
			</nav>
			<button class="close-button" id="close-button">C</button>
		</div> 
		<div class="content-wrap">
			<div class="header" style="background: black"> 
				<div class="menu-icon">   
					<button class="menu-button" id="open-button">O</button>
				</div>
				<div class="logo">
					<h2><a href="{{action('HomeController@index')}}">H</a></h2>
				</div>
				<div class="login">
					<a href="{{action('IndexController@index')}}" class="sign-in popup-top-anim"><span class="glyphicon glyphicon-user"></span></a> 
					
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	@yield('content')
</body>
</html>