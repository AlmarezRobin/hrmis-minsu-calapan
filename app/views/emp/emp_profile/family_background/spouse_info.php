<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes/head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes/topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . 'views/emp/emp_profile/sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href=""><i class=" fa fa-icon fa-arrow-left"></i></a>
                        
                    User  <small>Spouse Information</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="row">       
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                    <div class="card-body">
                                    <?php if(isset($get_spouse_info['spouse_id'])): ?>
                                        <form class="row" action="<?=site_url('Employee/update_spouse');?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="spouse_id" value="<?= $get_spouse_info['spouse_id']?>">
                                            <label class="form-label">Spouse's Information*</label>
                                            <hr>
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    Father's Given Name*
                                                </small>
                                                <input type="text" name="sfname"
                                                    class="form-control form-control-line mb-2" placeholder="First Name" value="<?= $get_spouse_info['fname'] ?>"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    Middle Name
                                                </small>
                                                <input type="text" name="smname"
                                                    class="form-control form-control-line mb-2" placeholder="Middle Name" value="<?= $get_spouse_info['mname'] ?>"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                Father's Family Name*
                                            </small>
                                            <input type="text" name="slname"
                                                class="form-control form-control-line mb-2" placeholder="Last Name" value="<?= $get_spouse_info['lname'] ?>"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            </div> 
                                            
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    OCCUPATION
                                                </small>
                                                <input type="text" name="occupation"
                                                    class="form-control form-control-line mb-2" placeholder="First Name" value="<?= $get_spouse_info['occupation'] ?>"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    EMPLOYEER/BUSINESS NAME
                                                </small>
                                                <input type="text" name="bname"
                                                    class="form-control form-control-line mb-2" placeholder="Middle Name" value="<?= $get_spouse_info['bus_name'] ?>"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                BUSINESS ADDRESS
                                            </small>
                                            <input type="text" name="baddress"
                                                class="form-control form-control-line mb-2" placeholder="Last Name" value="<?= $get_spouse_info['bus_add'] ?>"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    TELEPHONE NO.
                                                </small>
                                                <input type="number" name="tnumber" value="<?= $get_spouse_info['tel_num'] ?>"
                                                    class="form-control form-control-line mb-2"
                                                    placeholder="Name Extension" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name extension">
                                            </div> 
                                            <div class="form-actions col-md-12">
                                                <input type="submit" class="btn btn-success" name="submit" value="Update">
                                                
                                            </div>
                                                                                            
                                        </form>

                                        <?php else: ?>

                                        <form class="row" action="<?=site_url('Employee/insert_spouse');?>" method="post" enctype="multipart/form-data">
                                            <label class="form-label">Spouse's Information*</label>
                                            <hr>
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    Father's Given Name*
                                                </small>
                                                <input type="text" name="sfname"
                                                    class="form-control form-control-line mb-2" placeholder="First Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    Middle Name
                                                </small>
                                                <input type="text" name="smname"
                                                    class="form-control form-control-line mb-2" placeholder="Middle Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                Father's Family Name*
                                            </small>
                                            <input type="text" name="slname"
                                                class="form-control form-control-line mb-2" placeholder="Last Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    Name Extension: ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                </small>
                                                <input type="text" name="sxname"
                                                    class="form-control form-control-line mb-2"
                                                    placeholder="Name Extension" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name extension">
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    OCCUPATION
                                                </small>
                                                <input type="text" name="occupation"
                                                    class="form-control form-control-line mb-2" placeholder="First Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    EMPLOYEER/BUSINESS NAME
                                                </small>
                                                <input type="text" name="bname"
                                                    class="form-control form-control-line mb-2" placeholder="Middle Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                BUSINESS ADDRESS
                                            </small>
                                            <input type="text" name="baddress"
                                                class="form-control form-control-line mb-2" placeholder="Last Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            </div> 
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">
                                                    TELEPHONE NO.
                                                </small>
                                                <input type="number" name="tnumber"
                                                    class="form-control form-control-line mb-2"
                                                    placeholder="Name Extension" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name extension">
                                            </div> 
                                            <div class="form-actions col-md-12">
                                                <input type="submit" class="btn btn-success" name="submit" value="Insert">
                                                
                                            </div>
                                                                                            
                                        </form>

                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End container-fluid -->
                    </div>
                        <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes/footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once(APP_DIR . 'views/emp/includes/footer.php'); ?>
    