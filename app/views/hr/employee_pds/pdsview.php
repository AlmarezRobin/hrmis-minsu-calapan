<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR?>/pds/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR?>/pds/pds.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    input[type=text],td{
        color:green;
        font-weight: bold;
    }
</style>
</head>
<?php require_once(APP_DIR .'views\hr\includes\head.php'); ?>
<body>
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
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">SURNAME</label>
                            <input type="text" value="<?=$emp_profile['l_name']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="<?=$emp_profile['f_name']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="<?=$emp_profile['m_name']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">NAME EX.</label>
                            <input type="text" value="<?=$emp_profile['name_ex']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">PLACE OF BIRTH</label>
                            <input type="text" value="<?=$emp_profile['birth_place_address_id']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">DATE OF BIRTH</label>
                            <input type="text" value="<?=$emp_profile['date_of_birth']?>" disabled class="form-control form-control-line">
                        </div>
                        
                        <div class="col-md-1 mb-2">
                            <label for="status" class="form-label">SEX</label>
                            <input type="text" value="<?=$emp_profile['sex']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">CIVIL STATUS</label>
                            <input type="text" value="<?=$emp_profile['civil_status']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-1 mb-2">
                            <label for="status" class="form-label">HEIGHT (m)</label>
                            <input type="text" value="<?=$emp_profile['height']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-1 mb-2">
                            <label for="status" class="form-label">WEIGHT (kg)</label>
                            <input type="text" value="<?=$emp_profile['weight']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">BLOOD TYPE</label>
                            <input type="text" value="<?=$emp_profile['blood_type']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                   

                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">GSIS ID NO.</label>
                            <input type="text" value="<?=$emp_profile['gsisno']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">PAG-IBIG ID NO.</label>
                            <input type="text" value="<?=$emp_profile['pag_ibig_no']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">HIL-HEALTH NO.</label>
                            <input type="text" value="<?=$emp_profile['philhealth_no']?>" disabled class="form-control form-control-line">
                        </div>
                    
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">SSS NO.</label>
                            <input type="text" value="<?=$emp_profile['sss_no']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">TIN NO.</label>
                            <input type="text" value="<?=$emp_profile['tin_no']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="status" class="form-label">AGENCY EMPLOYEE NO.</label>
                            <input type="text" value="<?=$emp_profile['agency_emp_no']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">CITIZENSHIP</label>
                            <input type="text" value="<?=$emp_profile['citizenship']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">IF HOLDER OF DUAL CITIZENSHIP </label>
                            <input type="text" value="<?=$emp_profile['ship_by']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">COUNTRY</label>
                            <input type="text" value="<?=$emp_profile['citizenship_country']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <hr>
                    <h6>RESIDENTIAL ADDRESS</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-5 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-1 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <br>
                    <h6>PERMANENT ADDRESS</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-5 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-1 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
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
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">SPOUSE'S SURNAME</label>
                            <input type="text" value="<?=$get_spouse['fname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">FIRST NAME </label>
                            <input type="text" value="<?=$get_spouse['mname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME </label>
                            <input type="text" value="<?=$get_spouse['lname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> NAME EXTENSION (JR, SR)</label>
                            <input type="text" value="<?=$get_spouse['name_ext']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">EMPLOYER/BUSINESS NAME</label>
                            <input type="text" value="<?=$get_spouse['occupation']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">BUSINESS ADDRESS </label>
                            <input type="text" value="<?=$get_spouse['bus_name']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label"> TELEPHONE NO.</label>
                            <input type="text" value="<?=$get_spouse['tel_num']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">FATHER'S SURNAME</label>
                            <input type="text" value="<?=$get_father['father_lname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> FIRST NAME</label>
                            <input type="text" value="<?=$get_father['father_fname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> MIDDLE NAME</label>
                            <input type="text" value="<?=$get_father['father_mname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> NAME EXTENSION (JR, SR)</label>
                            <input type="text" value="<?=$get_father['father_ex']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <hr>




                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">MOTHER'S MAIDEN NAME</label>
                            <input type="text" value="<?=$get_mother['maiden_fname'].' '.$get_mother['maiden_mname'].' '. $get_mother['maiden_lname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">SURNAME </label>
                            <input type="text" value="<?=$get_mother['lname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> FIRST NAME</label>
                            <input type="text" value="<?=$get_mother['maiden_fname']?>" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME </label>
                            <input type="text" value="<?=$get_mother['maiden_lname']?>" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    CHILD INFORMATION<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover mb-0">
                                                    <tr>
                                                        <th>Full name</th>
                                                        <th>Birthday</th>
                                                    </tr>
                                                    <tr>
                                                        <tbody>
                                                        <?php foreach($get_all_child as $child): ?>
                                                                <tr class="odd">
                                                                    <td><?=$child['fname']?></td>
                                                                    <td><?=$child['fname']?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </tr>
                                                </table>
                                            </div>
                                            

                                        </div>
                                    </div>
                                    
                                </div>
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
                                    <tr>
                                        <tbody>
                                            <?php foreach($get_educ_background as $educ): ?>
                                                <tr class="odd">
                                                    <td><?=$educ['level']?></td>
                                                    <td><?=$educ['school_name']?></td>
                                                    <td><?=$educ['degree']?></td>
                                                    <td><?=$educ['from_date']?></td>
                                                    <td><?=$educ['to_date']?></td>
                                                    <td><?=$educ['highest_level']?></td>
                                                    <td><?=$educ['year_graduated']?></td>
                                                    <td><?=$educ['honors_received']?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </tr>
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
                                        <tbody>
                                            <?php foreach($get_eligibility as $eligibility): ?>
                                                <tr class="odd">
                                                    <td><?=$eligibility['service']?></td>
                                                    <td><?=$eligibility['rating']?></td>
                                                    <td><?=$eligibility['date_conferment']?></td>
                                                    <td><?=$eligibility['place_conferment']?></td>
                                                    <td><?=$eligibility['license_num']?></td>
                                                    <td><?=$eligibility['validity']?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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
                                    <tbody>
                                            <?php foreach($get_experience as $experience): ?>
                                                <tr class="odd">
                                                    <td><?=$experience['_from']?></td>
                                                    <td><?=$experience['_to']?></td>
                                                    <td><?=$experience['company']?></td>
                                                    <td><?=$experience['monthly_salary']?></td>
                                                    <td><?=$experience['salary_grade']?></td>
                                                    <td><?=$experience['step_inc']?></td>
                                                    <td><?=$experience['appointment_status']?></td>
                                                    <td><?=$experience['government']?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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
                                        <th>NAME</th>
                                        <th>ADDRESS OF ORGANIZATION</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>NUMBER OF HOURS</th>
                                        <th>POSITION / NATURE OF WORK</th>
                                    </tr>
                                    <tbody>
                                            <?php foreach($get_voluntary as $voluntary): ?>
                                                <tr class="odd">
                                                    <td><?=$voluntary['name']?></td>
                                                    <td><?=$voluntary['org_address']?></td>
                                                    <td><?=$voluntary['_from']?></td>
                                                    <td><?=$voluntary['_to']?></td>
                                                    <td><?=$voluntary['hours']?></td>
                                                    <td><?=$voluntary['position']?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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
                    OTHER INFORMATION <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    SPECIAL SKILLS AND HOBBIES<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <table class="table table-bordered table-hover mb-0">
                                                <?php foreach($get_skill_hobby as $skills): ?>
                                                    <tr class="odd">
                                                        <td><?=$skills['special_skill']?></td>
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
                                    NON-ACADEMIC DISTINCTION/RECOGNITION<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <table class="table table-bordered table-hover mb-0">
                                                <?php foreach($get_recognition as $recognition): ?>
                                                    <tr class="odd">
                                                        <td><?=$recognition['award_desc']?></td>
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
                                    MEMBERSHIP IN ASSOCIATION/ORGANIZATION<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <table class="table table-bordered table-hover mb-0">
                                                <?php foreach($get_membership as $membership): ?>
                                                    <tr class="odd">
                                                        <td><?=$membership['assoc_name']?></td>
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
                    <div class="row border border-dark m-1">
                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="" class="form-label">34. Are you related by consangguity of affinity to the appointing or recommending authority, or the chief of bureau or office or to the person who has immediate supervision over you in the office Bureau or department where you will be appointed.</label>
                            <label for="">a. within the third degree?  <strong> <?=$get_rel_info['third_degree']?>  </strong> </label>
                            <br>
                            <label for="">b. within the fourth degree (for Local Governtment Unit-career Employee's)? <strong> <?=$get_rel_info['fourth_degree']?>  </strong> </label>
                            <br>
                            <label for="">
                                <?=$get_rel_info['relative_details']?>
                            </label>
                        </div>
                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">35. a. Have you ever been found guilty of any administrative offense? <strong><?= $get_violation_info['admin_offense']?></strong> </label>
                            
                            <label for=""><?= $get_violation_info['offense_desc']?></label>
                            <br>

                            <label for="">b. Have you been criminally charged before any court? <strong><?= $get_violation_info['criminal_charged']?></strong></label>
                            
                            <br>
                            <?php if($get_violation_info['criminal_charged'] === 'YES'): ?>
                            <div class="col-md-12" onchange='_35byes()' id="35bdetails">
                                <label for="">If yes, give details:</label>
                                <input type="text" name="detail"  class="form-control" value="<?= $get_violation_info['crime_details']?>" >
                                <label for="">Date Filed: </label>
                                <input type="date" name="35bfiled" class="form-control" value="<?= $get_violation_info['date_crime_filed']?>">
                                <label for="">Status of Case/s:</label>
                                <input type="text" name="35bstatus"  class="form-control" value="<?= $get_violation_info['criminal_case_status']?>" >
                            </div>
                            <?php else: ?>
                            <div class="col-md-12" onchange='_35byes()' id="35bdetails"  hidden>
                                <label for="">If yes, give details:</label>
                                <input type="text" name="detail"  class="form-control" >
                                <label for="">Date Filed: </label>
                                <input type="date" name="35bfiled" class="form-control" >
                                <label for="">Status of Case/s:</label>
                                <input type="text" name="35bstatus"  class="form-control"  >
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal? <strong><?= $get_conviction_info['convicted'] ?></strong></label>
                            <br>
                            <label for="">If yes, give details:</label><strong for=""><?= $get_conviction_info['conviction_details'] ?></strong>
                        </div>
                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">37. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector? <strong><?= $get_separation_info['separated_from_service'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes give details: <strong><?= $get_separation_info['separation_desc'] ?></strong></label>
                            <input type="text" name="37txtyes" id="37txt" onchange='_37yes()' class="form-control" hidden>
                        </div>
                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)? <strong><?= $get_candidacy_info['political_candidate'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes give details: <strong><?= $get_candidacy_info['candidacy_details'] ?></strong></label>
                            
                            <label for="">b. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?<strong><?= $get_candidacy_info['resigned_frm_gov'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes give details: <strong><?= $get_candidacy_info['resignation_desc'] ?></strong></label>
                        </div>

                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">39. Have you acquired the status of an immigrant or permanent resident of another country? <strong><?= $get_immigrant_info['foreign_residency'] ?></strong></label>
                            <br>
                            <label for="">If yes, give details: <strong><?= $get_immigrant_info['residency_details'] ?></strong> </label>
                        </div>


                        <div class="form-group col-md-6 m-t-10 mb-2">
                            <label for="">40. Pusuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2020 (RA 8972), please answer the following items:</label>
                            <label for="">a. Are you a member of any indigenous group? <strong><?= $get_previlage_info['member_of_ig'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes, please specify: <strong><?= $get_previlage_info['ig_desc'] ?></strong></label>
                            <input type="text" name="40atxtyes" id="40atxt" onchange='_40ayes()' class="form-control" hidden>
                            <br>
                            <label for="">b. Are you a person with disability?<strong><?= $get_previlage_info['pwd'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes, please specify ID No: <strong><?= $get_previlage_info['pwd_id_no'] ?></strong></label>
                            <input type="text" name="40btxtyes" id="40btxt" onchange='_40byes()' class="form-control" hidden>
                            <br>
                            <label for="">c. Are you a solo parent?<strong><?= $get_previlage_info['solo_parent'] ?></strong></label>
                            <br>
                            
                            <label for="">If yes, please specify ID No:<strong><?= $get_previlage_info['solo_parent_id_number'] ?></strong></label>
                            <input type="text" name="40ctxtyes" id="40ctxt" onchange='_40cyes()' class="form-control" hidden>
                        </div>








                    </div>
                    <div class="row">
                        <h6>REFERENCES</h6>
                        <div class="col-md-8 mb-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <th>FULL NAME</th>
                                        <th>ADDRESS</th>
                                        <th>TEL.NO</th>
                                    </tr>
                                        <?php foreach($get_references as $references): ?>
                                            <tr class="odd">
                                                <td><?=$references['ref_fname'] . $references['ref_mname'] .$references['ref_lname']?></td>
                                                <td><?=$references['ref_add']?></td>
                                                <td><?=$references['ref_telno']?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for=""> <strong> Government Issued. Please Indicate ID number and Date of Issuance</strong>   </label>
                            <label for="status" class="form-label">Government Issued ID: </label>
                            <input type="text" value="<?=$get_gov_id['id_desc']?>" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">ID/License/Passport No.: </label>
                            <input type="text" value="<?=$get_gov_id['idno']?>" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">Date/Place of Issuance:</label>
                            <input type="text" value="<?=$get_gov_id['date_issued'] .' '.'/'.' '. $get_gov_id['place_issued']?>" disabled class="form-control form-control-line">
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
        <div class="d-flex justify-content-center col-md-6 " >
            <form action="<?=site_url('Hr/approved');?>" method="post">
                <input type="hidden" name="id" value="<?= $get_id['user_id'] ?>" >
                <input type="hidden" name="stat" value="APPROVED">
                <input type="hidden" name="issue" value="<?= $get_id['date_submitted'] ?>">
                <input type="submit" name="submit" value="APPROVE" class="btn btn-primary btn-lg btn-block" onclick="return confirm('You are about to Approved this personal data sheet.')">
            </form>
        </div>
        <div class="d-flex justify-content-center col-md-6" >
        
            <button class="btn btn-warning btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#comments">REJECT</button>
        </div>
    </div>       
    <div class="modal fade" id="comments">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Comment</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=site_url('Hr/rejected');?>" method="post">
                        <input type="hidden" name="id" value="<?= $get_id['user_id'] ?>" >
                        <input type="hidden" name="stat" value="REJECT">
                        <input type="hidden" name="issue" value="<?= $get_id['date_submitted'] ?>">

                        <input type="text" name="comment" class="form-control form-control-line mb-2" placeholder="Enter your comment" required>
                        <input type="submit" name="submit" value="REJECT" class="btn btn-warning float-sm-end" onclick="return confirm('You are about to Approved this personal data sheet.')">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





