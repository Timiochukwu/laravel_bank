<?php
$name = explode(" ", Auth('admin')->user()->admin_name);

$lastName = $name[0];
$middleName = $name[1];
$firstName = $name[2];


?>

@include('admin.section.header', ['title' => "Profile"])


<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="errors alert-success">{{session('msg')}}</div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                            <div class="media-body">
                                <h3 class="mb-0">{{Auth('admin')->user()->username}}</h3>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <a style="color: white" href="{{route('admin.edit.profile')}}"
                                    class="btn btn-danger">
                                    Edit Profile</a>
                                <a style="color: white" href="{{route('admin.change.password')}}"
                                    class="btn btn-danger w-auto"> Change Password</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Profile Information</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th><strong class="text-dark mr-4">First Name</strong></th>
                                                    <th><strong class="text-dark mr-4">Middle Name</strong></th>
                                                    <th><strong class="text-dark mr-4">Last Name</strong></th>
                                                    <th><strong class="text-dark mr-4">User Name</strong></th>
                                                    <th><strong class="text-dark mr-4">Email</strong></th>
                                                    <th><strong class="text-dark mr-4">Phone Number</strong></th>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td> {{$firstName }} </td>
                                                    <td> {{$middleName }} </td>
                                                    <td> {{$lastName }} </td>
                                                    <td>{{Auth::user()->username }}</td>
                                                    <td>{{Auth::user()->email }}</td>
                                                    <td class="color-primary">{{auth::user()->phone_number }}</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



@include('admin.section.footer')