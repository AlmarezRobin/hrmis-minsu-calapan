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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> USER PROFILE
                    </h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="m-t-30 ">
                                                    <img src="" alt="Profile Photo" srcset="" class="img-circle" height="150" width="150">
                                                    <a href="<?=site_url('Employee/view_upload')?>" class="fa fa-camera fa-lg" data-toogle="tooltip" title="Upload Your Profile" ></a>
                                                </center>
                                            </div>
                                        </div>                                                    
                                    </div>
                                    <div class="col-md-8">
                                        <form class="row"method="post" enctype="multipart/form-data">

                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="firstname" class="form-label">First Name*</label>
                                                <input type="text" class="form-control " disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="midddlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control"  disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="lastname" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="nameex" class="form-label">Name extension </label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Gender </label>
                                                <select name="sex"  class="form-control custom-select" disabled>
                                                    <option></option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                                                                                
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Date Of Birth </label>
                                                <input type="date" class="form-control"  disabled value=""> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                <input type="number" class="form-control " disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                <input type="number" class="form-control " disabled value="">
                                            </div>

                                            <!-- data edited and addedd 4-17 rma -->
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Employment Status*</label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Office</label>
                                                <input type="number" class="form-control " disabled value="">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10 mb-2">
                                                <label for="phonenumber" class="form-label">Designation</label>
                                                <input type="number" class="form-control " disabled value="">
                                            </div>
                                        </form>
                                    
                                        
                                  
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row mb-2">

                        </div>          
                    
                    

                    </div>
                    <!-- END COL 12 -->
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

