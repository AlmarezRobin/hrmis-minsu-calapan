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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 ">

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
                                <div class="card">
                                    <div class="tab-content ">


                                        <div class="tab-pane active" id="home" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <center class="m-t-30">
                                                                        <img src="<?php echo BASE_URL . PUBLIC_DIR ?>/images/bg1.jpg" alt="" srcset="" class="img-circle" width="150">
                                                                     <h2>almarez robin </h2>
                                                                     <h3>student</h3>
                                                                    </center>
                                                                </div>
                                                            </div>                                                    
                                                        </div>
                                                        <div class="col-md-8">
                                                            <?php if(isset($data['profile_id'])): ?>
                                                                <form class="row" method="post" action="<?=site_url('Employee/update_profile');?>" enctype="multipart/form-data">
                                                                    <input type="hidden" name="profile_id" value="<?= $data['profile_id']?>">
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="firstname" class="form-label">First Name*</label>
                                                                        <input type="text" class="form-control  " name="fname"
                                                                            id="firstname" placeholder="" maxlength="50" size="50"
                                                                            data-toggle="tooltip" data-placement="right" title="First Name"
                                                                            required value="<?= $data['f_name'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="midddlename" class="form-label">Middle Name</label>
                                                                        <input type="text" class="form-control" name="mname"
                                                                            id="midddlename" placeholder="" maxlength="30" size="30"
                                                                            data-toggle="tooltip" data-placement="right" title="Middle Name" value="<?= $data['m_name'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="lastname" class="form-label">Last Name*</label>
                                                                        <input type="text" class="form-control" name="lname"
                                                                            id="lastname" placeholder="" maxlength="30" size="30"
                                                                            data-toggle="tooltip" data-placement="right" title="Last Name"
                                                                            required value="<?= $data['l_name'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="nameex" class="form-label">Name extension </label>
                                                                        <input type="text" class="form-control" name="xname"
                                                                            id="nameex" placeholder="" maxlength="3" size="3"
                                                                            data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $data['name_ex'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label>Gender </label>
                                                                        <select name="sex"  class="form-control custom-select">
                                                                            <option><?= $data['sex'] ?></option>
                                                                        </select>
                                                                    </div>
                                                                
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="civilstatus" class="form-label">Civil Status*</label>
                                                                        <select class="form-control custom-select"  name="cstat"
                                                                            id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                                            title="Civil Status" required value="<?= $data['civil_status'] ?>">
                                                                            <option value="single">Single</option>
                                                                            <option value="married">Married</option>
                                                                            <option value="seperated">Separated</option>
                                                                            <option value="widower">Widow/er</option>
                                                                        </select>
                                                                    </div>
                                                                                                                        
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label>Date Of Birth </label>
                                                                        <input type="date" id="example-email2" name="dob" class="form-control" placeholder="" required value="<?= $data['date_of_birth'] ?>"> 
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="phonenumber" class="form-label">Contact Number*</label>
                                                                        <input type="number" class="form-control " name="cnumber"
                                                                            id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                            data-toggle="tooltip" data-placement="right"
                                                                            title="Cellphone Number" required value="<?= $data['mobile'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-4 m-t-10">
                                                                        <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                                        <input type="number" class="form-control " name="tnumber"
                                                                            id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                            data-toggle="tooltip" data-placement="right"
                                                                            title="Cellphone Number" required value="<?= $data['telephone'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12 m-t-10 mb-2">
                                                                        <img src="" class="img-circle" width="150" />
                                                                        <img src="" class="img-circle" width="150"/>                                   
                                                                        
                                                                        <label  class="form-label">Image </label>
                                                                        <input type="file" readonly  name="image_url" class="form-control" value=""> 
                                                                    </div>
                                                                    <div class="form-group col-md-12 m-t-10 mb-2">
                                                                        <img src="" class="img-circle" width="150" />
                                                                        <img src="" class="img-circle" width="150"/>                                   
                                                                        
                                                                        <label  class="form-label">e-sign </label>
                                                                        <input type="file" readonly  name="image_url" class="form-control" value=""> 
                                                                    </div>
                                                                    <div class="form-actions col-md-12">
                                                                        <!-- <input type="hidden" name="emid" value=""> -->
                                                                        <input type="submit" value="Save" name="submit" class="btn btn-success">
                                                                        
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
                                                                    <div class="form-group col-md-12 m-t-10 mb-2">
                                                                        <img src="" class="img-circle" width="150" />
                                                                        <img src="" class="img-circle" width="150"/>                                   
                                                                        
                                                                        <label  class="form-label">Image </label>
                                                                        <input type="file" readonly  name="image_url" class="form-control" value=""> 
                                                                    </div>
                                                                    <div class="form-group col-md-12 m-t-10 mb-2">
                                                                        <img src="" class="img-circle" width="150" />
                                                                        <img src="" class="img-circle" width="150"/>                                   
                                                                        
                                                                        <label  class="form-label">e-sign </label>
                                                                        <input type="file" readonly  name="image_url" class="form-control" value=""> 
                                                                    </div>
                                                                
                                                                    <div class="form-actions col-md-12">
                                                                        <!-- <input type="hidden" name="emid" value=""> -->
                                                                        <input type="submit" value="Save" name="submit" class="btn btn-success">
                                                                        
                                                                    </div>
                                                                    
                                                                </form>

                                                            <?php endif; ?>

                                                           
                                                        </div>
                                                        
                                                        <div class="col-md-12 mt-5">
                                                        <hr>
                                                        <h3 class="card-title">Residential Address</h3>
                                                            <form class="row" action="Parmanent_Address" method="post" enctype="multipart/form-data">
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Country*
                                                                    </small>
                                                                    <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Country" required>
                                                                </div> 
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Province*
                                                                    </small>
                                                                    <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="150" size="150" data-toggle="tooltip"
                                                                        data-placement="right" title="Province" required>
                                                                </div>
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Zip Code*
                                                                    </small>
                                                                    <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                                        title="Zip Code" required>
                                                            
                                                                </div>
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Town*
                                                                    </small>
                                                                    <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Town" required>
                                                                </div>
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Barangay*
                                                                    </small>
                                                                    <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Barangay" required>
                                                                </div>
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Street
                                                                    </small>
                                                                    <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="50" size="50" data-toggle="tooltip"
                                                                        data-placement="right" title="Street">
                                                                </div>
                                                                <div class="form-group col-md-4 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    House No.
                                                                    </small>
                                                                    <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="20" size="20" data-toggle="tooltip"
                                                                        data-placement="right" title="House No.">
                                                                </div>
                                                                <div class="form-actions col-md-12">
                                                                    <input type="hidden" name="emid" value="">
                                                                    <input type="hidden" name="id" value=" ">                                                    
                                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                                                                                
                                                            </form>
                                                            <hr>
                                                            
                                                            <div class="">
                                                                <h3 class="col-md-12">Permanent Address</h3>
                                                            </div>
                                                            <hr>
                                                            <form class="row" action="Parmanent_Address" method="post" enctype="multipart/form-data">
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Country*
                                                                    </small>
                                                                    <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Country" required>
                                                                </div> 
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Province*
                                                                    </small>
                                                                    <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="150" size="150" data-toggle="tooltip"
                                                                        data-placement="right" title="Province" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Zip Code*
                                                                    </small>
                                                                    <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                                        title="Zip Code" required>
                                                            
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Town*
                                                                    </small>
                                                                    <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Town" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Barangay*
                                                                    </small>
                                                                    <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Barangay" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Street
                                                                    </small>
                                                                    <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="50" size="50" data-toggle="tooltip"
                                                                        data-placement="right" title="Street">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    House No.
                                                                    </small>
                                                                    <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="20" size="20" data-toggle="tooltip"
                                                                        data-placement="right" title="House No.">
                                                                </div>
                                                                <div class="form-actions col-md-12">
                                                                    <input type="hidden" name="emid" value="">
                                                                    <input type="hidden" name="id" value=" ">                                                    
                                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                            </form> 
                                                            <hr>
                                                            <div class="">
                                                                <h3 class="col-md-12">Permanent Address</h3>
                                                            </div>
                                                            <hr>
                                                            <form class="row" action="Parmanent_Address" method="post" enctype="multipart/form-data">
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Country*
                                                                    </small>
                                                                    <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Country" required>
                                                                </div> 
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Province*
                                                                    </small>
                                                                    <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="150" size="150" data-toggle="tooltip"
                                                                        data-placement="right" title="Province" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Zip Code*
                                                                    </small>
                                                                    <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                                        title="Zip Code" required>
                                                            
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Town*
                                                                    </small>
                                                                    <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Town" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Barangay*
                                                                    </small>
                                                                    <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Barangay" required>
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    Street
                                                                    </small>
                                                                    <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="50" size="50" data-toggle="tooltip"
                                                                        data-placement="right" title="Street">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <small class="form-text text-muted">
                                                                    House No.
                                                                    </small>
                                                                    <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                                        class="form-control form-control-line mb-2" placeholder=""
                                                                        maxlength="20" size="20" data-toggle="tooltip"
                                                                        data-placement="right" title="House No.">
                                                                </div>
                                                                <div class="form-actions col-md-12">
                                                                    <input type="hidden" name="emid" value="">
                                                                    <input type="hidden" name="id" value=" ">                                                    
                                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                            </form> 


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!--second tab-->
                                        <div class="tab-pane" id="family" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="card-title">Family Background</h3>
                                                    <form class="row" action="Parmanent_Address" method="post" enctype="multipart/form-data">
                                                        <label class="form-label">Father's Information*</label>
                                                        <hr>
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                                Father's Given Name*
                                                            </small>
                                                            <input type="text" name="fafname"
                                                                class="form-control form-control-line mb-2" placeholder="First Name"
                                                                maxlength="50" size="50" data-toggle="tooltip"
                                                                data-placement="right" title="First Name" required>
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                                Middle Name
                                                            </small>
                                                            <input type="text" name="famname"
                                                                class="form-control form-control-line mb-2" placeholder="Middle Name"
                                                                maxlength="30" size="30" data-toggle="tooltip"
                                                                data-placement="right" title="Middle Name">
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                            Father's Family Name*
                                                        </small>
                                                        <input type="text" name="falname"
                                                            class="form-control form-control-line mb-2" placeholder="Last Name"
                                                            maxlength="30" size="30" data-toggle="tooltip"
                                                            data-placement="right" title="Last Name" required>
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                                Name Extension: ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                            </small>
                                                            <input type="text" name="faxname"
                                                                class="form-control form-control-line mb-2"
                                                                placeholder="Name Extension" maxlength="3" size="3"
                                                                data-toggle="tooltip" data-placement="right" title="Name extension">
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                                <small class="form-text text-muted">
                                                                Occupation*
                                                            </small>
                                                            <input type="text" name="faoccup"
                                                                class="form-control form-control-line mb-2" placeholder="Occupation"
                                                                maxlength="80" size="80" data-toggle="tooltip"
                                                                data-placement="right" title="Occupation" required>
                                                        </div> 
                                                        <div class="form-actions col-md-12">
                                                            <input type="submit" class="btn btn-success" name="submit" value="Save">
                                                            
                                                        </div>
                                                                                                        
                                                    </form>
                                                    <hr>
                                                    
                                                    
                                                    <hr>
                                                    <label class="form-label">Mother's Information (Maiden)*</label>
                                                        <hr>
                                                    <form class="row" action="Parmanent_Address" method="post" enctype="multipart/form-data">
                                                        <div class="form-group col-md-6 m-t-5">
                                                        
                                                            <small class="form-text text-muted">
                                                                Mother's Given Name*
                                                            </small>
                                                            <input type="text" name="MOTHNAM3"
                                                                class="form-control form-control-line mb-2" placeholder="First Name"
                                                                maxlength="50" size="50" data-toggle="tooltip"
                                                                data-placement="right" title="First Name" required>
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                                Middle Name
                                                            </small>
                                                            <input type="text" name="MOTHNAM2"
                                                                class="form-control form-control-line mb-2" placeholder="Middle Name"
                                                                maxlength="30" size="30" data-toggle="tooltip"
                                                                data-placement="right" title="Middle Name">
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">

                                                                Mother's Maiden Last Name*
                                                            </small>
                                                            <input type="text" name="MOTHNAM1"
                                                                class="form-control form-control-line mb-2"
                                                                placeholder="Maiden Last Name" maxlength="30" size="30"
                                                                data-toggle="tooltip" data-placement="right" title="Last Name"
                                                                required>
                                                        </div> 
                                                        <div class="form-group col-md-6 m-t-5">
                                                            <small class="form-text text-muted">
                                                                Occupation*
                                                            </small>
                                                            <input type="text" name="MOTHOCCUP"
                                                                class="form-control form-control-line mb-2" placeholder="Occupation"
                                                                maxlength="80" size="80" data-toggle="tooltip"
                                                                data-placement="right" title="Occupation" required>
                                                        </div> 


                                                        <div class="form-actions col-md-12">
                                                            <input type="hidden" name="emid" value="">
                                                            <input type="hidden" name="id" value=" ">                                                    
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form> 
                                                    
                                                </div>
                                            </div>
                                        </div>




                                                <div class="tab-pane" id="education" role="tabpanel">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h2>Educational Background</h2>
                                                                <hr>
                                                            <form class="row" action="Add_Education" method="post" enctype="multipart/form-data" id="insert_education">
                                                                <span id="error"></span>
                                                                <label class="form-label"><h4>Elementary</h4> </label>
                                                                <hr>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <label>Name of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                <label>Basic Education/Degree/Course of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Period of Attendace</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="From">  
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label for=""></label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="To">  
                                                                </div>

                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Highest Level Unit Earned</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Year graduated</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line">
                                                                </div>
                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Scholarship/Academic honors received</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" >
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                                        <input type="hidden" name="emid" value="">
                                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <hr>
                                                            <form class="row" action="Add_Education" method="post" enctype="multipart/form-data" id="insert_education">
                                                                <span id="error"></span>
                                                                <label class="form-label"><h4>SECONDARY</h4> </label>
                                                                <hr>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <label>Name of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                <label>Basic Education/Degree/Course of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Period of Attendace</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="From">  
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label for=""></label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="To">  
                                                                </div>

                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Highest Level Unit Earned</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Year graduated</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line">
                                                                </div>
                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Scholarship/Academic honors received</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" >
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                                        <input type="hidden" name="emid" value="">
                                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <hr>    
                                                            <form class="row" action="Add_Education" method="post" enctype="multipart/form-data" id="insert_education">
                                                                <span id="error"></span>
                                                                <label class="form-label"><h4>VOCATIONAL/TRADE COURSES</h4> </label>
                                                                <hr>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <label>Name of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                <label>Basic Education/Degree/Course of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Period of Attendace</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="From">  
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label for=""></label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="To">  
                                                                </div>

                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Highest Level Unit Earned</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Year graduated</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line">
                                                                </div>
                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Scholarship/Academic honors received</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" >
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                                        <input type="hidden" name="emid" value="">
                                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <hr>
                                                            <form class="row" action="Add_Education" method="post" enctype="multipart/form-data" id="insert_education">
                                                                <span id="error"></span>
                                                                <label class="form-label"><h4>COLLEGE</h4> </label>
                                                                <hr>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <label>Name of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                <label>Basic Education/Degree/Course of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Period of Attendace</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="From">  
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label for=""></label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="To">  
                                                                </div>

                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Highest Level Unit Earned</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Year graduated</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line">
                                                                </div>
                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Scholarship/Academic honors received</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" >
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                                        <input type="hidden" name="emid" value="">
                                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <hr>
                                                            <form class="row" action="Add_Education" method="post" enctype="multipart/form-data" id="insert_education">
                                                                <span id="error"></span>
                                                                <label class="form-label"> <h4>GRADUATE STUDIES</h4></label>
                                                                <hr>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                    <label>Name of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                                </div>
                                                                <div class="form-group col-md-6 m-t-5">
                                                                <label>Basic Education/Degree/Course of School</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Period of Attendace</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="From">  
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label for=""></label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" placeholder="To">  
                                                                </div>

                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Highest Level Unit Earned</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-2 m-t-5">
                                                                    <label>Year graduated</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line">
                                                                </div>
                                                                <div class="form-group col-md-3 m-t-5">
                                                                    <label>Scholarship/Academic honors received</label>
                                                                    <input type="text" name="scholname" id="" class="form-control form-control-line" >
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                                        <input type="hidden" name="emid" value="">
                                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="tab-pane" id="eligibility" role="tabpanel">
                                                    <div class="card-body">
                                                        <label for=""><h4>CIVIL CERVICE ELIGIBILITY</h4></label>
                                                        <hr>
                                                         <!-- Table Div -->
                                                        <div class="table-responsive m-3">

                                                            <!-- Table -->
                                                            <table id="example2" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>SERVICE</th>
                                                                        <th>RATING</th>
                                                                        <th>DATE OF CONFERMENT</th>
                                                                        <th>LICENCE NUMBER</th>
                                                                        <th>DATE OF VALIDITY</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>SERVICE</th>
                                                                        <th>RATING</th>
                                                                        <th>DATE OF CONFERMENT</th>
                                                                        <th>LICENCE NUMBER</th>
                                                                        <th>DATE OF VALIDITY</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </tfoot>

                                                            </table>
                                                            <!-- End Table -->


                                                        </div>
                                                        <!-- End Table Div -->
                                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>SERVICE</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>RATING</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>DATE OF CONFERMENT</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>PLACE OF CONFERMENT</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>NUMBER</label>
                                                                <input type="number" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>DATE OF VALIDITY </label>
                                                                <input type="date" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            
                                                            
                                                            <div class="form-actions mt-2 col-md-12">
                                                                <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>








                                                <div class="tab-pane" id="experience" role="tabpanel">
                                                    <div class="card-body">
                                                        <label for=""><h4>CIVIL CERVICE ELIGIBILITY</h4></label>
                                                        <hr>
                                                         <!-- Table Div -->
                                                        <div class="table-responsive m-3">

                                                            <!-- Table -->
                                                            <table id="example1" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>FROM</th>
                                                                        <th>TO</th>
                                                                        <th>POSITION TILE</th>
                                                                        <th>COMPANY</th>
                                                                        <th>MONTLY SALARY</th>
                                                                        <th>SALARY GRADE & STEP INCREMENT</th>
                                                                        <th>STATUS OF APPOINMENT</th>
                                                                        <th>GOV'T SEVIVICE</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>FROM</th>
                                                                        <th>TO</th>
                                                                        <th>POSITION TILE</th>
                                                                        <th>COMPANY</th>
                                                                        <th>MONTLY SALARY</th>
                                                                        <th>SALARY GRADE & STEP INCREMENT</th>
                                                                        <th>STATUS OF APPOINMENT</th>
                                                                        <th>GOV'T SEVIVICE</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </tfoot>

                                                            </table>
                                                            <!-- End Table -->


                                                        </div>
                                                        <hr>
                                                        <!-- End Table Div -->
                                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-2 m-t-20">
                                                                <label>FROM</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-2 m-t-20">
                                                                <label>FROM</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>POSITION TITLE</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>COMPANY</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>MONTHLY SALART</label>
                                                                <input type="number" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>

                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>SALARY GRADE AND STEP INCREMENT</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>STATUS OF APPOINMENT</label>
                                                                <input type="number" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>GOVERNMENT SERVICE</label>
                                                                <select name="" id="" class="form-control" >
                                                                    <option>(YES/NO)</option>
                                                                    <option value="">YES</option>
                                                                    <option value="">NO</option>
                                                                </select>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-actions mt-2 col-md-12">
                                                                <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>





                                                <div class="tab-pane" id="voluntary" role="tabpanel">
                                                    <div class="card-body">
                                                        <label for=""><h4>VOLUNTARY WORK OF INVOLMENT IN CIVIC/NON-GOV'T/PEOPLE/ORGANIZATIONS</h4></label>
                                                        <hr>
                                                         <!-- Table Div -->
                                                        <div class="table-responsive m-3">

                                                            <!-- Table -->
                                                            <table id="example3" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>NAME OF ORGANIZATION</th>
                                                                        <th>ADDRESS OF ORGANIZATION</th>
                                                                        <th>FROM</th>
                                                                        <th>TO</th>
                                                                        <th>NUMBER OF HOURS</th>
                                                                        <th>POSITION/NATURE OF WORK</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>NAME OF ORGANIZATION</th>
                                                                        <th>ADDRESS OF ORGANIZATION</th>
                                                                        <th>FROM</th>
                                                                        <th>TO</th>
                                                                        <th>NUMBER OF HOURS</th>
                                                                        <th>POSITION/NATURE OF WORK</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </tfoot>

                                                            </table>
                                                            <!-- End Table -->


                                                        </div>
                                                        <!-- End Table Div -->
                                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>NAME OF ORGANIZATION</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>ADDRESS OF ORGANIZATION</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-2 m-t-20">
                                                                <label>FROM</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-2 m-t-20">
                                                                <label>FROM</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>

                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>NUMBER OF HOURS</label>
                                                                <input type="number" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>POSITION OF NATURE OF WORK </label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            
                                                            
                                                            <div class="form-actions mt-2 col-md-12">
                                                                <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>





                                                <div class="tab-pane" id="program" role="tabpanel">
                                                    <div class="card-body">
                                                        <label for=""><h4>TRAININNG PROGRAM ATTENDED</h4></label>
                                                        <hr>
                                                         <!-- Table Div -->
                                                        <div class="table-responsive m-3">

                                                            <!-- Table -->
                                                            <table id="example4" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>TRANING PROGRAMS</th>
                                                                        <th>RROM</th>
                                                                        <th>TO</th>
                                                                        <th>NUMBER OF HOURS</th>
                                                                        <th>TYPE OF LD</th>
                                                                        <th>SPONSORED BY</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>TRANING PROGRAMS</th>
                                                                        <th>RROM</th>
                                                                        <th>TO</th>
                                                                        <th>NUMBER OF HOURS</th>
                                                                        <th>TYPE OF LD</th>
                                                                        <th>SPONSORED BY</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </tfoot>

                                                            </table>
                                                            <!-- End Table -->


                                                        </div>
                                                        <!-- End Table Div -->
                                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>TRANING PROGRAMS</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>FROM</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>TO</label>
                                                                <input type="date" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>NUMBER OF HOURS</label>
                                                                <input type="number" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>TYPE OF LD</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>

                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>DATE OF VALIDITY </label>
                                                                <input type="date" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-4 m-t-20">
                                                                <label>SPONSORED BY</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            
                                                            
                                                            <div class="form-actions mt-2 col-md-12">
                                                                <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>




                                                <div class="tab-pane" id="otherinfo" role="tabpanel">
                                                    <div class="card-body">
                                                        <label for=""><h4>CIVIL CERVICE ELIGIBILITY</h4></label>
                                                        <hr>
                                                         <!-- Table Div -->
                                                        <div class="table-responsive m-3">

                                                            <!-- Table -->
                                                            <table id="example5" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>SPECIAL SKILLS</th>
                                                                        <th>RECOGNITION</th>
                                                                        <th>MEMBERSHIP IN ORGANITZATION</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>SPECIAL SKILLS</th>
                                                                        <th>RECOGNITION</th>
                                                                        <th>MEMBERSHIP IN ORGANITZATION</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </tfoot>

                                                            </table>
                                                            <!-- End Table -->


                                                        </div>
                                                        <!-- End Table Div -->
                                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-12 MB-2 m-t-20">
                                                                <label>SPECIAL SKILLS</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-12 MB-2 m-t-20">
                                                                <label>RECOGNITION</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-12 MB-2 m-t-20">
                                                                <label>MEMBERSHIP IN ORGANITZATION</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            
                                                            <div class="form-actions mt-2 col-md-12">
                                                                <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>


                                                

                                                






















                                                <div class="tab-pane" id="password1" role="tabpanel">
                                                    <div class="card-body">
                                                        <form class="row" action="Reset_Password_Hr" method="post" enctype="multipart/form-data">
                                                            <div class="form-group col-md-6 m-t-20">
                                                                <label>Password</label>
                                                                <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                            </div>
                                                            <div class="form-group col-md-6 m-t-20">
                                                                <label>Confirm Password</label>
                                                                <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                            </div>
                                                            
                                                            
                                                            <div class="form-actions col-md-12">
                                                            <input type="hidden" name="emid" value="">                                                   
                                                                <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Save</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="social" role="tabpanel">
                                                    <div class="card-body">
                                                                <form class="row" action="Save_Social" method="post" enctype="multipart/form-data">
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Facebook</label>
                                                                        <input type="url" class="form-control"  name="facebook" value=" " placeholder="www.facebook.com"> 
                                                                    </div>
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Twitter</label>
                                                                        <input type="text" class="form-control"  name="twitter" value=" " > 
                                                                    </div>
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Google +</label>
                                                                        <input type="text" id="" name="google"  class="form-control " value=" "> 
                                                                    </div>
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Skype</label>
                                                                        <input type="text" id="" name="skype"  class="form-control " value=" "> 
                                                                    </div>
                                                                
                                                                    
                                                                    <div class="form-actions col-md-12">
                                                                    <input type="hidden" name="emid" value="">                                                   
                                                                    <input type="hidden" name="id" value=" ">                                                   
                                                                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                    
                                                                </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="password" role="tabpanel">
                                                    <div class="card-body">
                                                                <form class="row" action="Reset_Password" method="post" enctype="multipart/form-data">
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Old Password</label>
                                                                        <input type="text" class="form-control" name="old" value="" placeholder="old password" required minlength="6"> 
                                                                    </div>
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Password</label>
                                                                        <input type="text" class="form-control" name="new1" value="" required minlength="6"> 
                                                                    </div>
                                                                    <div class="form-group col-md-6 m-t-20">
                                                                        <label>Confirm Password</label>
                                                                        <input type="text" id="" name="new2" class="form-control " required minlength="6"> 
                                                                    </div>
                                                                    <div class="form-actions col-md-12">
                                                                    <input type="hidden" name="emid" value="">                                                   
                                                                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Save</button>
                                                                    </div>
                                                                </form>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
<!--                                 
                                            </div>
                                        </div>                                
                                    </div> -->
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
    <script src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/plugin/jQuery.style.switcher.js"></script>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR;?>/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR;?>/assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
   


     <!-- DATA TABES SCRIPT -->
     <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <!-- <script src="public/plugins/DataTables-1.11.4/js/jquery.dataTables.js" type="text/javascript"></script> -->

        <script src="<?php echo BASE_URL . PUBLIC_DIR?>/public/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- <script src="public/plugins/DataTables-1.11.4/js/dataTables.bootstrap.js" type="text/javascript"></script> -->

        <!-- page script -->
        <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $("#example3").dataTable();
            $("#example4").dataTable();
            $("#example5").dataTable();
            $("#example6").dataTable();
            $('#example2').dataTable({
                "Paginate": true,
                "LengthChange": false,
                "Filter": false,
                "Sort": true,
                "Info": true,
                "AutoWidth": false
            });
        });
    </script>

<style>
    .dataTables_paginate>ul.pagination>li>a {
        padding: 5px;
        background-color: #066CFB;
        color: #fff;
        margin: 0px;
        text-decoration: none;
    }

    .dataTables_paginate>ul.pagination>li>a:hover {
        background-color: #0760DC;
    }

    .dataTables_paginate>ul.pagination>li:first-child>a {
        border-radius: 5px 0px 0px 5px
    }

    .dataTables_paginate>ul.pagination>li:last-child>a {
        border-radius: 0px 5px 5px 0px
    }
</style>
