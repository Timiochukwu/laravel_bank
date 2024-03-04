@include('customers.include.header', ['title' => "Profile"])


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
                                <h3 class="mb-0">{{Auth('customer')->user()->username}}</h3>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <a style="color: white" href="{{route('customer.edit.profile')}}" class="btn btn-danger">
                                    Edit Profile</a>
                                <a style="color: white" href="{{route('customer.change.password')}}"
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

                                                    <th><strong class="text-dark mr-4">Account Number</strong></th>
                                                    <th><strong class="text-dark mr-4">First Name</strong></th>
                                                    <th><strong class="text-dark mr-4">Last Namr</strong></th>
                                                    <th><strong class="text-dark mr-4">User Name</strong></th>
                                                    <th><strong class="text-dark mr-4">Email</strong></th>
                                                    <th><strong class="text-dark mr-4">Mobile</strong></th>
                                                    <th><strong class="text-dark mr-4">Address</strong></th>
                                                    <th><strong class="text-dark mr-4">User Type</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td> {{Auth::user()->account_number }} </td>
                                                    <td> {{Auth::user()->first_name}} </td>
                                                    <td> {{Auth::user()->last_name}} </td>
                                                    <td>{{Auth::user()->username }}</td>
                                                    <td>{{Auth::user()->email }}</td>
                                                    <td class="color-primary">{{Auth::user()->phone_number }}</td>
                                                    <td class="color-primary">user["address"]}}</td>
                                                    <td><span
                                                            class="badge badge-primary px-2">{{auth::user()->status }}</span>
                                                    </td>
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



@include('customers.include.footer')
