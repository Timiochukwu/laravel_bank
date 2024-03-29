@include('customers.include.header', ['title' => " Customer | Dashboard"]);

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
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Balance</div>
                                    <div class="stat-digit gradient-3-text">BDT </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">NID Verification</div>
                                    <div class="stat-digit gradient-4-text"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Previous Withdraw</div>
                                    <div class="stat-digit gradient-4-text"> </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12 ">
                        <div class="card h-75" style="height: 200px !important;">
                            <h5 class="card-header">Notice</h5>
                            <div class="stat-widget-one">

                                <div class="stat-content">

                                    <div class="stat-digit gradient-4-text badge-info mb-2">
                                    </div>
                                    <div>
                                        <p class="">Tag : </p>
                                        <p>Date : </p>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
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
