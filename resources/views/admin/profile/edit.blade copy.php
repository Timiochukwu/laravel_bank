@include('admin.section.header', ['title' => "Profile"])

<?php
$name = explode(" ", Auth('admin')->user()->admin_name);

$lastName = $name[2];
$middleName = $name[1];
$firstName = $name[0];


?>



<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit User</a></li>
            </ol>
        </div>
    </div>

    <!-- row -->

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">First Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="firstName" value="{{$firstName}}"
                                                class="form-control">


                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Midddle Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="middleName" value="{{$middleName}}"
                                                class="form-control">


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Last Name <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="lastName" class="form-control"
                                                value="{{$lastName}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Username <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="username"
                                                value="{{Auth::user()->username}}">
                                            <div class="alert-danger">{{$errors->first("username")}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Phone Number <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-phone_number" name="phone_number"
                                                value="{{Auth::user()->phone_number}}">
                                            <div class="alert-danger">{{$errors->first("phone_number")}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" disabled name="email"
                                                value="{{Auth::user()->email}}">
                                            <div class="alert-danger">{{$errors->first("email")}}</div>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary w-75">Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->


@include('admin.section.footer')