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
            <?php require_once('C:\xampp\htdocs\hrmis-minsu-calapan\app\views\emp\emp_profile\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href=""> <i class=" fa fa-icon fa-arrow-left"></i> </a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="row">       
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                    <div class="card-body">
                                        <form class="row" action="<?=site_url('Employee/insert_mother');?>" method="post" enctype="multipart/form-data">
                                            <label class="form-label">Father's Information*</label>
                                            <hr>
                                            <div class="form-group col-md-6 m-t-5">
                                                <small class="form-text text-muted">
                                                   MOTHER'S MAINDEN NAME*
                                                </small>
                                                <input type="text" name="momainame"
                                                    class="form-control form-control-line mb-2" placeholder="Maiden Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="form-group col-md-6 m-t-5">
                                                <small class="form-text text-muted">
                                                    MOTHER'S's Given Name*
                                                </small>
                                                <input type="text" name="mofname"
                                                    class="form-control form-control-line mb-2" placeholder="First Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                            </div> 
                                            <div class="form-group col-md-6 m-t-5">
                                                <small class="form-text text-muted">
                                                    MOTHER'S Middle Name
                                                </small>
                                                <input type="text" name="momname"
                                                    class="form-control form-control-line mb-2" placeholder="Middle Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                            </div> 
                                            <div class="form-group col-md-6 m-t-5">
                                                <small class="form-text text-muted">
                                                    MOTHER'S's Family Name*
                                            </small>
                                            <input type="text" name="molname"
                                                class="form-control form-control-line mb-2" placeholder="Last Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" required>
                                            </div> 
                                            <div class="form-actions col-md-12">
                                                <input type="submit" class="btn btn-success" name="submit" value="Save">
                                                
                                            </div>
                                                                                            
                                        </form>
                                        
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
    