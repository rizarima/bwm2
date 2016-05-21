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
		                <a class="navbar-brand" href="/">
		                	<img class="img-responsive" style="width: 250px;" src="{{ url('images/BWM1.png')}}" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Explore</a></li>                         
		                    <li class="scroll"><a href="#event">Event</a></li>
		                    <li class="scroll"><a href="#about">About</a></li>                     
		                    <li class="no-scroll"><a href="#twitter">Twitter</a></li>
		                    <li><a class="no-scroll" href="store">Order</a></li>
		                    <li class="scroll"><a href="#contact">Contact</a></li>
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
				<li data-target="#main-slider" data-slide-to="3"></li>
				<li data-target="#main-slider" data-slide-to="4"></li>
				<li data-target="#main-slider" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="height: 700px;">
					<img class="img-responsive" src="images/slider/1.jpg" alt="slider" style="">						
					<div class="carousel-caption">
						<h2>Pelatihan GRATIS ! </h2>
						<h4>Wirausaha, Mutu, dan Produktivitas</h4>
						<a href="auth/login"><strong>JOIN NOW !</strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item" style="height: 700px;">
					<img class="img-responsive" src="images/slider/2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Daftarkan Perusahaanmu </h2>
						<h4>Meningkatkan produktivitas dalam pelatihan</h4>
						<a href="auth/login"><strong>FREE ! </strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item" style="height: 700px;">
					<img class="img-responsive" src="images/slider/3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Ingin mutu meningkat ?</h2>
						<h4>Ikuti pelatihan mutu sekarang !</h4>
						<a href="auth/login"><strong>JOIN NOW !</strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>		
				<div class="item" style="height: 700px;">
					<img class="img-responsive" src="images/slider/4.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Register for our next training </h2>
						<h4>full training package free</h4>
						<a href="auth/login"><strong>GRAB YOUR CHANCE NOW</strong><i class="fa fa-angle-right"></i></a>
					</div>
				</div>				
				<div class="item" style="height: 700px;">
					<img class="img-responsive" src="images/slider/5.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Daftarkan Perusahaanmu </h2>
						<h4>Meningkatkan produktivitas dalam pelatihan</h4>
						<a href="auth/login">Register <strong>NOW !</strong> <i class="fa fa-angle-right"></i></a>
					</div>
				</div>				
				<div class="item" style="height: 700px;">
					<img class="img-responsive" src="images/slider/6.JPG" alt="slider">	
					<div class="carousel-caption">
						<h2>What are you waitng for ? </h2>
						<h4>Hurry up, Register for our next training </h4>
						<a href="auth/login">Join <strong>NOW !</strong><i class="fa fa-angle-right"></i></a>
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
			<div class="cart">
				<a href="auth/login"><i class="fa fa-toggle-right"></i> <span>Join Now !</span></a>
			</div>
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">OUR <strong>Trainer</strong></h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event1.jpg')}}" alt="event-image">
											<h4>Taufik Hidayat</h4>
											<h5>Trainer</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event2.jpg')}}" alt="event-image">
											<h4>Mike Shinoda</h4>
											<h5>Trainer</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event3.jpg')}}" alt="event-image">
											<h4>Rob Bourdon</h4>
											<h5>Trainer</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event1.jpg')}}" alt="event-image">
											<h4>Chester Bennington</h4>
											<h5>Trainer</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event2.jpg')}}" alt="event-image">
											<h4>Mike Shinoda</h4>
											<h5>Trainer</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="{{ url('images/event/event3.jpg')}}" alt="event-image">
											<h4>Rob Bourdon</h4>
											<h5>Trainer</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="{{ url('images/guitar.png')}}" alt="guitar">
				</div>
			</div>			
		</div>
	</section><!--/#event-->

	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="{{ url('images/guitar2.jpg')}}" alt="guitar">
		</div>
		<div class="about-content">					
					<h2><strong>About</strong> Bina Wiratama Mandiri</h2>
					<p>Text....</p>
					<a href="#" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a>
				
		</div>
	</section><!--/#about-->
	
	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="{{ url('images/twit.png')}}" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block" style="font-size: 20pt">
						<div class="item active">
							<img src="{{ url('images/twitter/twitter1.png')}}" alt="">
							<p>{{ Inspiring::quote() }}</p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="{{ url('images/twitter/twitter2.png')}}" alt="">
							<p>{{ Inspiring::quote() }}</p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="{{ url('images/twitter/twitter3.png')}}" alt="">
							<p>{{ Inspiring::quote() }}</p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>		
	</section><!--/#twitter-feed-->
	
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
		<!-- <div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap"> 				
	 			</div>	 			
	    	</div>
		</div><!--/#map--> 
		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7932.00963935784!2d106.8663030945505!3d-6.263094116949466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m5!1s0x2e69f2f9619f1d05%3A0x79ddb7454e42aff5!2sJalan+Mandala+V%2C+Cililitan%2C+Kramatjati%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta%2C+Indonesia!3m2!1d-6.2631048!2d106.8706912!4m0!5e0!3m2!1sen!2sus!4v1462250545756" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <p> Copyright  &copy;2016<a target="_blank" href="http://shapebootstrap.net/"> Bina Wiratama Mandiri </a> All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
    @endsection