<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR?>/pds/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR?>/pds/pds.css">
    <title>Document</title>
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
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">SURNAME</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label">FIRST NAME</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-2">
                            <label for="status" class="form-label">MIDDLE NAME</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">NAME EX.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">DATE OF BIRTH</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">PLACE OF BIRTH</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">SEX</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">CIVIL STATUS</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">HEIGHT (m)</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">WEIGHT (kg)</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">BLOOD TYPE</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">GSIS ID NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">PAG-IBIG ID NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">HIL-HEALTH NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">SSS NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">TIN NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">AGENCY EMPLOYEE NO.</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">CITIZENSHIP</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">IF HOLDER OF DUAL CITIZENSHIP </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="status" class="form-label">COUNTRY</label>
                            <input type="text" value="" disabled class="form-control form-control-line">
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
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
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
                        <div class="col-md-6 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"></label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label"> </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <table class="table table-bordered table-hover mb-0">
                                <tr>
                                    <th>NAME OF CHILDREN</th>
                                    <th>DATA OF BIRTH</th>
                                </tr>
                                <tr>
                                    <td>sample name</td>
                                    <td>sample date</td>
                                </tr>
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
                                    <tr>
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
                                    <tr>
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
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header" data-bs-toggle="collapse"
                            data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                            aria-controls="collapseSchoolInfo">
                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                        <tr>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
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
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                        <tr>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
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
                            <i class="fa fa-caret-down pull-right"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <table class="table table-bordered table-hover mb-0">
                                        <tr>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for=""> <strong> Government Issued. Please Indicate ID number and Date of Issuance</strong>   </label>
                            <label for="status" class="form-label">Government Issued ID: </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">ID/License/Passport No.: </label>
                            <input type="text" value="" disabled class="form-control form-control-line">
                            <label for="status" class="form-label">Date/Place of Issuance:</label>
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
                    PERSONAL INFORMATION <i class="fa fa-caret-down pull-right"></i>
                </div>
                <div class="card-body">
                    
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End card -->
        </div>
    </div>
    <!-- end col- -->
    
    

    <div class="row mb-2">
        <div class="d-flex justify-content-center mb-3" >
            <form action="<?=site_url('Hr/approved');?>" method="post">
                <input type="hidden" name="id" value="<?= $get_id['user_id'] ?>" >
                <input type="hidden" name="stat" value="APPROVED">
                <input type="hidden" name="issue" value="<?= $get_id['date_submitted'] ?>">
                <input type="submit" name="submit" value="APPROVE" class="btn btn-primary" onclick="return confirm('You are about to Approved this personal data sheet.')">
            </form>
        </div>
        <div class="d-flex justify-content-center mb-3" >
            <form action="<?=site_url('Hr/rejected');?>" method="post">
                <input type="hidden" name="id" value="<?= $get_id['user_id'] ?>" >
                <input type="hidden" name="stat" value="REJECT">
                <input type="hidden" name="issue" value="<?= $get_id['date_submitted'] ?>">
                <input type="submit" name="submit" value="REJECT" class="btn btn-warning" onclick="return confirm('You are about to Approved this personal data sheet.')">
            </form>
        </div>
    </div>       
</body>
</html>



