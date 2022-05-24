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
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Send Email</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('sendMail') }}">



                            @csrf

                            <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" placeholder="Vui lòng nhập Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
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
                                <input type="button" onclick="window.location='./login'" name="cancel" id="cancel" class="form-submit" value="Cancel"/>
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Send Email"/>
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