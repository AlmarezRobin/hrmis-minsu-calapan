<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

  
?>


<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views\emp\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR .'views\emp\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR .'views\emp\includes\sidebar.php'); ?>
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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <a href="<?=site_url('Hr/view_pds_request');?>"> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a></h5>
                </div>
                <!-- end title -->
                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>


                        <div class="col-md-12 p-2 float-sm-start">

                                        <!-- Table Div -->
                                    <div class="table-responsive m-3">
                                        <!-- Table -->
                                        <table id="example2"  class="table table-bordered table-hover table-striped table-sm">
                                            <?php foreach($get_notif_pds as $var): ?>

                                            <tr class="odd">
                                                <td><?php echo 'PERSONAL DATA SHEET' .' ' . 'The Human resource' .' '. $var['remarks'] . ' '. 'the PDS you submitted'?></td>
                                                <td><?php echo $var['date_returned'] ?></td>
                                            </tr>
                                            <?php endforeach; ?>

                                        </table>
                                        <!-- End Table -->


                                    </div>
                                    <!-- End Table Div -->


                        </div>
                        <!-- End Col-12 -->


                    </div>
                    <!-- End col -->

                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR .'views\emp\includes\footbar.php'); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <script src="public/chart.js/chart.js"></script>

    <?php require_once(APP_DIR .'views\emp\includes\footer.php'); ?>
 <!-- DATA TABES SCRIPT -->
 <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <!-- <script src="public/plugins/DataTables-1.11.4/js/jquery.dataTables.js" type="text/javascript"></script> -->

    <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- <script src="public/plugins/DataTables-1.11.4/js/dataTables.bootstrap.js" type="text/javascript"></script> -->
















