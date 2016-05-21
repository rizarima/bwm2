@extends('materialize')
@section('content')
<body class="white">


  <div id="login-page" class="row" style="width: 50%;margin-top: 10px;">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" role="form" action="login" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">W3lessons - Material Design Login Form</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="validate" id="email" type="email" name="email" value="{{ old('email') }}">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 97%;margin-left: 10px;">Submit
    			<i class="material-icons right">send</i>
  			</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="/auth/register">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="/password/email">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>

   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2016 BinaWiratamaMandiri.com
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">BWM info</a>
            </div>
          </div>
  </footer>
</body>
@section('content')