<?php

use App\Models\customer;
use App\Models\account_type;
use App\Models\TransactionTypes;



                //-----------------statistics--------------------------
                $customer_number = customer::where('visibility', '1')->count();
                $accountTypes = account_type::where('visibility', '1')->count();
                $TransactionTypes = TransactionTypes::where('visibility', '1')->count();

                $data = [
                    'customer_number' =>  $customer_number,
                    'account_type' =>  $accountTypes,
                    'transaction_type' =>  $TransactionTypes,
                    
                ];
             
           
?>



@include('admin.section.header' , ['title' => " View | Dashboard "] )
      

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-1">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Active Customers</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$data['customer_number']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-3">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Total Account Types</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$data['account_type']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-4">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Total Transaction</h3>
                                    <div class="d-inline-block">
                                        <h2 class="text-white">{{$data['transaction_type']}}</h2>
                                        <p class="text-white mb-0">
                                            {{'Today is '  .now()->day .'-' .now()->format('F Y')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #/ container -->
            </div>
        </div>
    </div>



    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
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