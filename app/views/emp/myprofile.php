<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> USER PROFILE
                    <!-- <a href="Employee/edit_user_profile" class="btn btn-sm btn-success float-sm-end">Edit Profile</a> -->
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
                        
                                            <!-- Name -->
                                            <div class="row mb-2">
                                                <!-- Uploaded image area-->
                                                <div class="col-md-5">
                                                    <div class="profile-img">
                                                        <!-- <div  class="image-area"> -->
                                                            <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" 
                                                            style="width: 15em;height:15em;">
                                                        <!-- </div> -->
                                                        <div class="file btn btn-lg btn-primary" >

                                                            <input id="upload" type="file" data-toogle="tooltip" title="Edit Your Picture" onchange="readURL(this);"/>
                                                            <i class="fa fa-camera"  aria-hidden="true"></i>

                                                        </div>
                                                        <h6>UPLOAD YOUR PHOTO</h6>

                                                    </div>
                                                </div>

                                            
                                                <div class="col-md-6">
                                                    <h5>FULL NAME:  <br> ALMAREZ ROBIN MARANAN</h5>
                                                    

                                                </div>
                                                
                                            </div>
                                            <!-- end name -->
                    
                                            <div class="row mb-2">
                                                <div class="col-md-12 text-center">
                                                    <a href="<?=site_url('Employee/view_edit_profile');?>" class="btn btn-success">EDIT MY PROFILE</a>
                                                </div>
                                            </div>          
                    
                    

                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footer.php'); ?>

<style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#signature {
opacity: 0;
}

#upload-label {
position: absolute;
top: 50%;
transform: translateY(-50%);
}

.profile-img{
text-align: center;
}

.profile-img .file {
position: relative;
overflow: hidden;
margin-top: -20%;
/* width: 70%; */
border: none;
border-radius: 0;
font-size: 15px;
background: #212529b8;
}
.profile-img .file input {
position: absolute;
opacity: 0;
right: 0;
top: 0;
}
</style>

                                                