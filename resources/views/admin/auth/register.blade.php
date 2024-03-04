<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registration | E-Banking System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Layout/images/Ebanking_logo.png')}}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{asset('Layout/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body class="h-100">

    <style>
        .alert-danger {
            text-align: center;
        }
    </style>

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

                                <a class="text-center" href="">
                                    <h4>Sign-in</h4>
                                </a>

                                <form method="post" class="mt-5 mb-5 login-input">

                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="admin_name" value="{{old('admin_name')}}"
                                            class="form-control" {{old('')}} placeholder="Full Name" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('admin_name')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input type="text" name="username" value="{{old('username')}}"
                                            class="form-control" {{old('')}} placeholder="User Name" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('user_name')}}</div>
                                    {{-- errors end --}}

                                    <div class="form-group">
                                        <input type="text" value="{{old('phone_number')}}" name="phone_number"
                                            class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('phone_number')}}</div>
                                    {{-- errors end --}}

                                    <div class="form-group">
                                        <input id="email" type="email" value="{{old('email')}}" name="email" class="form-control"
                                            placeholder="Email" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('email')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('password')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                                            placeholder="Confirm password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div class="alert-danger mb-4">{{$errors -> first('password_confirmation')}}</div>
                                    {{-- errors end --}}
                                    
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have account <a href="{{route('admin.login')}}"
                                        class="text-primary">Sign Up
                                    </a>
                                    now</p>
                                </p>
                            </div>
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
    @include('scripts.scripts')
</body>

</html>