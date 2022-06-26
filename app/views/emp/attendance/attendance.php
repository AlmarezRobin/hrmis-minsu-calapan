<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . "views/emp/includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . "views/emp/includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . "views/emp/includes/sidebar.php"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a empef="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Attendance </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Attendance <small></small></h5>
                </div>
                <!-- end title -->
                  
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">

                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-th"></i></span>
                                    Employee's Attendance

                                    <!-- <button class="btn-mini btn-success float-sm-end" data-bs-toogle="modal" data-bs-target="#attendance">Upload Attendance</button> -->

                                    
                                </div>
                                <div class="card-body ">

                                    <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example2" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    
                                                    <th>Date</th>
                                                    <th>IN AM</th>
                                                    <th>OUT PM</th>
                                                    <th>IN PM</th>
                                                    <th>OUT PM</th>
                                                    <th>IN OT</th>
                                                    <th>OUT OT</th>
                                                    <th>ROT</th>
                                                    <th>SOT</th>
                                                    <th>ND</th>
                                                    <th>LT/UT</th>
                                                    <th>LWOP</th>
                                                    <th>DATE IMPORTED</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php #foreach($get_all_attendance as $data) : ?>
                                                    <tr>
                                                   
                                                    </tr>

                                                <?php# endforeach; ?>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <!-- <th>Employee Name</th>
                                                    <th>Action</th> -->
                                                    
                                                </tr>
                                            </tfoot>

                                        </table>
                                        <!-- End Table -->


                                    </div>
                                    <!-- End Table Div -->

                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>

                        <!-- END COL 12 -->
                    </div>
                </div>
                <!-- End container-fluid -->


                <!-- Footer -->
                <?php require_once(APP_DIR . "views/emp/includes/footbar.php"); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <script src="public/chart.js/chart.js"></script>

    <?php require_once(APP_DIR . "views/emp/includes/footer.php"); ?>


    <div class="modal fade" id="attendance">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update child information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <h4 class="modal-title">Update child information</h4>
                </div>
            </div>
        </div>
    </div>
 <!-- DATA TABES SCRIPT -->
 <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <!-- <script src="public/plugins/DataTables-1.11.4/js/jquery.dataTables.js" type="text/javascript"></script> -->

        <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- <script src="public/plugins/DataTables-1.11.4/js/dataTables.bootstrap.js" type="text/javascript"></script> -->

        <!-- page script -->
        <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "Paginate": true,
                "LengthChange": false,
                "Filter": false,
                "Sort": true,
                "Info": true,
                "AutoWidth": false
            });
        });
    </script>

<style>
    .dataTables_paginate>ul.pagination>li>a {
        padding: 5px;
        background-color: #066CFB;
        color: #fff;
        margin: 0px;
        text-decoration: none;
    }

    .dataTables_paginate>ul.pagination>li>a:hover {
        background-color: #0760DC;
    }

    .dataTables_paginate>ul.pagination>li:first-child>a {
        border-radius: 5px 0px 0px 5px
    }

    .dataTables_paginate>ul.pagination>li:last-child>a {
        border-radius: 0px 5px 5px 0px
    }
</style>

