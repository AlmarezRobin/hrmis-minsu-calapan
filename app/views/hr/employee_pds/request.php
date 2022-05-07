
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if ($this->session->userdata('role') != 'Admin') {
redirect('Admin');


}   
?>


<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views\hr\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR .'views\hr\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR .'views\hr\includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <a href="<?=site_url('Hr');?>"> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a> <small></small></h5>
                </div>
                <!-- end title -->
                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>


                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">

                                <div class="card-header">
                                    <span class="card-icon"><i class="fa fa-th"></i></span>
                                    Employee
                                    <a href="<?=site_url('Hr/pds_history');?>" class="btn btn-mini btn-success float-sm-end">HISTORY</a>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                    <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example2"
                                            class="table table-bordered table-hover table-striped table-sm">

                                            <thead>
                                                <tr>
                                                    <td>User ID</td>
                                                    <td>Status</td>
                                                    <th>Date Submitted</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($get_all_request as $req): ?>

                                                <tr class="odd">
                                                    <td><?php echo $req['user_id'] ?></td>
                                                    <td><?php echo $req['status_of_pds'] ?></td>
                                                    <td><?php echo $req['date_submitted'] ?></td>
                                                    <td>
                                                        <a href="<?=site_url('Hr/view_emp_pds/' . $req['user_id'] );?>" class="btn btn-mini btn-success">
                                                            VIEW PDS
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td>User ID</td>
                                                    <td>Status</td>
                                                    <th>Date Submitted</th>
                                                    <th>Action</th>
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
                        <!-- End Col-12 -->


                    </div>
                    <!-- End col -->

                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR .'views\hr\includes\footbar.php'); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <script src="public/chart.js/chart.js"></script>

    <?php require_once(APP_DIR .'views\hr\includes\footer.php'); ?>
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