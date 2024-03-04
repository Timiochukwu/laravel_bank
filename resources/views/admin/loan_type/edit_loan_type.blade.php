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
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="loanType" class="block text-gray-700 font-medium">Loan Type</label>
                <input type="text" id="loanType" name="input_name" value="{{$loanType->input_name}}" placeholder="Loan type"
                    class="bg-gray-100 p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus-border-blue-300">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                UPDATE
            </button>
        </form>
    </div>

    
                <!-- Add more recored as needed                   -->
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