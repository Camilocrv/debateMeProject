<div class="row" id="accessButtons" style="display:block;">
  <div style="display:flex; justify-content:center; height:100%; width:100%; margin:0px;">
    <button class="col offset-s1 s10" id="accessButton" style="margin-left:0px; width:10em; height:10em; display:block; margin-top:50%; border-radius:50%; background-color: rgba(0, 0, 0, 0); border:1px solid white;"><i class="large material-icons" style="color:white;font-size:8em;">account_circle</i></button>
  </div>
  <ul class="col s12" style="width:80%; margin-top:3em; display:flex; position:relative; left:10%; right:10%; justify-content:center;">
    <button class="loginSocialButtons" onmouseover="faceHover(this)" onmouseout="faceNormal(this)"><i id="faceIcon" class="fab fa-facebook-f" style="color:white; display:block;"></i></button>
    <button class="loginSocialButtons" onmouseover="googleHover(this)" onmouseout="googleNormal(this)"><i id="googleIcon" class="fab fa-google" style="color:white; display:block;"></i></button>
    <button class="loginSocialButtons" onmouseover="twitterHover(this)" onmouseout="twitterNormal(this)"><i class="fab fa-twitter" style="color:white; display:block;"></i></button>
  </ul>
</div>

<div class="row" id="someButtons" style="width:auto; height:auto; margin:0px; background-color:white;">
  <button type="button" id="goBackButton" class="btn accessButtons goBackButton" style="display:none;"><i class="fas fa-chevron-left"></i></button>
  <button class="btn col s12 accessButtons" type="button" id="loginButton" style="display:none; height:45%;">Login</button>
    <div id="loginUserView" style="display:none;">
      @include('auth/login')
    </div>

  <button class="btn col s12 accessButtons" type="button" id="registButton" style="display:none; height:45%;">Registrarse</button>
    <div style="display:none;" id="registUserView">
      @include('auth/register')
    </div>
</div>

    <div style="display:none;" id="logedUserView">
      @include('body/sidenav/user')
    </div>

<script type="text/javascript" src="{{URL::asset('js/sidenav.js')}}"></script>
