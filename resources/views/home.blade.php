@extends('materialize')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Bina Wiratama Mandiri</title>

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
        <li></li>><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

<!-- Slider -->
<div class="slider">
          <ul class="slides">
            <li>
              <img src="{{ url('images/slider/5.jpg')}}">
              <div style="margin-top: 160px;background:rgba(0,0,0,0.2);" class="caption center-align">
                <h3><strong>Bina Wiratama Mandiri</strong></h3>
                <h5 class="light grey-text text-lighten-3">Trainer Mutu dan Produktivitas.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/slider/2.jpg')}}">
              <div style="margin-top: 160px;background:rgba(0,0,0,0.2);" class="caption center-align">
                <h3><strong>Bina Wiratama Mandiri</strong></h3>
                <h5 class="light grey-text text-lighten-3">Trainer Mutu dan Produktivitas.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/slider/3.jpg')}}">
              <div style="margin-top: 160px;background:rgba(0,0,0,0.2);" class="caption center-align">
                <h3><strong>Bina Wiratama Mandiri</strong></h3>
                <h5 class="light grey-text text-lighten-3">Trainer Mutu dan Produktivitas.</h5>
              </div>
            </li>
            <li>
              <img src="{{ url('images/slider/4.jpg')}}">
              <div style="margin-top: 160px;background:rgba(0,0,0,0.2);" class="caption center-align">
                <h3><strong>Bina Wiratama Mandiri</strong></h3>
                <h5 class="light grey-text text-lighten-3">Trainer Mutu dan Produktivitas.</h5>
            </div>
            </li>
          </ul>  
    </div>

  <div class="row">

          <div class="col s12 m8 l9">
            @foreach($data as $posting) 
              <div class="row white card-panel">
                <div class="col s12 white">
                  <!-- Start Post -->
                  <div class="col s12 white">
                    <div class="col s12">
                      <h3 style="text-transform: uppercase;">
                      <strong>{{ $posting->tittle }}</strong>
                      </h3>
                      <p style="text-transform: capitalize;">
                        {{ $posting->tanggal }}/{{ $posting->bulan }}/{{ $posting->tahun }} By. {{ $posting->username }}
                      </p>
                    </div>
                    <div class="col s12 m4 l2" style="display: inline-table;">
                      <div class="card">
                        <div class="card-image">
                          <img style="width: 300px;height: 200px;background-size: cover;background-repeat: no-repeat;background-position: 50% 50%;" src="/images/posting/{{ $posting->sampul }}">
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m4 l7">
                      <p style="font-size:18px;font-family:'century gothic';text-align: justify;">
                      {{ substr(preg_replace('/(<(\w+\b)[^>]*>)|(<\/(\w+\b)[^>]*>)/', '', $posting->isi),0,450) }}
                      </p>                    
                    </div>
                      <button class="btn waves-effect waves-light right red lighten-1" type="submit" name="action">Continue reading
                        <i class="material-icons right">trending_flat</i>
                      </button>
                    </div>
                </div>
              </div>
              @endforeach
              <ul class="pagination center">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

              <div class="row grey lighten-3">
                  <div class="col s12 m4 l2" style="display: inline-table;padding: 5px">
                        <div class="card-image">
                          <img style="width: 130px;height: 130px;background-size: cover;background-repeat: no-repeat;border-radius:100%;background-position: 50% 50%;" src="{{ url('images/slider/4.jpg')}}">
                        </div>
                    </div>
                    <div class="col s12 m4 l7">
                      <span class="flow-text" style="font-size: 25px;"><strong>About Rizky Fajar</strong></span>
                      <br>
                      <span class="flow-text" style="font-size: 16px">
                        <p style='font-size:18px;font-family:'century gothic';text-align: justify;'>
                        {{ str_limit(Auth::user()->name, $limit = 200, $end = '...') }}
                        </p>
                      </span>
                    </div>
                    <div class="col s12 m4 l7">
                      <h5 class="flow-text" style="font-size: 15px">See More about Me ..</h5>
                    </div>
              </div>

          </div><!-- End Post -->


          <div class="col s12 m4 l3"> 

              <div class="row white card-panel">
                <blockquote style="font-size:20px"><strong>Follow Us On Twitter </strong></blockquote>
                <a class="twitter-timeline"  href="https://twitter.com/rizarima99" data-widget-id="733315892444942338">Tweet oleh @rizarima99</a>
                    <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script>
              </div>

              <div class="row white card-panel">
                <blockquote style="font-size:20px"><strong>Find Us On Facebook </strong></blockquote>
                  <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                    </div>
                  </div>
              </div>
          </div>

    </div><!-- End Row -->

        <footer class="page-footer red lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Bina Wiratama Mandiri</h5>
                <p class="grey-text text-lighten-4">Penyediaan Jasa Pelatihan mutu dan Produktivitas.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Social Media</h5>
                <ul>
                  <li>
                    <a href="http://www.facebook.com/sharer.php?u=https://binawiratamamandiri.com" title="Share on Facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=https://binawiratamamandiri.com', 'newwindow', 'margin-left:400,width=700, height=500'); return false;">
                      <i class="fa fa-facebook" style="font-size: 18px; color:white;"></i>
                      &nbsp;&nbsp;&nbsp;
                      <span style="font-size: 15px;color: white">Facebook</span>
                    </a>
                  </li>
                  <li>
                  <a href="https://twitter.com/intent/tweet?source=BinaWiratamaMandiri.com&text=BinaWiratamaMandiri%20" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?source=BinaWiratamaMandiri.com&text=BinaWiratamaMandiri%20', 'newwindow', 'margin-left:400,width=700, height=500'); return false;">
                      <i class="fa fa-twitter" style="font-size: 18px; color:white;"></i>
                      &nbsp;
                      <span style="font-size: 15px;color: white">Twitter</span>
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/share?url=" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=', 'newwindow', 'margin-left:400,width=700, height=500'); return false;">
                      <i class="fa fa-google-plus" style="font-size: 18px; color:white;"></i>
                      &nbsp;
                      <span style="font-size: 15px;color: white">Google</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=', 'newwindow', 'margin-left:400,width=700, height=500'); return false;">
                      <i class="fa fa-linkedin" style="font-size: 18px; color:white;"></i>
                      &nbsp;
                      <span style="font-size: 15px;color: white">Linkedin</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright binawiratamamandiri.com
            <a class="grey-text text-lighten-4 right" href="#!">BWM</a>
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
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </body>
@endsection
