
@include('customers.include.header' , ['title' => "Customer | Send Money "] )

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



                <div class="basic-form">

                    <form method="post">
                        @csrf
                        <b>TO:</b>
                        <br>
                        <br>
                        <i class="fa fa-user"></i><input class="form-control" type="text" size="50" name="acc_num"
                            Value="{{old('acc_num')}}" placeholder="Enter Account Number">
                        <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                        <br>
                        <br>
                        <b>Amount:</b>
                        <br>
                        <br>
                        <input class="form-control" type="text" size="30" name="amount" Value="" placeholder="$0">
                        <div class="div alert-danger">{{$errors->first('amount')}}</div>
                        <br>
                        <br>
                        
                        <button type="submit" class="btn btn-dark mb-2">Send</button>

                    </form>
                </div>

            </div>

        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>



<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
            2018</p>
    </div>
</div>
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