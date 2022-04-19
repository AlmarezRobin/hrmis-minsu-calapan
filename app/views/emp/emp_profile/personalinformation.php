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
            <?php require_once('sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <!-- adding link to the home page which is profile -->
                        <a href="<?=site_url('Employee/');?>"> <i class=" fa fa-icon fa-arrow-left"></i></a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="row">       
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php if(isset($emp_profile['profile_id'])): ?>
                                                    <form class="row" method="post" action="<?=site_url('Employee/update_profile');?>" enctype="multipart/form-data">
                                                        <input type="hidden" name="profile_id" value="<?= $emp_profile['profile_id']?>">
                                                        <div class="row">

                                                        
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="firstname" class="form-label">First Name*</label>
                                                                <input type="text" class="form-control  " name="fname"
                                                                    id="firstname" placeholder="" maxlength="50" size="50"
                                                                    data-toggle="tooltip" data-placement="right" title="First Name"
                                                                    required value="<?= $emp_profile['f_name'] ?>">
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="midddlename" class="form-label">Middle Name</label>
                                                                <input type="text" class="form-control" name="mname"
                                                                    id="midddlename" placeholder="" maxlength="30" size="30"
                                                                    data-toggle="tooltip" data-placement="right" title="Middle Name" value="<?= $emp_profile['m_name'] ?>">
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="lastname" class="form-label">Last Name*</label>
                                                                <input type="text" class="form-control" name="lname"
                                                                    id="lastname" placeholder="" maxlength="30" size="30"
                                                                    data-toggle="tooltip" data-placement="right" title="Last Name"
                                                                    required value="<?= $emp_profile['l_name'] ?>">
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="nameex" class="form-label">Name extension </label>
                                                                <input type="text" class="form-control" name="xname"
                                                                    id="nameex" placeholder="" maxlength="3" size="3"
                                                                    data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['name_ex'] ?>">
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label>Gender </label>
                                                                <select name="sex"  class="form-control custom-select">
                                                                    <option value="<?= $emp_profile['sex'] ?>"><?= $emp_profile['sex'] ?></option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                                <select class="form-control custom-select"  name="cstat"
                                                                    id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                                    title="Civil Status" required value="<?= $emp_profile['civil_status'] ?>">
                                                                    <option value="single">Single</option>
                                                                    <option value="married">Married</option>
                                                                    <option value="seperated">Separated</option>
                                                                    <option value="widower">Widow/er</option>
                                                                </select>
                                                            </div>
                                                                                                                
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label>Date Of Birth </label>
                                                                <input type="date" id="" name="dob" class="form-control" placeholder="" required value="<?= $emp_profile['date_of_birth'] ?>"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                                <input type="number" class="form-control " name="cnumber"
                                                                    id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Cellphone Number" required value="<?= $emp_profile['mobile'] ?>">
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                                <input type="number" class="form-control " name="tnumber"
                                                                    id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Cellphone Number" required value="<?= $emp_profile['telephone'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-actions mt-2 col-md-12">
                                                            <input type="submit" value="Update" name="submit" class="btn btn-success">
                                                        </div>
                                                        
                                                    </form>
                                                <?php else: ?>
                                                    <form class="row" action="<?=site_url('Employee/insert_profile');?>" method="post" enctype="multipart/form-data">
                                                    <!-- <input type="hidden" name="id" value="2"> -->
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="firstname" class="form-label">First Name*</label>
                                                            <input type="text" class="form-control  " name="fname"
                                                                id="firstname" placeholder="" maxlength="50" size="50"
                                                                data-toggle="tooltip" data-placement="right" title="First Name"
                                                                required>
                                                            <small class="form-text text-muted">
                                                                Given Name
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="midddlename" class="form-label">Middle Name</label>
                                                            <input type="text" class="form-control" name="mname"
                                                                id="midddlename" placeholder="" maxlength="30" size="30"
                                                                data-toggle="tooltip" data-placement="right" title="Middle Name" required>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="lastname" class="form-label">Last Name*</label>
                                                            <input type="text" class="form-control" name="lname"
                                                                id="lastname" placeholder="" maxlength="30" size="30"
                                                                data-toggle="tooltip" data-placement="right" title="Last Name"
                                                                required>
                                                            <small class="form-text text-muted">
                                                                Family Name
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Name extension </label>
                                                            <input type="text" class="form-control" name="xname"
                                                                id="nameex" placeholder="" maxlength="3" size="3"
                                                                data-toggle="tooltip" data-placement="right" title="Name Extension" required>
                                                            <small class="form-text text-muted">
                                                                ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label>Gender </label>
                                                            <select name="sex"  class="form-control custom-select" required>
                                                                <option value=""></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="civilstatus" class="form-label">Civil Status*</label>
                                                            <select class="form-control custom-select"  name="cstat"
                                                                id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                                title="Civil Status" required>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="seperated">Separated</option>
                                                                <option value="widower">Widow/er</option>
                                                            </select>
                                                        </div>
                                                                                                            
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label>Date Of Birth </label>
                                                            <input type="date" id="example-email2" name="dob" class="form-control" placeholder="" value=" " required> 
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Contact Number*</label>
                                                            <input type="number" class="form-control " name="cnumber"
                                                                id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                data-toggle="tooltip" data-placement="right"
                                                                title="Cellphone Number" required>
                                                            <small class="form-text text-muted">
                                                                ex: 9770011001
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                            <input type="number" class="form-control " name="tnumber"
                                                                id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                data-toggle="tooltip" data-placement="right"
                                                                title="Cellphone Number" required>
                                                            <small class="form-text text-muted">
                                                                ex: 9770011001
                                                            </small >
                                                        </div>



                                                        <hr>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="" class="form-label">Citizenship</label>

                                                                <select name="citizenship" id="citizenship" class="form-control" onchange = 'enable()'>
                                                                    <option>--select--</option>
                                                                    <option value="filipino">FILIPINO</option>
                                                                    <option value="dual citizenship">DUAL CITIZENSHIP</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                                <label for="" class="form-label">Dual Citizenship by: </label>
                                                            <select  name="dualby" id="dualby" class="form-control" onchange = 'enable()' disabled>
                                                                <option>--select--</option>
                                                                <option value="BY BIRTH">BY BIRTH</option>
                                                                <option value="BY NATURALIZATION">BY NATURALIZATION</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Please indicate country*</label>
                                                            <input type="text" class="form-control " name="country" id="country"
                                                                id="phonenumber" placeholder="" 
                                                                data-toggle="tooltip" data-placement="right"
                                                                title="Country" disabled >
                                                        </div>

                                                        <script type="text/javascript">
                                                            function enable(){
                                                                if (document.getElementById('citizenship').value === "dual citizenship") {
                                                                    document.getElementById('dualby').disabled = false;
                                                                    document.getElementById('country').disabled = false;
                                                                }
                                                                else {
                                                                    document.getElementById('dualby').disabled = true;
                                                                    document.getElementById('country').disabled = true;
                                                                }
                                                            }
                                                            
                                                        </script>







                                                         













                                                        <div class="form-actions mt-2 col-md-12">
                                                            <!-- <input type="hidden" name="emid" value=""> -->
                                                            <input type="submit" value="Save" name="submit" class="btn btn-success">
                                                            
                                                        </div>
                                                        
                                                    </form>

                                                <?php endif; ?>
                                            </div>
                                        </div>
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
    