@include('customers.include.header', ['title' => 'Loan Application'])

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
                        <th class="py-2 px-4">Account Number</th>
                        <th class="py-2 px-4">Installment Amount</th>
                        <th class="py-2 px-4">Amount Payable</th>
                        <th class="py-2 px-4">Approved Loan</th>
                        <th class="py-2 px-4">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($LoanApplication as $loanApplyKey => $loanApplyValue)

                    <tr>
                        <td class="py-2 px-4">{{$loanApplyKey + 1}}</td>
                        <td class="py-2 px-4">{{Auth::user()->first_name}}</td>
                        <td class="py-2 px-4">{{Auth::user()->email}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->bank}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->account_number}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->amount}}</td>
                        <td class="py-2 px-4">{{optional($loanApplyValue->loanTypeee)->input_name}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->installment_count}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->installment_amount}}</td>
                        <td class="py-2 px-4">{{$loanApplyValue->amount_payable}}</td>
                        <td class="py-2 px-4">
                            <form action="" method="POST">
                                @csrf
                                <label class="switch">
                                    <input type="checkbox"  onchange="this.form.submit()" name="status" {{($loanApplyValue->status
                                    === 'approved') ? 'checked' : ''
                                    }} >
                                    <span class="slider"></span>
                                </label>
                            </form>
                        </td>
                        <td class="py-2 px-4">
                            <a href=""
                                class="bg-blue-500 text-white py-1 px-3 rounded-nd hover:bg-blue-600 transition duration-200">
                                View Details
                            </a>
                                </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@include('customers.include.footer')