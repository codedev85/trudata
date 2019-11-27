{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: Poppins;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: url(../resources/background.png);
            background-repeat: no-repeat; 
            background-position: center;
            background-size: none; */
        }

        .container {
            margin: auto;
            width: 450px;
            background-color: #090C3A;
            border-radius: 12px;
        }

        .container__half {
            padding: 0 5%;
        }

        .form-title-container {
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form__title {
            opacity: .5;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        .form__title--active {
            opacity: 1;
        }

        .login__input {
            background: transparent;
            border-radius: 40px;
            border: 1px solid #fff;
            width: 100%;
            color: #fff;
            padding: 14px 18px;
            margin-bottom: 8px;
        }

        .login-logo {
            margin-bottom: 22px;
            margin-top: 10px;
            text-align: center;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        .login__input:focus {
            outline: none;
        }

        .form__container {
            position: relative;
            width: 100%;
            display: none;
        }

        .container__half {
            width: 100%;
            position: relative;
        }

        .login__instruction {
            text-align: center;
            color: #fff;
            opacity: .8;
            font-weight: 300;
            font-size: 13px;
            margin: 0;
        }

        .login__input--submit {
            background: #FF8B02;
            color: white;
            border: #FF8B02;
            font-size: 14px;
            cursor: pointer;
            margin: 20px 0;
        }

        .or {
            padding: 0 40px;
        }

        .bottom-text {
            color: #fff;
            font-size: 13px;
            opacity: .8;
            padding: 5px 0 20px 0;
        }

        p.bottom-text .link,
        .link:visited {
            color: #F66C0E;
            text-decoration: none;
        }

        .container-title-text {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
        }

        .container-text {
            font-size: 16px;
            color: #fff;
            line-height: 30px;
        }

        .inner-container__half {
            margin-top: 40%;
            padding-left: 10%;
            padding-right: 10%;
            /* transform: translateY(-50%); */
        }

        .form__container--active {
            display: block;
        }
        .bottom-text{
            text-align:center;
        }
    </style>
</head>



<body>
    <div class="container">
        <div class="container__half">
            <img class="login-logo" src="../resources/login/trudata-logo.png" alt="">
            <div class="form-title-container">
                <h2 class="form__title form__title--active">
                    SIGN IN
                </h2>
                <!-- <span class="or">or</span>
                <h2 class="form__title">
                    SIGN UP
                </h2> -->
            </div>
            <form method="POST" class="form__container form__container--active" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <p class="login__instruction">
                    Kindly use an active email address as you would need to validate your email.
                </p>
                <input type="submit" class="login__input login__input--submit" value="SIGN IN">
            </form>
            <!-- <form action="" class="form__container">
                <input type="text" class="login__input" placeholder="Full Name">
                <input type="email" class="login__input" placeholder="Email">
                <input type="number" class="login__input" placeholder="Phone Number">
                <input type="number" class="login__input" placeholder="Staff ID">
                <input type="" class="login__input" placeholder="Create Password">
                <p class="login__instruction">
                    Kindly use an active email address as you would need to validate your email.
                </p>
                <input type="submit" class="login__input login__input--submit" value="SIGN UP">
            </form> -->
            <p class="bottom-text">
                Forgot Password?
                <a  href="{{ route('password.request') }}" class="link">Click here</a>
            </p>
        </div>
        <!-- <div class="container__half">
            <div class="inner-container__half">
                <h2 class="container-title-text">
                    Welcome Back!
                </h2>
                <p class="container-text">
                    tru-DATA is Nigeria’s first Automated True Identity Verification Platform that ensures that encrypted documents can NEVER
                    be altered in a lifetime and does not require Internet Data on the mobile application to verify the encrypted
                    document.
                </p>
            </div>
        </div> -->
    </div>

    <script>
        let containerForms = document.querySelector("form__container");

    </script>
</body>

</html>
{{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}