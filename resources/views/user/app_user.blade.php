@extends('materialize')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Slider </title>

  <!-- CSS  -->
  <link rel="shortcut icon" href="images/favicon (5).ico" type="image/x-icon">
<link rel="icon" href="images/favicon (5).ico" type="image/x-icon">  
  <link href="{{ url('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url('css/index.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{ url('images/font-awesome-4.3.0/css/font-awesome.min.css')}}">

</head>
<body>  	     	

<nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo" style="font-size: 25px">Bina Wiratama Mandiri</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Dasboard</a></li>
        <li><a href="store">Order</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="/auth/logout">Log out</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

<!-- Slider -->
<div class="slider">
          <ul class="slides">
            <li>
              <img style="margin-top: 150px" src="{{ url('images/slider/1.jpg')}}">
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/Slider/2.jpg')}}">
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/Slider/3.jpg')}}">
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/Slider/4.jpg')}}">
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>  
</div>

        
        <div class="row">
      <div class="grid-example white col s12">

        <div id="ourTeam" class="container section scrollspy">
	        <h6 class="center-align ourTeam"> Our team</h6>
	        <div class="row">
	        	
	        <div class="col s12 m4">
	        	<div class="card-panel blue lighten-3 z-depth-4">
	          		<div class="row valign-wrapper">
			            <div class="col s4">
			              <img src="{{ url('images/User/1380646983g6nym.jpg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			            </div>
		            <div class="col s8">
		              <span class="black-text">
		                This is a square image. Add the "circle" class to it to make it appear circular.
		                
		              </span>
	            	</div>
	          		</div>
	        </div>
	      </div>

      
      
      
      <div class="col s12 m4">
        <div class="card-panel blue lighten-3 z-depth-4">
          <div class="row valign-wrapper">
            <div class="col s4">
              <img src="{{ url('images/User/1401132127bw9jx.jpg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s8">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
                
              </span>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
      <div class="col s12 m4">
        <div class="card-panel blue lighten-3 z-depth-4">
          <div class="row valign-wrapper">
            <div class="col s4">
              <img src="{{ url('images/Url/14011332194m9o3.jpg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s8">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
                
              </span>
            </div>
          </div>
        </div>
      </div>
      
      
      
        </div>
      </div>
     </div>
     </div>  <!--container-->
      
      
      
      <br>
      <br>
      
      
      <div id="ourProjectss" class="section scrollspy">
      <div class="container">
      	<h6 class="ourProjects">Our projects</h6>
      	<br>
      	<br>

	      
	      
	      <div class="col s12 m4">
      			
      			<ul class="demo-3">
			    <li>
			        <figure>
			            <img src="{{ url('images/User/project2.jpg')}}" class="responsive-img" alt=""/>
			            <figcaption>
			                <h2>Project title</h2>
			               
			            </figcaption>
			        </figure>
			    </li>
			</ul>
	      </div>
	      
	      <div class="col s12 m4">
      			
      			<ul class="demo-3">
			    <li>
			        <figure>
			            <img src="{{ url('images/User/project3.jpg')}}" class="responsive-img" alt=""/>
			            <figcaption>
			                <h2>Project title</h2>
			               
			            </figcaption>
			        </figure>
			    </li>
			</ul>
	      </div>
      					
      					
    </div><!--row-->
    
      <div class="center">
      	<a class="waves-effect waves-light btn purple lighten-1">View more</a>
      </div>
  </div><!--container-->
   </div>
      
      <br>
      <br>
      
       <div class="parallax-container section scrollspy valign-wrapper" id="aboutus">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="center row col s3">
        	
        	<h3 class="aboutUs">About Us</h3>
       </div>
        <div class="center row col s12" style="color: white;">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
       </div>
       
      </div>
    </div>
    <div class="parallax"><img src="{{ url('images/User/images.jpg')}}" alt="img"></div>
  </div>
      
      <br>
      
      
      
      
      <div class="container section scrollspy" id="contactus">
	<div>
		<br>
	<br>
	<h2 class="center contactUs">Contact Us</h2>	
	<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
	tempor incididunt ut labore et dolore magna aliqua.</p>
   <div class="row">
		
  <form class="col s8 offset-s2">
  
    <div class="row">
      <div class="input-field col s6">
        <input id="name" type="text" class="validate">
        <label for="name">Your Name</label>
      </div>
   
    
      <div class="input-field col s6">
        <input id="email" type="email" class="validate">
        <label for="email">Your Email</label>
      </div>
    </div><!--row-->
    
     <div class="row">
      <div class="input-field col s12">
        <input id="message-sub" type="email" class="validate">
        <label for="message-sub">Message Subject</label>
      </div>
    </div>
    
     <div class="row">
      <div class="input-field col s12">
         <textarea id="text_area" class="materialize-textarea"></textarea>
        <label for="text_area">Your Message</label>
      </div>
    </div>
    
     
      <div>
      	<a class="waves-effect waves-light btn purple lighten-1">Send Message<i class="mdi-content-send right"></i></a>
      </div>
     </form>
     
     
     
     
</div>
	</div>
</div>
 
      
      
    
     <footer class="page-footer">
          <div class="container">
           
            <div class="row">
            	
            	<div class="col s6 offset-s4">
            		<a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"> <i class="fa fa-facebook" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="https://twitter.com/intent/tweet?source=&text=:%20" title="Tweet" target="_blank"> <i class="fa fa-twitter" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank"> <i class="fa fa-google-plus" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" title="Share on LinkedIn" target="_blank"> 
                	<i class="fa fa-linkedin" style="font-size: 35px; color:white;"> 
                	
                	
                </i></a>
            	</div>
                
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    
    
        
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js')}}"></script> 
      <script type="text/javascript" script-name="bonbon" src="http://use.edgefonts.net/bonbon.js"></script>
      <script type="text/javascript" script-name="berkshire-swash" src="http://use.edgefonts.net/berkshire-swash.js"></script>
      <script type="text/javascript" script-name="chicle" src="http://use.edgefonts.net/chicle.js"></script>
<script type="text/javascript" src="{{ url('js/init.js')}}"></script>
<script>
	 $(document).ready(function(){
      $('.slider').slider();
      $(".button-collapse").sideNav();
       $('.parallax').parallax();
     
    });
</script>
 <script>
  	    $('.head-link').click(function(e) {
        e.preventDefault();
        
        var goto = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(goto).offset().top
        }, 800);
    });

  </script>
  </body>
@endsection
