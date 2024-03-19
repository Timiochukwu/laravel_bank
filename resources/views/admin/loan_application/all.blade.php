@include('admin.section.header' , ['title' => " View | Customer"] )




<!--**********************************
            Content body start
        ***********************************-->
        <style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 16px;
        background-color: #ccc;
        border-radius: 17px;
        /* Make the slider rounded */
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        border-radius: 50%;
        /* Make the circle round */
        transition: 0.4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }
</style>
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


<div class="p-6">
    <div class="bg-white shadow-nd rounded-lg p-4">
        <h2 class="text-2x1 font-semibold mb-4">Loan Application Management </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border">
                <thead>
                    <tr class="bg-gray-200">
                    <th class="py-2 px-4">S/N</th>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4">Bank Name</th>
                        <th class="py-2 px-4">Account Number</th>
                        <th class="py-2 px-4">Loan Amount </th>
                        <th class="py-2 px-4">Loan Type</th>
                        <th class="py-2 px-4">Installment Count</th>
                        <th class="py-2 px-4">Installment Amount</th>
                        <th class="py-2 px-4">Amount Payable</th>
                        <th class="py-2 px-4">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($approvedLoan as $loanApplyKey => $loanApplyValue)

                    <tr>
                        <td class="py-2 px-4">{{$loanApplyKey + 1}}</td>
                        <td class="py-2 px-4">{{optional($loanApplyValue->customerInfo)->first_name}}</td>
                        <td class="py-2 px-4">{{optional($loanApplyValue->customerInfo)->email}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->bank}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->account_number}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->amount}}</td>
                        <td class="py-2 px-4">{{optional($loanApplyValue->loanTypeee)->input_name}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->installment_count." "."Months"}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->amount_payable}}</td>
                        <td class="py-2 px-4">
                        <button type="submit" name="status" onclick="confirmApproval({{$loanApplyValue->hash_id}})" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                APPROVE
            </button>
            
            <form method="POST" action="{{route('approve.loan', $loanApplyValue->hash_id)}}" id="approveLoan{{$loanApplyValue->hash_id}}">
                @csrf
                <input type="hidden" name="loanAmount" value="{{$loanApplyValue->amount}}">
                <input type="hidden" name="customerId" value="{{$loanApplyValue->customer_hash_id}}">
            </form>
                        </td>
                        <td class="py-2 px-4">
                            <a href="{{route('loan.summary', $loanApplyValue->hash_id)}}"
                                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                SUMMARY
                            </a>
                                </td>
                    </tr>
                    @empty
        <h2 class="text-2x1 font-semibold mb-4">No Loan Application </h2>

                    @endforelse

                </tbody>
            </table>
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

@include('admin.section.footer')