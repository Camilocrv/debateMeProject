
<button type="button" id="loginGoBackButton" class="btn accessButtons goBackButton" style="display:block;"><i class="fas fa-chevron-left"></i></button>
<div class="row user-view loginUserView" style="display:block;" id="loginView">
  <blockquote  style="margin-top:0px; margin-bottom:30px;"><h3 style="margin-top:0px; margin-bottom:30px;">Login</h3></blockquote>
  <form class="" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="input-field col s12">
      <input name="email" id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" required value="">
      <label for="email">{{ __('E-Mail Address') }}</label>
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>
    <div class="input-field col s12">
      <input name="password" id="password" type="password" class="validate" required>
      <label for="password">{{ __('Password') }}</label>
      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
   <button id="loginSubmit" class="col s4 btn waves-effect #00796b teal darken-2" type="submit" name="action" style="margin-top:30px;">Submit
      {{ __('Login') }}
   </button>
   <a class="btn btn-link" href="{{ route('password.request') }}">
       {{ __('Forgot Your Password?') }}
   </a>
  </form>
</div>
<div class="row" id="logedUserView" style="display:none;">
  <div class="smallCard card"><i class="medium material-icons">build</i></div>
</div>
<button type="button" id="goBackButton" class="btn" style="display:none;"><i class="fas fa-chevron-left"></i></button>
