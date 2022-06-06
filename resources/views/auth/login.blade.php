<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Alula</title>
    <link rel="stylesheet" href="au/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="au/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="au/css/style.css">
</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="au/images/signin-image.jpg" alt="sing up image"></figure>
                        @if (Route::has('register'))
                                    <a class="signup-image-link" href="{{ route('register') }}">{{ __('Create an account') }}</a>
                               
                            @endif
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">



                            @csrf

                            <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>




                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember_me" class="agree-term">
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember me</label>

                                <a href="/send-mail" style="margin-left:15px;">Quên mật khẩu</a>
                                
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="{{ route('redirectFacebook') }}"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{ route('redirectGoogle') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
   
    <!-- JS -->
    <script src="au/vendor/jquery/jquery.min.js"></script>
    <script src="au/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>