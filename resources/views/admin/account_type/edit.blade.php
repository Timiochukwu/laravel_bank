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
    
    <div class="p-6">
    <div class="bg-white shadow-md rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-4">EDIT ACCOUNT TYPE</h2>
        



        <form class="mt-6" method="POST" enctype="multipart/form-data" >
            @csrf   
            @if($errors->has('account_name'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <li>{{$errors->first('account_name')}}</li>    
        @endif   
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Account Name</label>
                <input type="text" id="name" name="account_name" value="{{$accountType->account_name}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-200 focus-border-blue-300 bg-gray-200 p-2">
            </div>
            <div class="mb-4">
                <label for="minimumOpeningBalance" class="block text-gray-700 font-medium">Minimum Opening Balance</label>
                <input type="text" id="minimumOpeningBalance" name="min_bal" value="{{$accountType->minimum_opening_balance}}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-200 focus-border-blue-300 bg-gray-200 p-2">
            </div>
            <div class="mb-4">
                <label for="maximumOpeningBalance" class="block text-gray-700 font-medium">Maximum Opening Balance</label>
                <input type="text" id="maximumOpeningBalance" name="max_bal" value="{{$accountType->maximum_opening_balance}}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-200 focus-border-blue-300 bg-gray-200 p-2">
            </div>
            <div class="mb-4">
                <label for="expectedMinimumBalance" class="block text-gray-700 font-medium">Expected Minimum Balance</label>
                <input type="text" id="expectedMinimumBalance" name="exp_min_bal" value="{{$accountType->expected_minimum_balance}}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-200 focus-border-blue-300 bg-gray-200 p-2">
            </div>
            <div class="mb-4">
                <label for="expectedMaximumBalance" class="block text-gray-700 font-medium">Expected Maximum Balance</label>
                <input type="text" id="expectedMaximumBalance" name="exp_max_bal" value="{{$accountType->expected_maximum_balance}}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-200 focus-border-blue-300 bg-gray-200 p-2">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none">Save
                Changes</button>

        </form>

    </div>


</div>

</div>


@include('admin.section.footer')