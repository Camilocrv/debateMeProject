
  <button type="button" id="registGoBackButton" class="btn accessButtons goBackButton" style="display:block;"><i class="fas fa-chevron-left"></i></button>
  <div class="row user-view">
    <blockquote  style="margin-top:0px; margin-bottom:30px;"><h3 style="margin-top:0px; margin-bottom:30px;">Register</h3></blockquote>

    <form class="" action="{{ route('register') }}" method="POST">
      @csrf
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="input-field col s6">
        <input name="name" id="registName" type="text" class="validate{{ $errors->has('name') ? ' is-invalid' : '' }}" required value="{{ old('name') }}">
        <label for="name">{{ __('Name') }}</label>
        @if ($errors->has('name'))
          <span role="alert">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>
      <div class="input-field col s6">
        <input name="username" id="registUsername" type="text" class="validate{{ $errors->has('username') ? ' is-invalid' : '' }}" required value="{{ old('username') }}">
        <label for="username">{{ __('Username') }}</label>
        @if ($errors->has('username'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
      </div>
      <div class="input-field col s12">
        <input name="email" id="registEmail" type="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" required value="{{ old('email') }}">
        <label for="email">{{ __('Email') }}</label>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="input-field col s12">
        <input name="password" id="registPassword" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
        <label for="password">{{ __('Password') }}</label>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="input-field col s12">
        <input name="password_confirmation" id="registCPassword" type="password" class="validate{{ $errors->has('cPassword') ? ' is-invalid' : '' }}" required>
        <label for="cPassword">{{ __('Confirm Password') }}</label>
        @if ($errors->has('cPassword'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cPassword') }}</strong>
            </span>
        @endif
      </div>

     <button class="col s4 btn waves-effect #00796b teal darken-2" type="submit" name="action" style="margin-top:30px;">Submit
        <i class="material-icons"></i>
      </button>
    </form>
  </div>
