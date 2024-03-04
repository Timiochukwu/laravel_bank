@include('admin.section.header' , ['title' => " View | Customer"] )




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
    <div class="flex p-6 mx-auto">
    <div class="w-1/2 bg-white shadow-nd rounded-lg p-4">
        <h2 class="text-2x1 font-semibold mb-4">Loan Management</h2>
        <form  method="POST">
            @csrf
            <div class="mb-4">
            @if($errors->has('input_name'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @if($errors->has('input_name'))
                <li>{{$errors->first('input_name')}}</li>
                @endif
            </ul>
        </div>
        @endif
                <label for="loanType" class="block text-gray-700 font-medium">Loan Type</label>
                <input type="text" id="input_name" name="input_name" placeholder="Enter Loan Type Name"
                    class="bg-gray-100 p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus-border-blue-300">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                SUBMIT
            </button>
        </form>
    </div>

    <div class=" w-1/2 ml-4 bg-white shadow-md rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-4">Loan Type Records</h2>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Serial Number</th>
                    <th class="px-4 py-2"> Loan Type</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach($loanType as $key => $value)
                <tr>
                    <td class="px-4 py-2">{{$key +1 }}</td>
                    <td class="px-4 py-2"> {{$value['input_name']}}</td>
                    <td class="px-4 ру-2">
                        <a href="{{route('edit.loan.type', $value->hash_id)}}"
                            class="bg-blue-500 text-white py-1 px-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-opacity-50">
                            UPDATE
                        </a>
                        <button type="submit" onclick="confirmDelete({{$value->hash_id}}, '{{$value->input_name}}')"
                            class="bg-red-500 text-white py-1 px-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-red-200 focus:ring-opacity-50">
                            DELETE
                        </button>
                        <form action="{{route('delete.loan.type', $value->hash_id)}}"
                            id="deleteForm{{$value->hash_id}}">
                            @csrf
                            @method('DELETE')
                        </form>

                        
                    </td>
                </tr>
                @endforeach


                <!-- Add more recored as needed                   -->
            </tbody>
        </table>
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