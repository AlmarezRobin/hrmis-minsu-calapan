<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR .'views/emp/includes\head.php'); ?>
<link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR?>/pds/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR?>/pds/pds.css">
<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR .'views/emp/includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR .'views/emp/includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Status: 
                        <strong>
                            <?php if(isset($get_stat_pds['pds_id'])): ?>
                                <?php echo $get_stat_pds['status_of_pds']?>  
                            <?php endif; ?>
                        </strong>
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
                        <div class="table-responsive p-3">
                            <form action="">
                                <table id="pds-table">

                                    <tbody class="table-header">
                                        <tr>
                                            <td colspan="12" class="h5"><i><b>CS Form No. 212</b></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" class="align-top" style="max-height: 12px;">
                                                <i><b>Revised 2017</b></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" class="text-center"><h1><b>PERSONAL DATA SHEET</b></h1></td>
                                        </tr>
                                        <tr>
                                            <td colspan="12"><i><b>WARNING: Any misrepresentation main in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administative/criminal case/s against the person concerned.</b></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="12"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM</b></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="9">Print legibly. Tick appropriate boxes ( <input type="checkbox" checked> ) ad use seperate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
                                            <td colspan="1" style="border:1px solid#000b;background:#757575;width:8%;"><small>1. CS ID No.</small></td>
                                            <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill up. For CSC use only)</small></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">2.</span> SURNAME
                                            </td>
                                            <td colspan="11"><?= $emp_profile['l_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
                                            <td colspan="9"><?= $emp_profile['f_name'] ?> </td>
                                            <td colspan="2" class="align-top"><small>NAME EXTENSION (JR.,SR)</small> &nbsp; <?= $emp_profile['name_ex'] ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
                                            <td colspan="11"> <?= $emp_profile['m_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">3.</span> DATE OF BIRTH<br>
                                                <span class="count"></span> (mm/dd/yyyy)
                                            </td>
                                            <td colspan="5"> <?= $emp_profile['date_of_birth'] ?> </td>
                                            <td colspan="3" class="s-label align-top border-bottom-0">
                                                <span class="count">16.</span> CITIZENSHIP
                                            </td>
                                            <td colspan="3" rowspan="2">
                                                <input type="checkbox" name="" id=""><label for="">Filipino</label>
                                                <input type="checkbox" name="" id=""><label for="">Dual Citizenship</label>
                                                <br>
                                                <input type="checkbox" name="" id=""><label for="">by birth</label>
                                                <input type="checkbox" name="" id=""><label for="">by naturalization</label>
                                                <br>
                                                <label for="">If YES, Pls indicate country</label>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0"></td>
                                            <td colspan="5"></td>
                                            <td colspan="3" class="s-label align-top border-0 text-center small">
                                                If holder of dual citizenship,
                                            </td>
                                            <td colspan="3">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OR BIRTH</td>
                                            <td colspan="5"></td>
                                            <td colspan="3" class="s-label align-top border-0 text-center small"> please indicate the details.</td>
                                            <td colspan="3" rowspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
                                            <td colspan="5"></td>
                                            <td colspan="3" class="s-label align-top border-0"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label align-top border-bottom-0 small">
                                                <span class="count">17.</span> RESIDENTIAL ADDRESS
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label align-top border-0"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label align-top border-0"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label border-0 text-center">
                                                ZIP CODE
                                            </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label border-0"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label border-0"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
                                            <td colspan="5"></td>
                                            <td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
                                            <td colspan="4"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">22.</span> SPOUSE SURNAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3" class="s-label">
                                                <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
                                            </td>
                                            <td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> FIRST NAME
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="1" class="align-top s-label">
                                                <small>
                                                    NAME EXTENSION (JR.,SR)
                                                </small>
                                            </td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> MIDDLE NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> OCCUPATION
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> EMPLOYER/BUSINESS NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> BUSINESS ADDRESS
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> TELEPHONE NO.
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">24.</span> FATHER'S SURNAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> FIRST NAME
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="1" class="align-top s-label">
                                                <small>
                                                    NAME EXTENSION (JR.,SR)
                                                </small>
                                            </td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> MIDDLE NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">25.</span> MOTHERS MAIDEN NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> SURNAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> FIRST NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="3"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label border-0">
                                                <span class="count"></span> MIDDLE NAME
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="6" class="s-label text-danger text-center"><i><b>(Continue on seperate sheet if necessary)</b></i></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="1" class="s-label border-bottom-0">
                                                <span class="count">26.</span>
                                                <span class="d-block text-center">LEVEL</span>
                                            </td>
                                            <td colspan="4" class="s-label border-bottom-0">
                                                NAME OF SCHOOL<br>(Write in full)
                                            </td>
                                            <td colspan="2" class="s-label border-bottom-0">
                                                BASIC EDUCATION/DEGREE/COURSE<br>
                                                (Write in full)
                                            </td>
                                            <td colspan="2" class="s-label border-bottom-0">
                                                PERIOD OF ATTENDANCE
                                            </td>
                                            <td colspan="1" class="s-label border-bottom-0">HIGHEST LEVEL/UNITS EARNED<br>(If not graduated)</td>
                                            <td colspan="1" class="s-label border-bottom-0">YEAR GRADUATED</td>
                                            <td colspan="1" class="s-label border-bottom-0">SCHOLARSHIP/<br>ACADEMIC<br>HONORS<br>RECEIVED</td>
                                        </tr>
                                        <tr class="text-center" style="margin-top: -20px;">
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="4" class="s-label border-top-0"></td>
                                            <td colspan="2" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label">From</td>
                                            <td colspan="1" class="s-label">To</td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> ELEMENTARY
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> SECONDARY
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> VOCATIONAL/<br>
                                                <span class="count"></span> TRADE COURSE
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> COLLEGE
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="s-label">
                                                <span class="count"></span> GRADUATE STUDIES
                                            </td>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                                            <td colspan="6"></td>
                                            <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- End of Page 1 -->

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">IV.  CIVIL SERVICE ELIGIBILITY</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="5" class="s-label border-bottom-0" style="width:30%">
                                                <span class="count float-left">27.</span>
                                                CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
                                                BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                                            </td>
                                            <td colspan="1" class="s-label border-bottom-0">RATING<br>(If Applicable)</td>
                                            <td colspan="2" class="s-label border-bottom-0">DATE OF EXAMINATION / CONFERMENT</td>
                                            <td colspan="2" class="s-label border-bottom-0">PLACE OF EXAMINATION / CONFERMENT</td>
                                            <td colspan="2" class="s-label border-bottom-0">LICENSE<br>(if applicable)</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="5" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="2" class="s-label border-top-0"></td>
                                            <td colspan="2" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label">NUMBER</td>
                                            <td colspan="1" class="s-label">Date of Validity</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">
                                                V.  WORK EXPERIENCE<br>
                                                <small><i>(Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</i></small>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="1" class="s-label border-bottom-0" style="width: 20%;">
                                                <span class="count float-left">28.</span>
                                                INCLUSIVE DATES<br>(mm/dd/yyyy)
                                                
                                            </td>
                                            <td colspan="5" class="s-label border-bottom-0">
                                                POSITION TITLE<br>
                                                Write in full/Do not abbreviate)
                                            </td>
                                            <td colspan="2" class="s-label border-bottom-0">
                                                DEPARTMENT/AGENCY/OFFICE/COMPANY<br>
                                                (Write in full/Do not abbreviate)
                                            </td>
                                            <td colspan="1" class="s-label border-bottom-0">MONTHLY<br>SALARY</td>
                                            <td colspan="1" class="s-label border-bottom-0"><small>SALARY/ JOB/ PAY<br>GRADE (if applicable)& STEP  (Format "00-0")/ INCREMENT</small></td>
                                            <td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
                                            <td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
                                                <small>(Y/ N)</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="p-0">
                                            <table class="w-100 border-0">
                                                <tbody class="border-0">
                                                    <tr class="text-center">
                                                        <td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
                                                        <td class="s-label border-top-0 border-right-0 border-bottom-0" style="width: 50%;">To</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            <td colspan="5" class="s-label border-top-0"></td>
                                            <td colspan="2" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="p-0">
                                            <table class="w-100 border-0">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="border-0 border-bottom-0" style="width: 50%;"></td>
                                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="p-0">
                                            <table class="w-100 border-0">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="border-0 border-bottom-0" style="width: 50%;"></td>
                                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="p-0">
                                            <table class="w-100 border-0">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="border-0 border-bottom-0" style="width: 50%;"></td>
                                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="p-0">
                                            <table class="w-100 border-0">
                                                <tbody class="border-0">
                                                    <tr>
                                                        <td class="border-0 border-bottom-0" style="width: 50%;"></td>
                                                        <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            <td colspan="5"></td>
                                            <td colspan="2"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
                                            <td colspan="6"></td>
                                            <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- End of Page 2 -->

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="6" class="s-label border-bottom-0">
                                                <span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>
                                                (Write in full)
                                            </td>
                                            <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                                            <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                                            <td colspan="3" class="s-label border-bottom-0">POSITION / NATURE OF WORK</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="6" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label">From</td>
                                            <td colspan="1" class="s-label">To</td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="3" class="s-label border-top-0"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S<br>
                                                <small><i>(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</i></small>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="6" class="s-label border-bottom-0">
                                                <span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS<br>
                                                (Write in full)
                                            </td>
                                            <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
                                            <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
                                            <td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/ Supervisory/Technical/etc)</td>
                                            <td colspan="2" class="s-label border-bottom-0">CONDUCTED/ SPONSORED BY<br>(Write in full)</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="6" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label">From</td>
                                            <td colspan="1" class="s-label">To</td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="1" class="s-label border-top-0"></td>
                                            <td colspan="2" class="s-label border-top-0"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="1"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator">VIII.  OTHER INFORMATION</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="4" class="s-label">
                                                <span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
                                            </td>
                                            <td colspan="4" class="s-label">
                                                <span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write in full)
                                            </td>
                                            <td colspan="4" class="s-label">
                                                <span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write in full)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                            <td colspan="4"></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
                                                <i>(Continue on seperate sheet if necessary)</i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
                                            <td colspan="3"></td>
                                            <td colspan="1" class="text-center"><i><b>DATE</b></i></td>
                                            <td colspan="4"></td>
                                        </tr>
                                    </tbody>

                                    <!-- End of Page 3 -->

                                    <!-- Q1 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="12" class="separator"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">34.</span> Are you related by consanguinity or affinity to the appointing or recommending authority, or to the<br>
                                                <span class="count"></span>chief of bureau or office or to the person who has immediate supervision over you in the Office,<br>
                                                <span class="count"></span>Bureau or Department where you will beapppointed,<br>
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>a. within the third degree?<br>
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>b. within the fourth degree (for Local Government Unit - Career Employees)?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2">If YES, give details:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q2 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">35.</span> a. Have you ever been found guilty of any administrative offense?
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> b. within the fourth degree (for Local Government Unit - Career Employees)?
                                            </td>
                                            <td colspan="2" style="border-top-width: 1px !important;"></td>
                                            <td colspan="3" style="border-top-width: 1px !important;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">Date Filed:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">Status of Case/s:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q3 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">36.</span> Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q4 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">37.</span> Have you ever been separated from the service in any of the following modes: resignation,<br>
                                                
                                                
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased<br>
                                            </td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> out (abolition) in the public or private sector?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q5 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">38.</span> a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span><br>
                                            </td>
                                            <td colspan="2">If YES, give details:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> b. Have you resigned from the government service during the three (3)-month period before the last
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> election to promote/actively campaign for a national or local candidate?
                                            </td>
                                            <td colspan="2">If YES, give details:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q6 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">39.</span> Have you acquired the status of an immigrant or permanent resident of another country?
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2">if YES, give details (country):</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q7 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA<br>
                                                <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>a. Are you a member of any indigenous group?<br>
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span><br>
                                            </td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>b. Are you a person with disability?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>c. Are you a solo parent?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- End of Page 4 -->

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="8" class="s-label">
                                                <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by consanguinity or affinity to applicant /appointee)</span>
                                            </td>
                                            <td colspan="4" rowspan="5" class="p-5">
                                                <table class="w-75 mx-auto border-0">
                                                    <tbody class="border-0">
                                                        <tr>
                                                            <td class="text-center p-3">ID picture taken within the last  6 months3.5 cm. X 4.5 cm(passport size)With full and handwrittenname tag and signature overprinted nameComputer generated or photocopied picture is not acceptable</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-0 text-muted lead text-center">PHOTO</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="4" class="s-label">NAME</td>
                                            <td colspan="2" class="s-label">ADDRESS</td>
                                            <td colspan="2" class="s-label">TEL. NO.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">
                                                <span class="count">42.</span> I declare under oath that I have personally accomplished this Personal Data Sheet which is a true correct and<br><span class="count"></span> complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the<br><span class="count"></span> Philippines. I authorize the agency head / authorized representative t verify validate the contents stated herein.<br><span class="count"></span> I agree that any misrepresentation made in this document and its attachments shall cause the filing of<br><span class="count"></span> administrative/criminal case/s against me.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" class="border-0 p-0">
                                                <table class="border-0 w-100">
                                                    <tbody class="border-0">
                                                        <tr>
                                                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                                                <table class="border-0 w-100">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="s-label py-2">Government Issued ID(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)<br>                               PLEASE INDICATE ID Number and Date of Issuance</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">Government Issued ID:</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">ID/License/Passport No.:</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">Date/Place of Issuance:</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                                                <table class="border-0 w-100">
                                                                    <tbody class="border-0 text-center">
                                                                        <tr>
                                                                            <td class="py-4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label"><small>Signature (Sign inside the box)</small></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label"><small>Date Accomplished</small></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td colspan="4" class="border-0 p-3">
                                                                <table class="border-0 w-100">
                                                                    <tbody class="border-0">
                                                                        <tr>
                                                                            <td class="py-5"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label text-center">Right Thumbmark</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                    <tbody class="table-body">
                                                        <tr>
                                                            <td colspan="12" class="text-center py-2">
                                                                SUBSCRIBED AND SWORN to before me this <input type="text" class="border-top-0 border-left-0 border-right-0" style="width: 25%;"> , affiant exhibiting his/her validly issued government ID as indicated above.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" class="py-5">
                                                                <table class="w-25 mx-auto">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="py-5"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label text-center">Person Administering Oath</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <!-- End of References -->



                                </table>
                            </form>
                        </div>
                        
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
                <?php require_once(APP_DIR .'views/emp/includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR .'views/emp/includes\footer.php'); ?>


                                                