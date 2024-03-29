@include('admin.section.header', ['title' => 'Add Account Type'])

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
        <div class="alert-danger">{{session('msg')}}</div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="#" method="post">

                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-meter">Account Type Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-nid" name="account_name"
                                            placeholder="Enter Account Type Name">
                                        <div class="div alert-danger">{{$errors->first('account_name')}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-account">Minimum Opening Balance <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-date" name="min_open_bal"
                                            placeholder="Enter Minimum Opening Balance">
                                        <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-account">Maximum Opening Balance <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-date" name="max_open_bal"
                                            placeholder="Enter Maximum Opening Balance">
                                        <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-account">Expected Minimum Balance<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-date" name="min_bal"
                                            placeholder="Enter Expected Minimum Balance">
                                        <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-account">Expected Maximum Balance<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-date" name="max_bal"
                                            placeholder="Enter Expected Maximum Balance">
                                        <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.section.footer')