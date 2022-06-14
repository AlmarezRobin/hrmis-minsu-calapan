<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes/head.php'); ?>
<link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR ?>/pds/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR ?>/pds/pds.css">

<body class="d-flex flex-column h-100">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes\topbar.php'); ?>
    <!-- end topbar -->
      <!-- topbar -->
      <?php require_once(APP_DIR . 'views\emp\includes\head.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


                <!-- sidebar -->
                <?php require_once(APP_DIR . 'views\emp\includes\sidebar.php'); ?>
                <!-- end side bar -->
                <!-- // * commented jcd april 23, 2022 -->
                <!-- <button id="print" onclick="print_pds()">
                    Print
                </button>
                <script>
                    function print_pds(){
                        window.print();
                    }
                </script> -->
                <!-- // * commented jcd april 23, 2022 -->
                <!-- Main -->
                <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                    <!-- title -->
                    <div class="justify-content-between pt-1 pb-2 mb-3 border-bottom mx-2">

                        <h5 class="h5 mt-3 mb-0 color-darkgray"> Status: 
                            <strong>
                                <?php if(isset($get_stat_pds['pds_id'])): ?>
                                    <?php  echo $get_stat_pds['status_of_pds']?>  
                                <?php endif; ?>
                            </strong>

                            <button class="btn btn-sm btn-success float-sm-end dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" class=" ">
                                <a class="dropdown-item" href="<?=site_url('Export_PDS/pds_exportation');?>">Export PDS</a>
                            </div>
                        </h5>

                                
                    </div>
                    <!-- end title -->

                <?php 
                    // echo '<pre> <br>';
                    // var_dump($data['get_id']);
                    // echo '</pre>';
                    // exit;
                ?>

                    <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
        <h5 class="h5 mt-3 mb-0 color-darkgray"> <a href="<?= site_url('Hr/view_pds_request');?>"> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a>
            &nbsp; PERSONAL DATA SHEET<small></small></h5>
    </div>
    <!-- col -->
    <div class="col-md-12 float-sm-start">
        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    PERSONAL INFORMATION <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">SURNAME</label>
                            <input type="text" value="<?= $emp_profile['l_name'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="<?= $emp_profile['f_name'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="<?= $emp_profile['m_name'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">NAME EX.</label>
                            <input type="text" value="<?= $emp_profile['name_ex'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">DATE OF BIRTH</label>
                            <input type="text" value="<?= $emp_profile['date_of_birth'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">PLACE OF BIRTH</label>
                            <input type="text" value="<?php echo $emp_profile['municipality_city'] . ' ' . $emp_profile['province'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">SEX</label>
                            <input type="text" value="<?= $emp_profile['sex'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">CIVIL STATUS</label>
                            <input type="text" value="<?= $emp_profile['civil_status'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">HEIGHT (m)</label>
                            <input type="text" value="<?= $emp_profile['height'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">WEIGHT (kg)</label>
                            <input type="text" value="<?= $emp_profile['weight'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">BLOOD TYPE</label>
                            <input type="text" value="<?= $emp_profile['blood_type'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">GSIS ID NO.</label>
                            <input type="text" value="<?= $emp_profile['gsisno'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">PAG-IBIG ID NO.</label>
                            <input type="text" value="<?= $emp_profile['pag_ibig_no'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">PHILHEALTH NO.</label>
                            <input type="text" value="<?= $emp_profile['philhealth_no'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">SSS NO.</label>
                            <input type="text" value="<?= $emp_profile['sss_no'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">TIN NO.</label>
                            <input type="text" value="<?= $emp_profile['tin_no'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">AGENCY EMPLOYEE NO.</label>
                            <input type="text" value="<?= $emp_profile['agency_emp_no'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">CITIZENSHIP</label>
                            <input type="text" value="<?= $emp_profile['citizenship'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">CITIZENSHIP CATEGORY</label>
                            <input type="text" value="<?= $emp_profile['ship_by'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">COUNTRY</label>
                            <input type="text" value="<?= $emp_profile['citizenship_country'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">Telephone</label>
                            <input type="text" value="<?= $emp_profile['telephone'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">Mobile No.</label>
                            <input type="text" value="<?= $emp_profile['mobile'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">E-mail Address</label>
                            <input type="text" value="<?= $this->session->userdata('email') ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <hr>
                    <h6 class="fw-bold">RESIDENTIAL ADDRESS</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">House/Block/Lot No.</label>
                            <input type="text" value="<?= $residential_address['house_block_lotno'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Street</label>
                            <input type="text" value="<?= $residential_address['street_sitio'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Subdivision/Village</label>
                            <input type="text" value="<?= $residential_address['subdivision_village'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Barangay</label>
                            <input type="text" value="<?= $residential_address['barangay'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">City/Municipality</label>
                            <input type="text" value="<?= $residential_address['municipality_city'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">Province</label>
                            <input type="text" value="<?= $residential_address['province'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">Zipcode</label>
                            <input type="text" value="<?= $residential_address['zipcode'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <br>
                    <h6 class="fw-bold">PERMANENT ADDRESS</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">House/Block/Lot No.</label>
                            <input type="text" value="<?= $permanent_address['house_block_lotno'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Street</label>
                            <input type="text" value="<?= $permanent_address['street_sitio'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Subdivision/Village</label>
                            <input type="text" value="<?= $permanent_address['subdivision_village'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">Barangay</label>
                            <input type="text" value="<?= $permanent_address['barangay'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">City/Municipality</label>
                            <input type="text" value="<?= $permanent_address['municipality_city'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">Province</label>
                            <input type="text" value="<?= $permanent_address['province'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">Zipcode</label>
                            <input type="text" value="<?= $permanent_address['zipcode'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>


        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    II. FAMILY BACKGROUND<i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <h6 class="fw-bold">SPOUSE</h6>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">SPOUSE'S SURNAME</label>
                            <input type="text" value="<?= $get_spouse_info['lname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="<?= $get_spouse_info['fname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="<?= $get_spouse_info['mname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">NAME EXTENSION</label>
                            <input type="text" value="<?= $get_spouse_info['name_ext'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">OCCUPATION</label>
                            <input type="text" value="<?= $get_spouse_info['occupation'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">EMPLOYER/BUSSINESS NAME</label>
                            <input type="text" value="<?= $get_spouse_info['bus_name'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">BUSINESS ADDRESS</label>
                            <input type="text" value="<?= $get_spouse_info['bus_add'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">TELEPHONE NO.</label>
                            <input type="text" value="<?= $get_spouse_info['tel_num'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <br><hr>
                    <h6 class="fw-bold">FATHER</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">FATHER'S SURNAME</label>
                            <input type="text" value="<?= $get_father_info['father_lname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="<?= $get_father_info['father_fname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="<?= $get_father_info['father_mname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">NAME EXTENSION</label>
                            <input type="text" value="<?= $get_father_info['father_ex'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div> 
                    <br><hr>
                    <h6 class="fw-bold">MOTHER</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">MOTHER'S MAIDEN NAME</label>
                            <input type="text" value="<?php echo $get_mother_info['maiden_fname'] . ' ' . $get_mother_info['maiden_mname'] . ' ' . $get_mother_info['maiden_lname'] ?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">SURNAME</label>
                            <input type="text" value="<?= $get_mother_info['lname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="<?= $get_mother_info['maiden_fname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="<?= $get_mother_info['maiden_mname']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <table class="table table-bordered table-hover mb-0">
                                <tr>
                                    <th>NAME OF CHILDREN</th>
                                    <th>DATE OF BIRTH</th>
                                </tr>
                                <?php foreach ($get_all_child as $child): ?>
                                    <?php if($child['fname'] === 'N/A'): ?>
                                        <tr>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <td><?php echo $child['fname'] . ' ' . $child['mname'] . ' ' . $child['lname'] ?></td>
                                            <td><?= $child['bday'] ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>

                        </div>
                    </div>

                    
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>



        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    III. EDUCATIONAL BACKGROUND <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>LEVEL</th>
                                        <th>NAME OF SCHOOL</th>
                                        <th>BASIC EDUCATION/DEGREE/COURSE</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>UNITS EARNED</th>
                                        <th>YEAR GRADUATED</th>
                                        <th>HONORS RECEIVED</th>
                                    </tr>
                                    <?php foreach($get_educational as $educbg): ?>
                                    <tr>
                                        <td><?= $educbg['level'] ?></td>
                                        <td><?= $educbg['school_name'] ?></td>
                                        <td><?= $educbg['degree'] ?></td>
                                        <td><?= $educbg['from_date'] ?></td>
                                        <td><?= $educbg['to_date'] ?></td>
                                        <td><?= $educbg['highest_level'] ?></td>
                                        <td><?= $educbg['year_graduated'] ?></td>
                                        <td><?= $educbg['honors_received'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>

        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    IV. CIVIL SERVICE ELEGIBILITY  <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE                                                    BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
                                        <th>RATING (If Applicable)</th>
                                        <th>DATE OF EXAMINATION / CONFERMENT</th>
                                        <th>PLACE OF EXAMINATION / CONFERMENT</th>
                                        <th>LICENSE NUMBER</th>
                                        <th>LICENSE Date of Validity</th>
                                    </tr>
                                    <?php if(empty($get_eligibility)): ?>
                                        <tr>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach($get_eligibility as $cse): ?>
                                        <tr>
                                            <td><?= $cse['service'] ?></td>
                                            <td><?= $cse['rating'] ?></td>
                                            <td><?= $cse['date_conferment'] ?></td>
                                            <td><?= $cse['place_conferment'] ?></td>
                                            <td><?= $cse['license_num'] ?></td>
                                            <td><?= $cse['validity'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>
        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    V. WORK EXPERIENCE  <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>POSITION/TITLE</th>
                                        <th>COMPANY</th>
                                        <th>MONTHLY SALARY</th>
                                        <th>SALARY GRADE</th>
                                        <th>STATUS OF APPOINTMENT</th>
                                        <th>GOV'T SEVICE (Y/N)</th>
                                    </tr>
                                    <?php if(empty($get_experience)): ?>
                                            <tr>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                                <td class="text-center fw-bold">N/A</td>
                                            </tr>
                                    <?php endif; ?>
                                    <?php foreach($get_experience as $workExp): ?>
                                        <?php if($workExp['_from'] === 'N/A'): ?>
                                            <tr>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                        <?php elseif($workExp['step_inc'] != 'N/A'): ?>
                                            <tr>
                                                <td><?= $workExp['_from'] ?></td>
                                                <td><?= $workExp['_to'] ?></td>
                                                <td><?= $workExp['designation'] ?></td>
                                                <td><?= $workExp['company'] ?></td>
                                                <td><?= $workExp['monthly_salary'] ?></td>
                                                <td><?php echo $workExp['salary_grade'] . '/' . $workExp['step_inc']  ?></td>
                                                <td><?= $workExp['appointment_status'] ?></td>
                                                <td><?= $workExp['government'] ?></td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <td><?= $workExp['_from'] ?></td>
                                                <td><?= $workExp['_to'] ?></td>
                                                <td><?= $workExp['designation'] ?></td>
                                                <td><?= $workExp['company'] ?></td>
                                                <td><?= $workExp['monthly_salary'] ?></td>
                                                <td><?= $workExp['salary_grade'] ?></td>
                                                <td><?= $workExp['appointment_status'] ?></td>
                                                <td><?= $workExp['government'] ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </table>
                        </div>

                        </div>
                    </div>
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>


        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S  <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>NAME & ADDRESS OF ORGANIZATION  <br> (Write in full)</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>NUMBER OF HOURS</th>
                                        <th>POSITION / NATURE OF WORK</th>
                                    </tr>
                                    <?php if(empty($get_voluntary)): ?>
                                        <tr>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach($get_voluntary as $vol): ?>
                                        <tr>
                                            <td><?php echo $vol['name'] . ' ' . $vol['barangay'] . ' ' . $vol['municipality_city'] ?></td>
                                            <td><?= $vol['_from'] ?></td>
                                            <td><?= $vol['_to'] ?></td>
                                            <td><?= $vol['hours'] ?></td>
                                            <td><?= $vol['position'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>


        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED<i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS <br> (Write in full)</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>NUMBER OF HOURS</th>
                                        <th>Type of LD ( Managerial/ Supervisory/Technical/etc)</th>
                                        <th> CONDUCTED/ SPONSORED BY                                                               (Write in full)</th>
                                    </tr>
                                    <?php if(empty($get_trainings)): ?>
                                        <tr>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach($get_trainings as $train): ?>
                                        <tr>
                                            <td><?= $train['title'] ?></td>
                                            <td><?= $train['_from'] ?></td>
                                            <td><?= $train['_to'] ?></td>
                                            <td><?= $train['hours'] ?></td>
                                            <td><?= $train['type'] ?></td>
                                            <td><?= $train['sponsored'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>






        <div class="col-md-12 p-2 float-sm-start">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header" data-bs-toggle="collapse"
                            data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                            aria-controls="collapseSchoolInfo">
                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                            SPECIAL SKILL AND HOBBIES
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                        <?php if(empty($get_skills)): ?>
                                            <tr>
                                                <td class="text-center fw-bold">N/A</td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach($get_skills as $skill): ?>
                                            <tr>
                                                <td><?= $skill['special_skill'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>

                                </div>
                            </div>
                            
                        </div>
                        <!-- End Card Body -->
                    </div>
                    <!-- End card -->
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header" data-bs-toggle="collapse"
                            data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                            aria-controls="collapseSchoolInfo">
                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                            NON-ACADEMIC DISTINCTIONS
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                        <?php if(empty($get_distinctions)): ?>
                                            <tr>
                                                <td class="text-center fw-bold"></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach($get_distinctions as $recog): ?>
                                            <tr>
                                                <td><?= $recog['award_desc'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>

                                </div>
                            </div>
                            
                        </div>
                        <!-- End Card Body -->
                    </div>
                    <!-- End card -->
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header" data-bs-toggle="collapse"
                            data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                            aria-controls="collapseSchoolInfo">
                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                            MEMBERSHIP IN ORGANIZATION
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                    <?php if(empty($get_membership)): ?>
                                            <tr>
                                                <td class="text-center fw-bold"></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach($get_membership as $member): ?>
                                            <tr>
                                                <td><?= $member['assoc_name'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>

                                </div>
                            </div>
                            
                        </div>
                        <!-- End Card Body -->
                    </div>
                    <!-- End card -->
                </div>

            </div>
           
        </div>






        <div class="col-md-12 p-2 float-sm-start">
            <div class="card">
                <div class="card-header" data-bs-toggle="collapse"
                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                    aria-controls="collapseSchoolInfo">
                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                    OTHER INFORMATION <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h6>REFERENCES</h6>
                        <div class="col-md-8 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>NAME</th>
                                        <th>ADDRESS</th>
                                        <th>TEL.NO</th>
                                    </tr>
                                    <?php if(empty($get_ref)): ?>
                                        <tr>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                            <td class="text-center fw-bold">N/A</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach($get_ref as $ref): ?>
                                        <tr>
                                            <td><?= $ref['ref_lname'] . ', ' . $ref['ref_fname'] . ' ' . $ref['ref_mname'] . '.' ?></td>
                                            <td><?= $ref['barangay'] . ', ' . $ref['municipality_city'] ?></td>
                                            <td><?= $ref['ref_telno'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for=""> <strong> Government Issued. Please Indicate ID number and Date of Issuance</strong>   </label>
                            <label for="status" class="form-label">Government Issued ID: </label>
                            <input type="text" value="<?= $get_id['id_desc'] ?>" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">ID/License/Passport No.: </label>
                            <input type="text" value="<?= $get_id['idno'] ?>" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">Date/Place of Issuance:</label>
                            <input type="text" value="<?php echo $get_id['date_issued'] . '/' . $get_id['place_issued'] ?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    

                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>
    </div>
    <!-- end col- -->
    
    



                        <div class="row mb-2">
							<div class="d-flex justify-content-center">
                                <?php if(isset($get_stat_pds['pds_id'])): ?>
                                <form action="<?=site_url('Employee/update_pds');?>" method="post">
                                    <input type="hidden" name="" value ="<?= $get_stat_pds['pds_id'] ?>">
                                    <input type="hidden" name="stat" value="PENDING">
                                    <input type="submit" value=" UPDATE SUBMITTED PDS" class="btn btn-success" onclick="return confirm('You are about to send your personal data sheet in Human resource office.')">
                                </form>
                                <?php else: ?>

                                <form action="<?=site_url('Employee/submit_pds');?>" method="post">
                                    <input type="hidden" name="stat" value="PENDING">
                                    <input type="submit" value="SUBMIT PERSONAL DATA SHEET" class="btn btn-primary" onclick="return confirm('You are about to send your personal data sheet in Human resource office.')">
                                </form>
                                <?php endif; ?>
							</div>
                        </div>       
                    

                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR . 'views/emp/includes\footer.php'); ?>