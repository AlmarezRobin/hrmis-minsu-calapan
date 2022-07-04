<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . "views/hr/includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . "views/hr/includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . "views/hr/includes/sidebar.php"); ?>
            <!-- end side bar -->



            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Leave </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Leave <small>Request</small></h5>
                </div>
                <!-- end title -->


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>
                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">

                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-th"></i></span>
                                    Leave<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                    <!-- Table Div -->
                                    <div class="table-responsive">

                                       <!-- Table -->
                                       <table class="table table-bordered table-hover table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>type_of_leave</th>
                                                    <th>details_of_leave</th>
                                                    <th>details_desc</th>
                                                    <th>no_days_applied</th>
                                                    <th>From_date</th>
                                                    <th>To_date</th>
                                                    <th>commutation</th>
                                                    <th>Date Filed</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($get_all_leave_request as $leave): ?>
                                                <tr class="odd">
                                                    <td><?php echo $leave['type_of_leave'] ?></td>
                                                    <td><?php echo $leave['details_of_leave'] ?></td>
                                                    <td><?php echo $leave['details_desc'] ?></td>
                                                    <td><?php echo $leave['no_days_applied'] ?></td>
                                                    <td><?php echo $leave['from_date'] ?></td>
                                                    <td><?php echo $leave['to_date'] ?></td>
                                                    <td><?php echo $leave['commutation'] ?></td>
                                                    <td><?php echo $leave['date_filed'] ?></td>
                                                    <td>
                                                    <a href="#"><button class="btn btn-mini btn-info">Approved</button></a>
                                                    <a href="#"><button class="btn btn-mini btn-warning">Reject</button></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>

                                            </tbody>

                                            <tfoot>
                                                <tr></tr>
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
                <?php require_once(APP_DIR . "views/hr/includes/footbar.php"); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR . "views/hr/includes/footer.php"); ?>