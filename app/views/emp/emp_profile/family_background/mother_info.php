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
            <?php require_once(APP_DIR . 'views\emp\emp_profile\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 ">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href=""><i class=" fa fa-icon fa-arrow-left"></i></a>
                        
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
                                        <?php if(isset($get_mother_info['mother_id'])): ?>
                                            <form class="row" action="<?=site_url('Employee/update_mother');?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="mother_id" value = "<?=$get_mother_info['mother_id']?>">
                                                <label class="form-label">Mother's Information*</label>
                                                <hr>
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted"> MOTHER'S MAIDEN FIRST NAME*</small>
                                                    <input type="text" name="momainame"class="form-control form-control-line mb-2" placeholder="Maiden Name" value="<?=$get_mother_info['maiden_fname']?>" required>
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted">MOTHER'S's MAIDEN MIDDLE NAME*</small>
                                                    <input type="text" name="mofname" class="form-control form-control-line mb-2" placeholder="First Name" value="<?=$get_mother_info['maiden_mname']?>" required>
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted"> MOTHER'S MAIDEN LAST NAME</small>
                                                    <input type="text" name="momname" class="form-control form-control-line mb-2" placeholder="Middle Name" value="<?=$get_mother_info['maiden_lname']?>">
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted">MOTHER'S's LAST NAME*</small>
                                                <input type="text" name="molname" class="form-control form-control-line mb-2" placeholder="Last Name"required value="<?=$get_mother_info['lname']?>">
                                                </div> 
                                                <div class="form-actions col-md-12">
                                                    <input type="submit" class="btn btn-success" name="submit" value="Update">
                                                </div>
                                                                                                
                                            </form>
                                        <?php else: ?>
                                            <form class="row" action="<?=site_url('Employee/insert_mother');?>" method="post" enctype="multipart/form-data">
                                                <label class="form-label">Mother's Information*</label>
                                                <hr>
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted"> MOTHER'S MAINDEN FIRST NAME*</small>
                                                    <input type="text" name="momainame"class="form-control form-control-line mb-2" placeholder="First Name" required>
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
<<<<<<< HEAD
                                                    <small class="form-text text-muted">MOTHER'S MAIDEN MIDDLE NAME*</small>
                                                    <input type="text" name="mofname" class="form-control form-control-line mb-2" placeholder="First Name" required>
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted"> MOTHER'S MAIDEN LAST NAME</small>
                                                    <input type="text" name="momname" class="form-control form-control-line mb-2" placeholder="Middle Name">
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted">MOTHER'S's FAMILY NAME*</small>
                                                <input type="text" name="molname" class="form-control form-control-line mb-2" placeholder="Last Name"required>
=======
                                                    <small class="form-text text-muted">MOTHER'S' MAIDENN MIDLE NAME*</small>
                                                    <input type="text" name="mofname" class="form-control form-control-line mb-2" placeholder="Middle Name" required>
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted"> MOTHER'S MAIDEN LAST NAME</small>
                                                    <input type="text" name="momname" class="form-control form-control-line mb-2" placeholder="Last Name">
                                                </div> 
                                                <div class="form-group col-md-6 m-t-5">
                                                    <small class="form-text text-muted">MOTHER'S's Family Name*</small>
                                                <input type="text" name="molname" class="form-control form-control-line mb-2" placeholder="Married Last Name"required>
>>>>>>> 419aecfff076bae926d6337ca9dbecf1c5c1aebc
                                                </div> 
                                                <div class="form-actions col-md-12">
                                                    <input type="submit" class="btn btn-success" name="submit" value="Insert">
                                                </div>
                                                                                                
                                            </form>
                                        <?php endif;?>
                                        
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
    