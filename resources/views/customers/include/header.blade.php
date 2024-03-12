<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Layout/images/Ebanking_logo.png')}}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{asset('Layout/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>

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
            Nav header start
        ***********************************-->
        <div class="nav-header">
    <div class="brand-logo">
        <a href="{{'user.dashbord'}}">

            <b class="logo-abbr">
            </b>
            <span class="logo-compact">
            </span>
            <span class="brand-title">
            </span>
        </a>
    </div>
</div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                            class="mdi mdi-magnify"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down   d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">
            <li class="icons dropdown">
                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                    <span class="activity active"></span>
                    <img src="images/users/3.jpg" height="40" width="40" alt="">
                </div>
                <div class="drop-down dropdown-profile   dropdown-menu">
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="{{route('customer.profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                            </li>
                            <hr class="my-2">
                            <li><a href="   "><i class="icon-key"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>

        </div>
    </div>
</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=""><i class="fa fa-lock"></i>{{session('user_name')}}</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>


                    <li>
                        <a href="" aria-expanded="false">
                            <i class="fa fa-minus-circle"></i><span class="nav-text">Withdraw Money</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('customer.send.money')}}" aria-expanded="false">
                            <i class="fa fa-paper-plane"></i><span class="nav-text">Send Money</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('customer.transaction')}}" aria-expanded="false">
                            <i class="fa fa-tablet"></i><span class="nav-text">Transaction</span>
                        </a>

                    </li>

                    <li>
                        <a href="" aria-expanded="false">
                            <i class="fab fa-stack-exchange"></i><span class="nav-text">Exchange Currency</span>
                        </a>
                    

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Loan Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('loan.application')}}">Apply For Loan</a></li>
                            <li><a href="{{route('view.loan.application')}}">View Loan</a></li>
                        </ul>
                    <li>
                        <a href="" aria-expanded="false">
                            <i class="fa fa-tablet"></i><span class="nav-text">Apply</span>
                        </a>

                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-id-badge"></i><span class="nav-text">My Info</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Profile</a></li>
                            <li><a href="">Edit Profile</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="" aria-expanded="false">
                            <i class="fa fa-address-book"></i><span class="nav-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
       
        <!--**********************************
            Sidebar end
        ***********************************-->
