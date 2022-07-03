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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
<<<<<<< Updated upstream
                        <li class="breadcrumb-item"> Locator </li>
=======
                        <li class="breadcrumb-item"> </li>
>>>>>>> Stashed changes
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
<<<<<<< Updated upstream
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Locator <small>Request</small></h5>
=======
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Locator <small>Request </small></h5>
>>>>>>> Stashed changes
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
                                    Locator<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                    <!-- Table Div -->
                                    <div class="table-responsive">

                                        <!-- Table -->
                                        <table class="table table-bordered table-hover table-sm mb-0">
                                        





                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th>Date Filed</th>
                                                    <th>Departure Time</th>
                                                    <th>Location</th>
                                                    <th>Reason</th>
                                                    <th>Expected Arrival Time</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php foreach($get_all_locator_request as $locator): ?>
                                                <tr class="odd">
                                                    <td><?php echo $locator['l_name']. ' ' . $locator['f_name']?></td>
                                                    <td><?php echo $locator['current_datetime']?></td>
                                                    <td><?php echo $locator['departure_time']?></td>
                                                    <td><?php echo $locator['location']?></td>
                                                    <td><?php echo $locator['reason']?></td>
                                                    <td><?php echo $locator['expected_arrival_time']?></td>
                                                    <td><?php echo $locator['locator_type']?></td>

                                                    <td>
<<<<<<< Updated upstream

                                                    <form action="<?=site_url('CED/returning_locator');?>" method="post" class="d-inline">
                                                     <input type="hidden" name="locator_id" value="<?= $locator['locator_id'] ?>" >
                                                        <input type="hidden" name="user_id" value="<?= $locator['user_id'] ?>" >
                                                        <input type="hidden" name="status" value="APPROVED">
                                                        <input type="hidden" name="cedsign" value="1">
                                                     <!--    <input type="hidden" name="remarks" value="You're Locator is Approved, you may now proceed to print your Locator."> -->
                                                        <input type="submit" value="Approve" class="btn btn-success btn-mini" onclick="return confirm('You are about to Approved this this locator.')">
                                                    </form> 
                                                    <form action="<?=site_url('CED/returning_locator');?>" method="post" class="d-inline ">
                                                        <input type="hidden" name="locator_id" value="<?= $locator['locator_id'] ?>" >
                                                        <input type="hidden" name="user_id" value="<?= $locator['user_id'] ?>" >
                                                        <input type="hidden" name="status" value="REJECTED">
                                                        <input type="hidden" name="cedsign" value="0">
                                                        <!-- <input type="hidden" name="stat" value="APPROVED">
                                                        <input type="hidden" name="remarks" value="You're Locator is Approved, you may now proceed to print your Locator."> -->
                                                        <input type="submit" value="Reject" class="btn btn-warning btn-mini" onclick="return confirm('You are about to Reject this this locator.')">
                                                    </form>
                                                    
=======
                                                        <a href="<?=site_url('CED/view_emp_locator/'. $locator['user_id'] . '');?>"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <!-- <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a> -->
>>>>>>> Stashed changes
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
                <?php require_once("includes/footbar.php"); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once("includes/footer.php"); ?>