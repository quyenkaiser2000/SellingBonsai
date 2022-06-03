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
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">

                            @csrf
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Emal đã tồn tại</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">Emal đã tồn tại</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{$message}}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input id="password-confirm" type="password" placeholder="Password-Confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="au/images/signup-image.jpg" alt="sing up image"></figure>
                        @if (Route::has('login'))
                                    <a class="signup-image-link" href="{{ route('login') }}">{{ __('I am already member') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       


    </div>
   
    <!-- JS -->
    <script src="au/vendor/jquery/jquery.min.js"></script>
    <script src="au/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>