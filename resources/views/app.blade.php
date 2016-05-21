<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bina Wiratama Mandiri</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ url('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ url('css/bootstrap/main.css')}}" rel="stylesheet">
	<link href="{{ url('css/animate.css')}}" rel="stylesheet">	
	<link href="{{ url('css/bootstrap/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('images/BWM1.jpg')}}">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('images/ico/apple-touch-icon-57-precomposed.png')}}">

    

</head>
<body>
	<!-- <nav class="navbar navbar-default">
		<div class="conta{{ url('iner-fluid">')}}
			<div class="n{{ url('avbar-header">
												')}}				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav> -->

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{ url('js/bootstrap/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="{{ url('js/bootstrap/gmaps.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/coundown-timer.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/jquery.nav.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap/main.js')}}"></script>  
</body>
</html>