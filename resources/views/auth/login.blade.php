@extends('layouts.blank')

@section('content')
<div class="container mt-5 pt-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <img src="{{ asset('images\GAS_DESIGN_KIT-04.png') }}" class="mx-auto d-block" alt="Gardi Agency System">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class="form-group">
                    <label for="username" class="text-pink"><em><ion-icon name="person"></ion-icon> {{ __('Username') }}</em></label>

                    <input id="username" type="text" class="input-pink btn-rounded form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" style="text-indent: 10px" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="text-pink"><em><ion-icon name="lock"></ion-icon> {{ __('Password') }}</em></label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-pink btn-rounded"  style="text-indent: 10px" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div> -->

                <div class="form-group">
                    <button type="submit" class="btn btn-pink btn-block">
                        {{ __('Login') }} <ion-icon name="arrow-round-forward"></ion-icon>
                    </button>

                    <a class="btn btn-link btn-block" href="{{ route('password.request') }}">
                    <ion-icon name="information-circle-outline"></ion-icon> {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
