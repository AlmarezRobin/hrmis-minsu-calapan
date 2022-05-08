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
                                                <?php if(isset($emp_profile['photo'])): ?>
                                                    <img src="<?= BASE_URL . 'uploads/' . $emp_profile['photo'] ;?>" alt="" srcset="" class="img-circle" height="150" width="150">
                                                <?php else: ?>
                                                    <img src="" alt="Profile Photo" srcset="" class="img-circle" height="150" width="150">
                                                <?php endif; ?>
                                                    <br>
                                                    <a href="<?=site_url('Employee/view_upload')?>" class="fa fa-camera fa-lg" data-toogle="tooltip" title="Upload Your Profile" ></a>
                                                    

                                                    <h2> <?php echo $this->session->userdata('username') ?> </h2>
                                                    <h3><?php echo $this->session->userdata('user_role') ?></h3>
                                                </center>
                                            </div>
                                        </div>                                                    
                                    </div>
                                    <div class="col-md-8">
                                    <?php if(isset($emp_profile['profile_id'])): ?>
                                        <form class="row"method="post" enctype="multipart/form-data">

                                            <!-- /* start change May 3, 2022 jcd */ -->
                                            <p class="h6 mt-4 fw-bold">Assignment</p>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Employment Status*</label>
                                                <input type="text" class="form-control form" disabled value="<?= $emp_profile['status_desc'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="phonenumber" class="form-label">Office</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['office_description'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10 mb-2">
                                                <label for="phonenumber" class="form-label">Designation</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['designation_desc'] ?>">
                                            </div>

                                            <p class="h6 mt-4"></p>

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
                                                <label  class="form-label">Name extension </label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['name_ex'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Date Of Birth </label>
                                                <input type="date" class="form-control"  disabled value="<?= $emp_profile['date_of_birth'] ?>"> 
                                            </div>

                                            <p class="h6 mt-4 fw-bold">Place of Birth</p>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">City/Municipality</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($birth_add['municipality_city']) ? print 'N/A' :  print $birth_add['municipality_city'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Province</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($birth_add['province']) ? print 'N/A' : print $birth_add['province'] ?>"> 
                                            </div>
                                            
                                            <p class="h6 mt-4"></p>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control custom-select" disabled>
                                                    <option><?= $emp_profile['sex'] ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                <input type="text" class="form-control" disabled value="<?= $emp_profile['civil_status'] ?>">
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Height </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['height'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">Weight </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['weight'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">Blood Type </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['blood_type'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">GSIS ID NO. </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['gsisno'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">PAG-IBIG ID NO. </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['pag_ibig_no'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">PHILHEALTH NO. </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['philhealth_no'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">SSS NO. </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['sss_no'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">TIN NO. </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['tin_no'] ?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label  class="form-label">Agency Employee NO.  </label>
                                                <input type="text" class="form-control" value="<?= $emp_profile['agency_emp_no'] ?>" disabled>
                                            </div>

                                            <p class="h6 mt-4"></p>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label for="citizenship" class="form-label">Citizenship*</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['citizenship'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Citizenship Category*</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['ship_by'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">County*</label>
                                                <input type="text" class="form-control " disabled value="<?= $emp_profile['citizenship_country'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Contact Number*</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['mobile'] ?>">
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Telephone Number*</label>
                                                <input type="number" class="form-control " disabled value="<?= $emp_profile['telephone'] ?>">
                                            </div>

                                            <p class="h6 mt-4 fw-bold">Residential Address</p>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">House/Block/Lot No.</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['house_block_lotno']) ? print 'N/A' : print $residential_add['house_block_lotno'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Street</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['street_sitio']) ? print 'N/A' : print $residential_add['street_sitio'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Subdivision/Village</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['subdivision_village']) ? print 'N/A' : print $residential_add['subdivision_village'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Barangay</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['barangay']) ? print 'N/A' : print $residential_add['barangay'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">City/Municipality</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['municipality_city']) ? print 'N/A' : print $residential_add['municipality_city'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Province</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['province']) ? print 'N/A' : print $residential_add['province'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Region</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['region']) ? print 'N/A' : print $residential_add['region'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Zipcode</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($residential_add['zipcode']) ? print 'N/A' : print $residential_add['zipcode'] ?>"> 
                                            </div>
                                            

                                            <p class="h6 mt-4 fw-bold">Permanent Address</p>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">House/Block/Lot No.</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['house_block_lotno']) ? print 'N/A' : print $permanent_add['house_block_lotno'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Street</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['street_sitio']) ? print 'N/A' : print $permanent_add['street_sitio'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Subdivision/Village</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['subdivision_village']) ? print 'N/A' : print $permanent_add['subdivision_village'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Barangay</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['barangay']) ? print 'N/A' : print $permanent_add['barangay'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">City/Municipality</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['municipality_city']) ? print 'N/A' : print $permanent_add['municipality_city'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Province</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['province']) ? print 'N/A' : print $permanent_add['province'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Region</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['region']) ? print 'N/A' : print $permanent_add['region'] ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label class="form-label">Zipcode</label>
                                                <input type="text" class="form-control"  disabled value="<?php empty($permanent_add['zipcode']) ? print 'N/A' : print $permanent_add['zipcode'] ?>"> 
                                            </div>

                                            <!-- /* end change May 3, 2022 jcd */ -->
                                            
                                            <div class="form-actions col-md-12 mt-3">
                                                <a href="<?=site_url('Employee/view_edit_profile');?>" class="btn btn-success">EDIT MY PROFILE</a>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                    
                                        
                                  
                                        
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

                                                