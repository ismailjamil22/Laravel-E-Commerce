<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    @include('admin-css')

</head> 

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('Cooladmin/images/icon/logo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}"  id="email" type="email"  name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input class="au-input au-input--full {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="Password" required>

                                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </label>

                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> {{ __('Login') }}</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">Login  with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">Login  with twitter</button>
                                    </div>
                                </div>
                            </>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                   <a href="{{ route('register') }}">
                                        Sign Up Here
                                        </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  @include('admin-js')

</body>

</html>
<!-- end document-->