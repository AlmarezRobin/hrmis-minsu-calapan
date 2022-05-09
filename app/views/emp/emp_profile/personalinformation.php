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
                        <a href="<?= site_url('Employee/'); ?>"> <i class=" fa fa-icon fa-arrow-left"></i></a>

                        User <small>Profile</small>
                    </h5>
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
                                                <?php if (isset($emp_profile['profile_id'])) : ?>
                                                    <!-- Update User Profile -->
                                                    <form class="row" method="post" action="<?= site_url('Employee/update_profile'); ?>" enctype="multipart/form-data">

                                                        <input type="hidden" name="profile_id" value="<?= $emp_profile['profile_id'] ?>">
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="firstname" class="form-label">First Name*</label>
                                                            <input type="text" class="form-control  " name="fname" id="firstname" placeholder="" maxlength="50" size="50" data-toggle="tooltip" data-placement="right" title="First Name" required value="<?= $emp_profile['f_name'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="midddlename" class="form-label">Middle Name</label>
                                                            <input type="text" class="form-control" name="mname" id="midddlename" placeholder="" maxlength="30" size="30" data-toggle="tooltip" data-placement="right" title="Middle Name" value="<?= $emp_profile['m_name'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="lastname" class="form-label">Last Name*</label>
                                                            <input type="text" class="form-control" name="lname" id="lastname" placeholder="" maxlength="30" size="30" data-toggle="tooltip" data-placement="right" title="Last Name" required value="<?= $emp_profile['l_name'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Name extension </label>
                                                            <input type="text" class="form-control" name="xname" id="nameex" placeholder="" maxlength="3" size="3" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['name_ex'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label class="form-label">Date Of Birth </label>
                                                            <input type="date" id="" name="dob" class="form-control" placeholder="" required value="<?= $emp_profile['date_of_birth'] ?>">
                                                        </div>

                                                        <!-- /* start change jcd April 23, 2022 */ -->

                                                        <!-- Birth Address  -->
                                                        <p class="h6 mt-4 fw-bold">Place of Birth</p>
                                                        <!-- -------------------------------------------------------------- -->
                                                        <?php if(empty($birth_add['address_id'])): ?>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="birth-region" id="birth-region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-region-text" id="birth-region-text" required>
                                                        </div>

                                                        
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="birth-province" id="birth-province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-province-text" id="birth-province-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="birth-city" id="birth-city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-city-text" id="birth-city-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="birth-barangay" id="birth-barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-barangay-text" id="birth-barangay-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="birth-street" id="birth-street" class="form-control" required>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="birth-house" id="birth-house" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="birth-village" id="birth-village" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="birth-zipcode" id="birth-zipcode" class="form-control" required>
                                                        </div>
                                                        <?php else: ?>
                                                            <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="birth-region" id="birth-region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-region-text" id="birth-region-text" value="<?=$birth_add['region'] ?>" required>
                                                        </div>

                                                        
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="birth-province" id="birth-province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-province-text" id="birth-province-text" value="<?=$birth_add['province'] ?>"  required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="birth-city" id="birth-city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-city-text" id="birth-city-text" value="<?=$birth_add['municipality_city'] ?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="birth-barangay" id="birth-barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="birth-barangay-text" id="birth-barangay-text" value="<?=$birth_add['barangay'] ?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="birth-street" id="birth-street" class="form-control" value="<?=$birth_add['street_sitio'] ?>">
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="birth-house" id="birth-house" class="form-control" value="<?=$birth_add['house_block_lotno'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="birth-village" id="birth-village" class="form-control" value="<?=$birth_add['subdivision_village'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="birth-zipcode" id="birth-zipcode" class="form-control" value="<?=$birth_add['zipcode'] ?>">
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- end Birth Address -->

                                                        <p class="h5 mt-4"></p>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label>Gender </label>
                                                            <select name="sex" class="form-control custom-select">
                                                                <option value="<?= $emp_profile['sex'] ?>"><?= $emp_profile['sex'] ?></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="civilstatus" class="form-label">Civil Status*</label>
                                                            <select class="form-control custom-select" name="cstat" id="civilstatus" data-toggle="tooltip" data-placement="right" title="Civil Status" required value="<?= $emp_profile['civil_status'] ?>">
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                <option value="seperated">Separated</option>
                                                                <option value="widower">Widow/er</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Height </label>
                                                            <input type="text" class="form-control" name="height" id="height" placeholder="" maxlength="3" size="3" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['height'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Weight </label>
                                                            <input type="text" class="form-control" name="weight" id="weight" placeholder="" maxlength="5" size="5" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['weight'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Blood Type </label>
                                                            <input type="text" class="form-control" name="blood-type" id="blood-type" placeholder="" maxlength="5" size="5" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['blood_type'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">GSIS ID NO. </label>
                                                            <input type="text" class="form-control" name="gsis-no" id="gsis-no" placeholder="" maxlength="11" size="11" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['gsisno'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">PAG-IBIG ID NO. </label>
                                                            <input type="text" class="form-control" name="pag-ibig-no" id="pag-ibig-no" placeholder="" maxlength="12" size="12" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['pag_ibig_no'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">PHILHEALTH NO. </label>
                                                            <input type="text" class="form-control" name="philhealth-no" id="philhealth_no" placeholder="" maxlength="12" size="12" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['philhealth_no'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">SSS NO. </label>
                                                            <input type="text" class="form-control" name="sss-no" id="sss-no" placeholder="" maxlength="10" size="10" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['sss_no'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">TIN NO. </label>
                                                            <input type="text" class="form-control" name="tin-no" id="tin-no" placeholder="" maxlength="13" size="13" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['tin_no'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="nameex" class="form-label">Agency Employee NO.  </label>
                                                            <input type="text" class="form-control" name="agency-emp-no" id="agency-emp-no" placeholder="" maxlength="12" size="12" data-toggle="tooltip" data-placement="right" title="Name Extension" value="<?= $emp_profile['agency_emp_no'] ?>">
                                                        </div>

                                                        <p class="h5 mt-4"></p>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Citizenship</label>
                                                            <select name="citizenship" id="citizenship" class="form-control" onchange='enable()'>
                                                                <option><?= $emp_profile['citizenship'] ?> </option>
                                                                <option> --select-- </option>
                                                                <option value="filipino">FILIPINO</option>
                                                                <option value="dual citizenship">DUAL CITIZENSHIP</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Dual Citizenship by: </label>
                                                            <select name="dualby" id="dualby" class="form-control" onchange='enable()'>
                                                                <option value="<?= $emp_profile['ship_by'] ?>"><?= $emp_profile['ship_by'] ?></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="BY BIRTH" id="by-birth">BY BIRTH</option>
                                                                <option value="BY NATURALIZATION" id="naturalization">BY NATURALIZATION</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Please indicate country*</label>
                                                            <input type="text" class="form-control " name="country" id="country" value="<?= $emp_profile['citizenship_country'] ?>" id="phonenumber" placeholder="" data-toggle="tooltip" data-placement="right" title="Country" >
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Contact Number*</label>
                                                            <input type="number" class="form-control " name="cnumber" id="phonenumber" placeholder="" pattern="[0-9]{10}" data-toggle="tooltip" data-placement="right" title="Cellphone Number" required value="<?= $emp_profile['mobile'] ?>">
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="phonenumber" class="form-label">Telephone Number*</label>
                                                            <input type="number" class="form-control " name="tnumber" id="phonenumber" placeholder="" pattern="[0-9]{10}" data-toggle="tooltip" data-placement="right" title="Cellphone Number" required value="<?= $emp_profile['telephone'] ?>">
                                                        </div>

                                                        <!-- Residential Address -->
                                                        <p class="h6 mt-4 fw-bold"> Resdential Address</p>
                                                        <?php if(empty($residential_add['address_id'])): ?>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="region" id="region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="region-text" id="region-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="province" id="province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="province-text" id="province-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="city" id="city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="city-text" id="city-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="barangay" id="barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="barangay-text" id="barangay-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="street" id="street" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="house" id="house" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="village" id="village" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="zipcode" id="zipcode" class="form-control" required>
                                                        </div>
                                                        <?php else: ?>
                                                            <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="region" id="region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="region-text" id="region-text" value="<?= $residential_add['region']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="province" id="province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="province-text" id="province-text" value="<?= $residential_add['province']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="city" id="city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="city-text" id="city-text" value="<?= $residential_add['municipality_city']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="barangay" id="barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="barangay-text" id="barangay-text" value="<?= $residential_add['barangay']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="street" id="street" class="form-control"value="<?= $residential_add['street_sitio']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="house" id="house" class="form-control" value="<?= $residential_add['house_block_lotno']?>">
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="village" id="village" class="form-control" value="<?= $residential_add['subdivision_village']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="zipcode" id="zipcode" class="form-control" value="<?= $residential_add['zipcode']?>" required>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- end Residential Address -->

                                                        <!-- Permanent Address -->
                                                        <p class="h6 mt-4 fw-bold"> Permanent Address</p>
                                                        <?php if(empty($permanent_add['address_id'])) :?>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="permanent-region" id="permanent-region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-region-text" id="permanent-region-text"required>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="permanent-province" id="permanent-province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-province-text" id="permanent-province-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="permanent-city" id="permanent-city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-city-text" id="permanent-city-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="permanent-barangay" id="permanent-barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-barangay-text" id="permanent-barangay-text" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="permanent-street" id="permanent-street" class="form-control" required>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="permanent-house" id="permanent-house" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="permanent-village" id="permanent-village" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="permanent-zipcode" id="permanent-zipcode" class="form-control" required>
                                                        </div>
                                                        <?php else: ?>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Region*</label>
                                                            <select name="permanent-region" id="permanent-region" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-region-text" id="permanent-region-text" value="<?= $permanent_add['region']?>" required>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Province*</label>
                                                            <select name="permanent-province" id="permanent-province" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-province-text" id="permanent-province-text" value="<?= $permanent_add['province']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">City/Municipality*</label>
                                                            <select name="permanent-city" id="permanent-city" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-city-text" id="permanent-city-text" value="<?= $permanent_add['municipality_city']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Barangay*</label>
                                                            <select name="permanent-barangay" id="permanent-barangay" class="form-control">
                                                            </select>
                                                            <input type="hidden" class="form-control form-control-md" name="permanent-barangay-text" id="permanent-barangay-text" value="<?= $permanent_add['barangay']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Street*</label>
                                                            <input type="text" name="permanent-street" id="permanent-street" class="form-control" value="<?= $permanent_add['street_sitio']?>" required>
                                                        </div>
                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">House/Block/Lot No.*</label>
                                                            <input type="text" name="permanent-house" id="permanent-house" class="form-control" value="<?= $permanent_add['house_block_lotno']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Village*</label>
                                                            <input type="text" name="permanent-village" id="permanent-village" class="form-control" value="<?= $permanent_add['subdivision_village']?>" required>
                                                        </div>

                                                        <div class="form-group col-md-4 m-t-10">
                                                            <label for="" class="form-label">Zipcode*</label>
                                                            <input type="number" name="permanent-zipcode" id="permanent-zipcode" class="form-control" value="<?= $permanent_add['zipcode']?>" required>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- end Permanent Address -->
                                                        <!-- /* end change jcd April 23, 2022 */ -->
                                                        <div class="form-actions mt-2 col-md-12">
                                                            <input type="submit" value="Update" name="submit" class="btn btn-success">
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

    <!-- /* start change jcd April 23, 2022 */ -->
    <script type="text/javascript">
        /* disable dual citizenship */
        function enable() {
            if (document.getElementById('citizenship').value === "dual citizenship") {
                document.getElementById('by-birth').disabled = false;
                document.getElementById('naturalization').disabled = false;
            } else {
                document.getElementById('by-birth').disabled = true;
                document.getElementById('naturalization').disabled = true;
            }
        }
        
        /*  Residential Address  */
        var my_handlers = {
            // fill province
            fill_provinces: function() {
                //selected region
                var region_code = $(this).val();

                // set selected text to input
                var region_text = $(this).find("option:selected").text();
                let region_input = $('#region-text');
                region_input.val(region_text);
                //clear province & city & barangay input
                $('#province-text').val('');
                $('#city-text').val('');
                $('#barangay-text').val('');

                //province
                let dropdown = $('#province');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
                dropdown.prop('selectedIndex', 0);

                //city
                let city = $('#city');
                city.empty();
                city.append('<option selected="true" disabled></option>');
                city.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/province.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.region_code == region_code;
                    });

                    result.sort(function(a, b) {
                        return a.province_name.localeCompare(b.province_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
                    })

                });
            },
            // fill city
            fill_cities: function() {
                //selected province
                var province_code = $(this).val();

                // set selected text to input
                var province_text = $(this).find("option:selected").text();
                let province_input = $('#province-text');
                province_input.val(province_text);
                //clear city & barangay input
                $('#city-text').val('');
                $('#barangay-text').val('');

                //city
                let dropdown = $('#city');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose city/municipality</option>');
                dropdown.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/city.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.province_code == province_code;
                    });

                    result.sort(function(a, b) {
                        return a.city_name.localeCompare(b.city_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
                    })

                });
            },
            // fill barangay
            fill_barangays: function() {
                // selected barangay
                var city_code = $(this).val();

                // set selected text to input
                var city_text = $(this).find("option:selected").text();
                let city_input = $('#city-text');
                city_input.val(city_text);
                //clear barangay input
                $('#barangay-text').val('');

                // barangay
                let dropdown = $('#barangay');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose barangay</option>');
                dropdown.prop('selectedIndex', 0);

                // filter & Fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/barangay.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.city_code == city_code;
                    });

                    result.sort(function(a, b) {
                        return a.brgy_name.localeCompare(b.brgy_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
                    })

                });
            },

            onchange_barangay: function() {
                // set selected text to input
                var barangay_text = $(this).find("option:selected").text();
                let barangay_input = $('#barangay-text');
                barangay_input.val(barangay_text);
            },

        };


        $(function() {
            // events
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);
            $('#barangay').on('change', my_handlers.onchange_barangay);

            // load region
            let dropdown = $('#region');
            dropdown.empty();
            dropdown.append('<option selected="true" disabled>Choose Region</option>');
            dropdown.prop('selectedIndex', 0);
            const url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/region.json';
            // Populate dropdown with list of regions
            $.getJSON(url, function(data) {
                $.each(data, function(key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.region_code).text(entry.region_name));
                })
            });

        });
       

        /* Permanent Address */
        var my_permanent_handlers = {
            // fill province
            fill_permanent_provinces: function() {
                //selected region
                var region_code = $(this).val();

                // set selected text to input
                var region_text = $(this).find("option:selected").text();
                let region_input = $('#permanent-region-text');
                region_input.val(region_text);
                //clear province & city & barangay input
                $('#permanent-province-text').val('');
                $('#permanent-city-text').val('');
                $('#permanent-barangay-text').val('');

                //province
                let dropdown = $('#permanent-province');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
                dropdown.prop('selectedIndex', 0);

                //city
                let city = $('#permanent-city');
                city.empty();
                city.append('<option selected="true" disabled></option>');
                city.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#permanent-barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/province.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.region_code == region_code;
                    });

                    result.sort(function(a, b) {
                        return a.province_name.localeCompare(b.province_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
                    })

                });
            },
            // fill city
            fill_permanent_cities: function() {
                //selected province
                var province_code = $(this).val();

                // set selected text to input
                var province_text = $(this).find("option:selected").text();
                let province_input = $('#permanent-province-text');
                province_input.val(province_text);
                //clear city & barangay input
                $('#permanent-city-text').val('');
                $('#permanent-barangay-text').val('');

                //city
                let dropdown = $('#permanent-city');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose city/municipality</option>');
                dropdown.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#permanent-barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/city.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.province_code == province_code;
                    });

                    result.sort(function(a, b) {
                        return a.city_name.localeCompare(b.city_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
                    })

                });
            },
            // fill barangay
            fill_permanent_barangays: function() {
                // selected barangay
                var city_code = $(this).val();

                // set selected text to input
                var city_text = $(this).find("option:selected").text();
                let city_input = $('#permanent-city-text');
                city_input.val(city_text);
                //clear barangay input
                $('#permanent-barangay-text').val('');

                // barangay
                let dropdown = $('#permanent-barangay');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose barangay</option>');
                dropdown.prop('selectedIndex', 0);

                // filter & Fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/barangay.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.city_code == city_code;
                    });

                    result.sort(function(a, b) {
                        return a.brgy_name.localeCompare(b.brgy_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
                    })

                });
            },

            onchange_permanent_barangay: function() {
                // set selected text to input
                var barangay_text = $(this).find("option:selected").text();
                let barangay_input = $('#permanent-barangay-text');
                barangay_input.val(barangay_text);
            },

        };


        $(function() {
            // events
            $('#permanent-region').on('change', my_permanent_handlers.fill_permanent_provinces);
            $('#permanent-province').on('change', my_permanent_handlers.fill_permanent_cities);
            $('#permanent-city').on('change', my_permanent_handlers.fill_permanent_barangays);
            $('#permanent-barangay').on('change', my_permanent_handlers.onchange_permanent_barangay);

            // load region
            let dropdown = $('#permanent-region');
            dropdown.empty();
            dropdown.append('<option selected="true" disabled>Choose Region</option>');
            dropdown.prop('selectedIndex', 0);
            const url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/region.json';
            // Populate dropdown with list of regions
            $.getJSON(url, function(data) {
                $.each(data, function(key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.region_code).text(entry.region_name));
                })
            });

        });

        /* Birth address */
        var my_birth_handlers = {
            // fill province
            fill_birth_provinces: function() {
                //selected region
                var region_code = $(this).val();

                // set selected text to input
                var region_text = $(this).find("option:selected").text();
                let region_input = $('#birth-region-text');
                region_input.val(region_text);
                //clear province & city & barangay input
                $('#birth-province-text').val('');
                $('#birth-city-text').val('');
                $('#birth-barangay-text').val('');

                //province
                let dropdown = $('#birth-province');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
                dropdown.prop('selectedIndex', 0);

                //city
                let city = $('#birth-city');
                city.empty();
                city.append('<option selected="true" disabled></option>');
                city.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#birth-barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/province.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.region_code == region_code;
                    });

                    result.sort(function(a, b) {
                        return a.province_name.localeCompare(b.province_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
                    })

                });
            },
            // fill city
            fill_birth_cities: function() {
                //selected province
                var province_code = $(this).val();

                // set selected text to input
                var province_text = $(this).find("option:selected").text();
                let province_input = $('#birth-province-text');
                province_input.val(province_text);
                //clear city & barangay input
                $('#birth-city-text').val('');
                $('#birth-barangay-text').val('');

                //city
                let dropdown = $('#birth-city');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose city/municipality</option>');
                dropdown.prop('selectedIndex', 0);

                //barangay
                let barangay = $('#birth-barangay');
                barangay.empty();
                barangay.append('<option selected="true" disabled></option>');
                barangay.prop('selectedIndex', 0);

                // filter & fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/city.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.province_code == province_code;
                    });

                    result.sort(function(a, b) {
                        return a.city_name.localeCompare(b.city_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
                    })

                });
            },
            // fill barangay
            fill_birth_barangays: function() {
                // selected barangay
                var city_code = $(this).val();

                // set selected text to input
                var city_text = $(this).find("option:selected").text();
                let city_input = $('#birth-city-text');
                city_input.val(city_text);
                //clear barangay input
                $('#birth-barangay-text').val('');

                // barangay
                let dropdown = $('#birth-barangay');
                dropdown.empty();
                dropdown.append('<option selected="true" disabled>Choose barangay</option>');
                dropdown.prop('selectedIndex', 0);

                // filter & Fill
                var url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/barangay.json';
                $.getJSON(url, function(data) {
                    var result = data.filter(function(value) {
                        return value.city_code == city_code;
                    });

                    result.sort(function(a, b) {
                        return a.brgy_name.localeCompare(b.brgy_name);
                    });

                    $.each(result, function(key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
                    })

                });
            },

            onchange_birth_barangay: function() {
                // set selected text to input
                var barangay_text = $(this).find("option:selected").text();
                let barangay_input = $('#birth-barangay-text');
                barangay_input.val(barangay_text);
            },

        };


        $(function() {
            // events
            $('#birth-region').on('change', my_birth_handlers.fill_birth_provinces);
            $('#birth-province').on('change', my_birth_handlers.fill_birth_cities);
            $('#birth-city').on('change', my_birth_handlers.fill_birth_barangays);
            $('#birth-barangay').on('change', my_birth_handlers.onchange_birth_barangay);

            // load region
            let dropdown = $('#birth-region');
            dropdown.empty();
            dropdown.append('<option selected="true" disabled>Choose Region</option>');
            dropdown.prop('selectedIndex', 0);
            const url = '<?php echo BASE_URL . PUBLIC_DIR ?>/address/ph-json/region.json';
            // Populate dropdown with list of regions
            $.getJSON(url, function(data) {
                $.each(data, function(key, entry) {
                    dropdown.append($('<option></option>').attr('value', entry.region_code).text(entry.region_name));
                })
            });

        });
    </script>
    <!-- /* end change jcd April 23, 2022 */ -->

    <?php require_once(APP_DIR . 'views/emp/includes/footer.php'); ?>