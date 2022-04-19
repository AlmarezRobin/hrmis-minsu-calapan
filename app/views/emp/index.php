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
                                                <center class="m-t-30">
                                                    <img src="<?= BASE_URL . 'uploads/' . $emp_profile['photo'] ;?>" alt="" srcset="" class="img-circle" height="150" width="150">
                                                    <br>
                                                    <a href="<?=site_url('Employee/view_upload')?>" class="fa fa-camera fa-lg" data-toogle="tooltip" title="Upload Your Profile" ></a>


                                                    <h2> <?php echo $this->session->userdata('username') ?> </h2>
                                                    <h3><?php echo $this->session->userdata('user_role') ?></h3>
                                                </center>
                                            </div>
                                        </div>                                                    
                                    </div>
                                    <div class="col-md-8">
                                        <form class="row"method="post" enctype="multipart/form-data">
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="firstname" class="form-label">First Name*</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['f_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="midddlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control"  disabled value="<?= $emp_profile['m_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="lastname" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['l_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="nameex" class="form-label">Name extension </label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['name_ex'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Gender </label>
                                                <select name="sex"  class="form-control custom-select" disabled>
                                                    <option><?= $emp_profile['sex'] ?></option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['civil_status'] ?>">
                                            </div>
                                                                                                
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Date Of Birth </label>
                                                <input type="date" class="form-control"  disabled value="<?= $emp_profile['date_of_birth'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['mobile'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['telephone'] ?>">
                                            </div>

                                            <!-- data edited and addedd 4-17 rma -->
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Employment Status*</label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['status_id'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Office</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['office_id'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10 mb-2">
                                                <label for="phonenumber" class="form-label">Designation</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['designation_id'] ?>">
                                            </div>
                                            <div class="form-actions col-md-12 ">
                                                <a href="<?=site_url('Employee/view_edit_profile');?>" class="btn btn-success">EDIT MY PROFILE</a>
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

                                                