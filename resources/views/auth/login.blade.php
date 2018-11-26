@extends('layouts.declaration')

@section('declaration')
<div class="form-container">
    <form method="POST" action="{{ route('login') }}" class="login">
        @csrf
        
        <div class="login__row">
            <label for="email" class="login__row--label-email">{{ __('E-Mail Address') }}</label>
            
            <div class="login__row--input">
                <input id="email" type="email" class="login__row--input-email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                
                @if ($errors->has('email'))
                <span class="login__row--input-email--feedback invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        
        <div class="login__row">
            <label for="password" class="login__row--label-password ">{{ __('Password') }}</label>
            
            <div class="login__row--input">
                <input id="password" type="password" class="login__row--input-password {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                
                @if ($errors->has('password'))
                <span class="login__row--input-password--feedback invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        
        <div class="login__row">
            <div class="login__row--remeber">
                <input class="login__row--remeber-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                <label class="login__row--remeber-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        
        <div class="login__row">
            <div class="login__row--button">
                <button type="submit" class="login__row--button-submit c_btn c_btn--primary">
                    {{ __('Login') }}
                </button>
                
                <a class="login__row--button-forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </div>
    </form>
</div>

@endsection