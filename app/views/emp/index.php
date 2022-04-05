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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="m-t-30">
                                                    <img src="<?php echo BASE_URL . PUBLIC_DIR ?>/images/bg1.jpg" alt="" srcset="" class="img-circle" width="150">
                                                    <h2> <?php echo $this->session->userdata('username') ?> </h2>
                                                    <h3><?php echo $this->session->userdata('user_role') ?></h3>
                                                </center>
                                            </div>
                                        </div>                                                    
                                    </div>
                                    <div class="col-md-8">
                                        <form class="row"method="post" enctype="multipart/form-data">
                                            
                                        
                                        <!-- <input type="hidden" name="id" value="2"> -->
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="firstname" class="form-label">First Name*</label>
                                                <input type="text" class="form-control  " name="fname"
                                                    id="firstname" placeholder="" maxlength="50" size="50"
                                                    data-toggle="tooltip" data-placement="right" title="First Name"
                                                    required disabled value="<?= $data['f_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="midddlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" name="mname"
                                                    id="midddlename" placeholder="" maxlength="30" size="30"
                                                    data-toggle="tooltip" data-placement="right" title="Middle Name" disabled value="<?= $data['m_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="lastname" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control" name="lname"
                                                    id="lastname" placeholder="" maxlength="30" size="30"
                                                    data-toggle="tooltip" data-placement="right" title="Last Name"
                                                    required disabled value="<?= $data['l_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="nameex" class="form-label">Name extension </label>
                                                <input type="text" class="form-control" name="xname"
                                                    id="nameex" placeholder="" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name Extension" disabled value="<?= $data['name_ex'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Gender </label>
                                                <select name="sex"  class="form-control custom-select" disabled>
                                                    <option><?= $data['sex'] ?></option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                <select class="form-control custom-select"  name="cstat"
                                                    id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                    title="Civil Status" required disabled value="<?= $data['civil_status'] ?>">
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="seperated">Separated</option>
                                                    <option value="widower">Widow/er</option>
                                                </select>
                                            </div>
                                                                                                
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Date Of Birth </label>
                                                <input type="date" id="example-email2" name="dob" class="form-control" placeholder="" required disabled value="<?= $data['date_of_birth'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                <input type="number" class="form-control " name="cnumber"
                                                    id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Cellphone Number" required disabled value="<?= $data['mobile'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                <input type="number" class="form-control " name="tnumber"
                                                    id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Cellphone Number" required disabled value="<?= $data['telephone'] ?>">
                                            </div>
                                            <div class="form-actions col-md-12">
                                                
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

                                                