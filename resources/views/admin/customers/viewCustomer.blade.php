
@include('admin.section.header' , ['title' => " View | Customer"] )
      
       
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/manager/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">User List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <center>
                <h1 class="card-title">Client Lists</h4>
            </center>
            <style>
                .btn-outline-fail {
                    color: #ec5541;
                    background-color: transparent;
                    background-image: none;
                    border-color: #ec5541;
                    width: 120px;
                }
            </style>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Client Lists</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>

                                            <tr>

                                                <td> ID </td>
                                                <td> Full Name </td>
                                                <td> Phone Number </td>
                                                <td> Email Address </td>
                                                <td> Account Number </td>
                                                <td> Account Type </td>
                                                <td> Account Balance </td>
                                                <td> Account Status </td>
                                                <td colspan="3"> Operations </td>
                                            </tr>

                                            @foreach($customers as $customerKey => $customerValues)
                                            <tr>
                                                <td> {{$customerValues['customer_id']}} </td>
                                                <td> {{$customerValues['first_name']." ".$customerValues['last_name']}}
                                                </td>
                                                <td> {{$customerValues['phone_number']}} </td>
                                                <td> {{$customerValues['email']}} </td>
                                                <td> {{$customerValues['account_number']}} </td>
                                                <td> NULL </td>
                                                <td> {{$customerValues['account_balance']}} </td>
                                                <td> @if($customerValues['status']=='Inactive' || $customerValues['status']=='inactive' )
                                                    <font color="red"> {{strtoupper($customerValues['status'])}} </font>
                                                    @else
                                                    <font color="green"> {{strtoupper($customerValues['status'])}} </font> 
                                                     @endif</td>
                                                <td> <a href="{{route('admin.edit.customer', $customerValues['customer_id'])}}"> <input
                                                            type="submit" class="btn-outline-fail" value="Edit"></a>
                                                            <a color="green" href="{{route('admin.edit.customer', $customerValues['customer_id'])}}">
                                                                <input type="submit" class="btn-outline-fail" value="Delete"></a>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                    </table>
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