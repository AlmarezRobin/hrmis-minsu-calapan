<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\head.php'); ?>

<body class="d-flex flex-column h-100">
    <!-- topbar -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\topbar.php'); ?>
    <!-- end topbar -->
        <!-- Container - Fluid -->
        <div class="container-fluid pt-5">
            <!-- Row -->
            <div class="row">
                <!-- sidebar -->
                <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\sidebar.php'); ?>
                <!-- end side bar -->
            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">
                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Locator <small></small></h5>
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
                                    Locator History

                                    <a href="<?=site_url('Employee/view_create_locator');?>"> 
                                    
                                    <i class="fa fa-icon fa-plus fa-lg float-sm-end pull-right" data-toogle="tooltip" title="ADD NEW LOCATOR"></i> </a>
                                    
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                    <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example2" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date Time</th>
                                                    <th>Departure Time</th>
                                                    <th>Location</th>
                                                    <th>Reason</th>
                                                    <th>Arrival</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($data as $datum) : ?>
                                                    <tr>
                                                        <td><?php echo $datum['user_id'];  ?></td>
                                                        <td><?php echo $datum['id_number'] ?></td>
                                                        <td><?php echo $datum['email'];    ?></td>
                                                        <td><?php echo $datum['username']; ?></td>
                                                        <td><?php echo $datum['_password'];?></td>
                                                        <td><?php echo $datum['role'];     ?></td>
                                                        <td>
                                                            <a href="<?=site_url(''.$datum['id_number']); ?>" class="btn btn-mini btn-info">View</a>
                                                            <a href="<?=site_url(''.$datum['id_number']); ?>" class="btn btn-mini btn-warning" >Delete</a>
                                                        </td>

                                                    </tr>

                                                <?php endforeach; ?>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date Time</th>
                                                    <th>Departure Time</th>
                                                    <th>Location</th>
                                                    <th>Reason</th>
                                                    <th>Arrival</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
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
                <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footbar.php'); ?>
                <!-- End Footer -->
            </main>
            <!-- End Main -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footer.php'); ?>
 
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
