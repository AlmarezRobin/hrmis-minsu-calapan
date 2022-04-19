<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('includes\head.php'); ?>

<body class="d-flex flex-column h-100">
    <!-- topbar -->
    <?php require_once('includes\topbar.php'); ?>
    <!-- end topbar -->
        <!-- Container - Fluid -->
        <div class="container-fluid pt-5">
            <!-- Row -->
            <div class="row">
                <!-- sidebar -->
                <?php require_once('includes\sidebar.php'); ?>
                <!-- end side bar -->
            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">
                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">

                    <h5 class="h5 mt-3 mb-0 color-darkgray"> 
                    <a href="<?=site_url('Employee/view_pds');?>"> <i class="fa fa-chevron-left" aria-hidden="true"></i>  </a>

                         &nbsp;PDS | <small>Father's information</small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="d-flex justify-content-center">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-plus"></i></span>
                                    Father's information


                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                    <form action="<?=site_url('Hr/add_department');?>" method="POST">
                                         <!-- Fathers Info -->
                                         <div class="col-md-12 mb-2">
                                            <small class="form-text text-muted">
                                                Father's Given Name*
                                            </small>
                                            <input type="text" name="FATHNAM3"
                                                class="form-control form-control-sm mb-2" placeholder="First Name"
                                                maxlength="50" size="50" data-toggle="tooltip"
                                                data-placement="right" title="First Name" required>

                                            <small class="form-text text-muted">
                                                Middle Name
                                            </small>
                                            <input type="text" name="FATHNAM2"
                                                class="form-control form-control-sm mb-2" placeholder="Middle Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Middle Name" required>
                                            <small class="form-text text-muted">
                                                Father's Family Name*
                                            </small>
                                            <input type="text" name="FATHNAM1"
                                                class="form-control form-control-sm mb-2" placeholder="Last Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            <small class="form-text text-muted">
                                                Name Extension: ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                            </small>
                                            <input type="text" name="FATHNAM4"
                                                class="form-control form-control-sm mb-2"
                                                placeholder="Name Extension" maxlength="3" size="3"
                                                data-toggle="tooltip" data-placement="right" title="Name extension" required>
                                            <small class="form-text text-muted">
                                                Occupation*
                                            </small>
                                            <input type="text" name="FATHOCCUP"
                                                class="form-control form-control-sm mb-2" placeholder="Occupation"
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Occupation" required>

                                        </div>
                                        <!-- end name -->
                                        <div class="col-md-12 mb-2">
                                          <input type="submit" class="btn btn-success float-end" value="save">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                       
                        <!-- END COL 12 -->
                    </div>
                </div>
                <!-- End container-fluid -->

                <!-- Footer -->
                <?php require_once('includes\footbar.php'); ?>
                <!-- End Footer -->
            </main>
            <!-- End Main -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once('includes\footer.php'); ?>
   