
@include('customers.include.header' , ['title' => "Customer | Send Money "] )


 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="export w-100 ">
                    <a href="{{url('/customer/transaction/export')}}" class="btn btn-info p-2 w-100 mb-2">Export</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">



                                <h4 class="card-title">Transaction</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Client ID</th>
                                                <th>Sender Id</th>
                                                <th>Transaction Amount</th>
                                                <th>Previous Balance</th>
                                                <th>Final Balance</th>
                                                <th>Transaction Type</th>
                                                <th>Transaction Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transactionDetails as $transactionDetailsKey => $transactionDetailsValues)
                                            <tr>
                                                <td>{{$transactionDetailsValues['customer_id']}}</td>
                                                @if($transactionDetailsValues['transaction_type'] =="DEBIT")
                                                <td>{{$transactionDetailsValues['recipient_id']}}</td>
                                                @elseif($transactionDetailsValues['transaction_type'] =="CREDIT")
                                                <td>{{$transactionDetailsValues['sender_id']}}</td>
                                                @endif
                                                <td>{{$transactionDetailsValues['transaction_amout']}}</td>
                                                <td>{{$transactionDetailsValues['previous_balance']}}</td>
                                                <td>{{$transactionDetailsValues['final_balance']}}</td>
                                                
                                                <td>{{$transactionDetailsValues['transaction_type']}}</td>
                                                <td>{{$transactionDetailsValues['created_at']->format("Y-m-d")}}</td>
                                                
                                                
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
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
   

    <script src="{{asset('js\custom.js')}}"></script>
</body>

</html>