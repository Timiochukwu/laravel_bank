<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite('resources/css/app.css')
    <title>Register | E-Banking System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Layout/images/Ebanking_logo.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('Layout/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>

    <style>
        .errors {
            text-align: center;
            margin-top: 10px;
        }

        .top_error {
            text-align: center;
            margin: 10px;
            font-size: 1rem;
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


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">






        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">



            <!-- row -->

            <div class="container-fluid">
                {{-- Erorrs --}}
                <div class="errors alert-success">
                    {{session('Add_user')}}
                </div>
                {{-- Errors ends --}}
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form method="POST" class="form-valide">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-first_name">First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-first_name"
                                                        name="first_name" value="{{old('first_name')}}" placeholder="Enter your first name">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('first_name')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-last_name">Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-last_name"
                                                        name="last_name" value="{{old('last_name')}}" placeholder="Enter your last name">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('last_name')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Username <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-username"
                                                        name="username" value="{{old('username')}}" placeholder="Enter a username..">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('username')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>
                                            

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-phoneus"
                                                        name="phone_number" value="{{old('phone_number')}}" placeholder="+234 56789234">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('phone_number')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email" name="email" value="{{old('email')}}"
                                                        placeholder="Your valid email..">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('email')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="val-password"
                                                        name="password" value="{{old('password')}}" placeholder="Enter your password">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('password')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="val-password_confirmation">Confirm Password <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control"
                                                        id="val-password_confirmation" name="password_confirmation"
                                                        placeholder="Enter your password">
                                                    {{-- Errors --}}
                                                    <div class="errors alert-danger">
                                                        {{$errors->first('password_confirmation')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary submit w-75">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="mt-5 login-form__footer">Already have account? <a
                                        href="{{ route('customer.login')}}" class="text-primary">Sign In</a> now
                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('customers.include.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts')

</body>

</html>