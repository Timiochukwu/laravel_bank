@include('admin.section.header', ['title' => 'Manage Account Type'])

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
        <h1 class="card-title">Employee Reporting Time </h1>
    </center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Employee Reporting Time </h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>

                                    <tr>
                                        <td> S/N </td>
                                        <td> Account Name</td>
                                        <td> Minimum Opening Balance</td>
                                        <td> Maximum Opening Balance</td>
                                        <td> Expected Minimum Balance</td>
                                        <td> Expected Maximum Balance</td>
                                        <td>Action</td>
                                    </tr>
                                    @foreach ($accountType as $accountTypeKey => $accountTypeValue)

                                    <tr>
                                        <td> {{$accountTypeValue['id']}} </td>
                                        <td> {{$accountTypeValue['account_name']}} </td>
                                        <td> {{$accountTypeValue['minimum_opening_balance']}} </td>
                                        <td> {{$accountTypeValue['maximum_opening_balance']}} </td>
                                        <td> {{$accountTypeValue['expected_minimum_balance']}} </td>
                                        <td> {{$accountTypeValue['expected_maximum_balance']}} </td>
                                        <td class="px-4 ру-2">
                        <a href="{{route('admin.edit.loan.type', $accountTypeValue['id'])}}"
                            class="bg-blue-500 text-white py-1 px-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-opacity-50">
                            UPDATE
                        </a>
                        
                    </td>
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


@include('admin.section.footer')