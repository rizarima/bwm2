@extends('materialize')
<link href="{{ url('bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<body class="white">


  <div id="login-page" class="row" style="width: 50%;">
    <div class="col s12 z-depth-6 card-panel" style="height: auto;">
      <form class="login-form" action="/register" method="post" role="form" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">W3lessons - Material Design SignUp Form</p>
          </div>
        </div>
        <div class="row margin">
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
            @endif
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="name" type="text" class="validate" required="required" value="{{ old('name') }}">
            <label for="username">Name</label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" name="email" class="validate" required="required" value="{{ old('email') }}" /> 
            <label for="email"  >Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="password_confirmation">
            <label for="password-again">Re-type password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="jabatan" type="text" name="jabatan"class="validate" required="required">
            <label for="username">Job</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <div class="input-field col s12">

                <select name="jenis_kelamin">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
                <label>Sex</label>
            </div>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <textarea id="textarea1" name="alamat" class="materialize-textarea"></textarea>
          <label for="textarea1">Address</label>
        </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="no_tlp" id="phone-number" type="text" class="validate" required="required" data-mask="___-____-___">
            <label for="username">No.Telp</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="no_hp"  type="text" class="validate" required="required" maxlength="20" data-mask="____-____-____">
            <label for="username"  >No.Hp</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="status" id="username" type="text" class="validate" required="required">
            <input id="username" name="roles" type="hidden" class="validate" required="required" value="admin">
            <label for="username"  >Status</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
              <div class="file-field input-field">
                <div class="btn">
                  <span>Photo</span>
                  <input type="file" name="p_profil">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="p_profil">
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 97%;margin-left: 10px;">Register
                <i class="material-icons right">send</i>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


</script>
</center>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
     $('select').material_select();
   });
</script>
<script type="text/javascript">
   Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

function applyDataMask(field) {
    var mask = field.dataset.mask.split('');
    
    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split('').filter(isDigit);
    }
    
    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask.map(function(char) {
            if (char != '_') return char;
            if (data.length == 0) return char;
            return data.shift();
        }).join('')
    }
    
    function reapplyMask(data) {
        return applyMask(stripMask(data));
    }
    
    function changed() {   
        var oldStart = field.selectionStart;
        var oldEnd = field.selectionEnd;
        
        field.value = reapplyMask(field.value);
        
        field.selectionStart = oldStart;
        field.selectionEnd = oldEnd;
    }
    
    field.addEventListener('click', changed)
    field.addEventListener('keyup', changed)
}
</script>

   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2015 W3lessons.info
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Karthikeyan K</a>
            </div>
          </div>
  </footer>
</body>
@section('content')
