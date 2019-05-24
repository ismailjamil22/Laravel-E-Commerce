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
    <title>Register</title>

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
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <div class="form-group">

                                        <label for="name" >{{ __('Name') }}</label>
                                        <input id="name" type="text" class="au-input au-input--full{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                        
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="email"> {{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password" >{{ __('Password') }}</label>
                                    <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="au-input au-input--full" name="password_confirmation" required>
                                        
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</button>
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> --}}
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{ route('login') }}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

     <!-- Jquery JS-->
     @include('admin-js')

</body>

</html>
<!-- end document-->