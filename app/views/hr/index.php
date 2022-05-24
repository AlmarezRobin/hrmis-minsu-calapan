<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if ($this->session->userdata('role') != 'Admin') {
redirect('Admin');

}   
?>


<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once("includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once("includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once("includes/sidebar.php"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">

                <!-- BreadCrumb -->
                <!-- <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> index </li>
                    </ul>
                </nav> -->
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Dashboard <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">

                    <!-- <div class="col-12 p-0 m-0 mt-0 mb-3">

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="icon fa fa-download"></i>
                            <a href="https://github.com/redmalmon/university-dashboard-bootstrap-5.0">Download on
                                Github!</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </div> -->

                    <!-- Widgets -->
                    <div class="row g-4 py-0 px-2 pb-3 row-cols-12 row-cols-lg-12 me-1">
                        <a href="<?=site_url('Hr/view_employee');?>" class="feature col" style="text-decoration: none;">
                        <!-- <div class="feature col"> -->
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-success bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-success bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-users"></i> <?= $count_registered_employee['emp'] ?> </h2>
                                    <p>Registered Employee</p>

                                </div>
                            </div>
                        <!-- </div> -->
                        </a>
                        <a href="<?=site_url('Hr/view_pds_request');?>" class="feature col" style="text-decoration: none;">
                        <!-- <div class="feature col"> -->
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-info bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-primary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-bell"></i> <?= $count_pending['pending'] ?> </h2>
                                    <p>Pending Request</p>

                                </div>
                            </div>
                        <!-- </div> -->
                        </a>
                        <a href="<?=site_url('Hr/registeredcutomers');?>" class="feature col" style="text-decoration: none;">
                        <!-- <div class="feature col"> -->
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-warning bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-secondary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-warning"></i> 5</h2>
                                    <p>Request</p>

                                </div>
                            </div>
                        <!-- </div> -->
                        </a>
                        <!-- <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-secondary bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-warning bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-map-o"></i> 11</h2>
                                    <p>Barangay/s User</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-success bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-danger bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-comments"></i> 0</h2>
                                    <p>Consulted online</p>

                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-danger bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-primary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-info-circle"></i> 12</h2>
                                    <p>Recorded Healthy Rice</p>

                                </div>
                            </div>
                        </div> -->

                    </div>

                    <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Student <small>List</small></h5>
                </div>
                <!-- end title -->


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>
                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-outline-info">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-dark"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive ">
                                                    <!-- Table -->
                                            <table id="example2"
                                            class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

                                                <thead>
                                                    <tr>
                                                        <td>Full Name</td>
                                                        <td>Employment</td>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php foreach($get_user_profile as $emp): ?>

                                                    <tr class="odd">
                                                        <td><?php echo $emp['f_name' ] . ' '. $emp[ 'm_name'] . ' '. $emp[ 'l_name'] ?></td>
                                                        <td><?php echo $emp['designation_id'] ?></td>
                                                        <td>
                                                            <a href="<?= site_url('hr/view_emp_profile'); ?>"><button class="btn btn-mini btn-info">View Profile</button></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td>Full Name</td>
                                                        <td>Employment</td>
                                                        <th>Options</th>
                                                    </tr>
                                                </tfoot>

                                            </table>
                                            <!-- End Table -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End card -->

                        </div>
                        <!-- End Col-12 -->


                    </div>
                    <!-- End col -->

                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once("includes/footbar.php"); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <script src="public/chart.js/chart.js"></script>

    <?php require_once("includes/footer.php"); ?>
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
            background-color: green;
            color: #fff;
            margin: 0px;
            text-decoration: none;
            border: 1px solid;
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