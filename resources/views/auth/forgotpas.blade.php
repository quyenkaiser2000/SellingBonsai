<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{ asset('/') }}">
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
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Send Email</h2>
                        <form method="POST" class="register-form" id="login-form" action="reset-password/{{$token}}">



                            @csrf

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" placeholder="New password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" placeholder="Re-enter Password" class="form-control @error('password') is-invalid @enderror" name="re_enter_password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            @if(session()->has('message'))
                                                <p class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </p>
                                    @endif
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                            </div>
                        </form>
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