<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite('resources/css/app.css')
    <title>Login | E-Banking System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Layout/images/Ebanking_logo.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('Layout/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>



<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="{{route('customer.login')}}">
                                    <h4>LogIn</h4>
                                </a>

                                <form method="POST" class="mt-5 mb-5 login-input">
                                    @csrf
                                    {{-- Errors --}}
                                    <div class="errors alert-danger">
                                        {{$errors->first('email')}}

                                    </div>

                                    {{-- Errors End --}}
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control"
                                            placeholder="User Name">
                                    </div>
                                      {{-- Errors --}}
                                      <div class="errors alert-danger">
                                        {{$errors->first('password')}}

                                    </div>

                                    {{-- Errors End --}}
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <input type="submit" value="Sign in" class="btn login-form__btn submit w-100 ">
                                </form>
                                {{-- Errors --}}
                                <div align='center' class="errors alert-danger">{{session('msg')}}</div>
                                <div align='center' class="errors alert-success">{{session('change_password')}}</div>
                                {{-- Errors end --}}
                                <p class="mt-5 login-form__footer">Dont have account? <a
                                        href="{{ route('customer.register')}}" class="text-primary">Sign Up</a> now
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts');

</body>

</html>