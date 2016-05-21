@extends('app')
@section('content')
<body>
<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="https://binawiratamamandiri.wordpress.com/"><i class="fa fa-phone"></i></a>
						<a href="https://www.facebook.com/binawiratama.mandiri.1"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
						<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
						</ul>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="{{ url('images/logo.png')}}" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li><a class="no-scroll" href="home">Home</a></li>
		                    <li><a class="no-scroll" href="order">Order</a></li>                         
		                    <li><a class="no-scroll" href="#about">About</a></li>                     
		                    <li><a class="no-scroll" href="#twitter">Twitter</a></li>
		                    <li><a class="no-scroll" href="faq">FAQ</a></li>
		                    <li><a class="no-scroll" href="auth/logout" >Log Out</a></li>
		                    <ul class="nav navbar-nav navbar-right">
							</ul>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="{{ url('images/slider/bg1.jpg')}}" alt="slider">						
					<div class="carousel-caption">
						<h2>Pelatihan GRATIS ! </h2>
						<h4>Wirausaha, Mutu, dan Produktivitas</h4>
						<a href="auth/login"><strong>JOIN NOW !</strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="{{ url('images/slider/bg2.jpg')}}" alt="slider">	
					<div class="carousel-caption">
						<h2>Daftarkan Perusahaanmu </h2>
						<h4>Meningkatkan produktivitas dalam pelatihan</h4>
						<a href="auth/login"><strong>FREE ! </strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="{{ url('images/slider/bg3.jpg')}}" alt="slider">	
					<div class="carousel-caption">
						<h2>Hanya dengan $0 </h2>
						<h4>Peningkatan prduktivtas perusahaan</h4>
						<a href="auth/login" >Tunggu apa lagi ? <strong>Order<strong> Sekarang <i class="fa fa-angle-right"></i></a>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="{{ url('images/watch.png')}}" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>our next training</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">seconds</p>
						</li>				
					</ul>
				</div>
			</div>
		</div>
	</section><!--/#explore-->

	
	<section id="form">
		<div class="form-content">					
					<div id="form-section">
					<div class="status alert alert-success">
							<h3>Asking Question</h3>
					    	<form action="{{ url('/faq/save') }}" id="main-form-form" class="form-form" name="contact-form" method="post">
					            <div class="form-group">
					                <input type="text" name="subject" class="form-control" required="required" placeholder="Subjek">
					                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
					                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
					                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					            </div>
					            <div class="form-group">
					                <textarea name="isi" id="message" required="required" class="form-control" rows="4" placeholder="Isi"></textarea>
					            </div>    
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	     
					    </div>
					    </div>
					    <br><br>
					<div class="status alert alert-success">
						<div class="status alert alert-success">
						@foreach($data as $faq)
							<div class="status alert alert-success" style="border:3pt solid white">
								<h4>{{ $faq->subject }}</h4>
								<h5>{{ $faq->isi }}</h5>
								<h6>{{ $faq->username }}</h6>
							</div>
						@endforeach
								<div class="status alert alert-success" style="border:3pt solid white">
								</div>
						</div>	
					</div>
				
		</div>
	</section>
		<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Sponsors</h2>			
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor1.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor2.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor3.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor4.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor5.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor6.png')}}" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor6.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor5.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor4.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor3.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor2.png')}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{ url('images/sponsor/sponsor1.png')}}" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="light">
				<img class="img-responsive" src="{{ url('images/light.png')}}" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->

	<section id="contact">
		
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="{{ url('images/ear-piece.png')}}" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: promo@party.com<br>
								Phone: +62 812-8056-7272<br>
								Phone: (021) 8088-6249
							</address>
						</div>
						<div class="contact-address">
							<h3>Address</h3>
							<address>
								Jl. Mandala V Rt.07/09,<br>
								Cililitan,<br>
								Kramat Jati, Jakarta Timur<br>
								DKI Jakarta
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
</body>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016<a target="_blank" href="http://shapebootstrap.net/"> Bina Wiratama Mandiri </a>All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>
            </div>
        </div>
    </footer>
    <!--/#footer-->

@endsection
