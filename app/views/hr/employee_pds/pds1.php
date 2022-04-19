<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('C:\xampp\htdocs\a2\app\views\hr\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\hr\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('C:\xampp\htdocs\a2\app\views\hr\includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Program </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Program <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>

                        <!-- Form -->
                        <form action="" method="post" class="outer-form" autocomplete="off" id="student-validate">


                            <!-- col -->
                            <div class="col-md-12 float-sm-start">

                                <div class="col-md-6 p-2 float-sm-start">
                                    <div class="card">
                                        <div class="card-header" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                            aria-controls="collapseSchoolInfo">
                                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                            School Information<i class="fa fa-caret-down pull-right"></i>
                                        </div>
                                        <div class="card-body accordion-collapse collapse show"
                                            id="collapseSchoolInfo-disable">


                                            <div class="col-md-12 mb-2">
                                                <label for="status" class="form-label">Status*</label>
                                                <select class="form-control form-control-sm" name="ENROLL_STATUS"
                                                    id="status" data-toggle="tooltip" data-placement="right"
                                                    title="New student or Transferee" required>
                                                    <option value="NEW">New</option>
                                                    <option value="TRANSFEREE">Transferee</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    New Student or Transferee
                                                </small>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="yearlevel" class="form-label">Year Level*</label>
                                                <select class="form-control form-control-sm" name="YEARLEVEL"
                                                    id="yearlevel" data-toggle="tooltip" data-placement="right"
                                                    title="First year is default for new students" required>
                                                    <option value="1">First</option>
                                                    <option value="2">Second</option>
                                                    <option value="3">Third</option>
                                                    <option value="4">Fourth</option>
                                                    <option value="5">Fifth</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    First year is default for new students
                                                </small>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="program" class="form-label">First Choice Program*</label>
                                                <select class="form-control form-control-sm" name="PROGID" id="program"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Choose you realy like." required>
                                                    <option></option>

                                                </select>
                                                <small class="form-text text-muted">
                                                    Please choose your preferred Program.
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="program2" class="form-label">Second Choice (*Non-board
                                                    Program)*</label>
                                                <select class="form-control form-control-sm" name="PROGID2"
                                                    id="program2" data-toggle="tooltip" data-placement="right"
                                                    title="Second Choice" required>
                                                    <option></option>

                                                </select>
                                                <small class="form-text text-muted">
                                                    This will be your second choice if you're not qualified on your
                                                    first Program choice.
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="term" class="form-label">Term*</label>

                                                <select class="form-control form-control-sm" name="STUDSEM" id="term"
                                                    required>
                                                    <option value="1">First</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    Semester
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="ics" class="form-label">Internet Connectivity
                                                    Status*</label>
                                                <select class="form-control form-control-sm"
                                                    name="INTERNET_CONNECTIVITY_STATUS" id="ics" required>
                                                    <option value="full">Full Access</option>
                                                    <option value="limited">Limited Access</option>
                                                    <option value="no">No Access</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    Basis of your Mode of Learning
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="pml" class="form-label">Preferred Mode of Learning*</label>
                                                <select class="form-control form-control-sm"
                                                    name="PREFERRED_MODE_OF_LEARNING" id="pml" required>
                                                    <option value="LMS">Online Class</option>
                                                    <option value="MODULAR">Modular</option>
                                                    <option value="BLENDED">Blended Online and Modular</option>
                                                    <option value="F2F">Face to Face</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    This will apply to your all courses.
                                                </small>
                                            </div>


                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End card -->
                                </div>

                                <div class="col-md-6 p-2 float-sm-start">
                                    <div class="card">
                                        <div class="card-header" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSchool" aria-expanded="true"
                                            aria-controls="collapseSchool">
                                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                            School Attended<i class="fa fa-caret-down pull-right"></i>
                                        </div>
                                        <div class="card-body accordion-collapse collapse show"
                                            id="collapseSchool-disable">



                                            <div class="col-md-12 mb-2">
                                                <label for="elem" class="form-label">Elementary*</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="ELEMSCHOOL" id="elem" placeholder="" maxlength="255"
                                                    size="255" data-toggle="tooltip" data-placement="right"
                                                    title="Primary School" required>
                                                <small class="form-text text-muted">
                                                    Write in full
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="elemyear" class="form-label">School Year*</label>
                                                <input type="text" class="form-control form-control-sm" name="ELEMSY"
                                                    id="elemyear" placeholder="" maxlength="9" size="9"
                                                    data-toggle="tooltip" data-placement="right" title="School Year"
                                                    required>
                                                <small class="form-text text-muted">
                                                    ex: 2000-2001
                                                </small>
                                            </div>
                                            <hr>
                                            <div class="col-md-12 mb-2">
                                                <label for="hs" class="form-label">High School*</label>
                                                <input type="text" class="form-control form-control-sm" name="HSSCHOOL"
                                                    id="hs" placeholder="" maxlength="255" size="255"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Secondary School" required>
                                                <small class="form-text text-muted">
                                                    Write in full
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="hsyear" class="form-label">School Year*</label>
                                                <input type="text" class="form-control form-control-sm" name="HSSY"
                                                    id="hsyear" placeholder="" maxlength="9" size="9"
                                                    data-toggle="tooltip" data-placement="right" title="School Year"
                                                    required>
                                                <small class="form-text text-muted">
                                                    ex: 2011-2012
                                                </small>
                                            </div>
                                            <hr>
                                            <div class="col-md-12 mb-2">
                                                <label for="col" class="form-label">College</label>
                                                <input type="text" class="form-control form-control-sm" maxlength="255"
                                                    size="255" name="COLLEGE" id="col" placeholder=""
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Last School Attended">
                                                <small class="form-text text-muted">
                                                    Last School Attended (Optional)
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="colyear" class="form-label">School Year</label>
                                                <input type="text" class="form-control form-control-sm" maxlength="9"
                                                    size="9" name="COLLEGESY" id="colyear" placeholder=""
                                                    data-toggle="tooltip" data-placement="right" title="Academic Year">
                                                <small class="form-text text-muted">
                                                    ex: 2011-2012 (Optional)
                                                </small>
                                            </div>



                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End card -->
                                </div>

                            </div>
                            <!-- end col- -->


                            <!-- col -->
                            <div class="col-md-12 float-sm-start">

                                <div class="col-md-6 p-2 float-sm-start">
                                    <div class="card">
                                        <div class="card-header" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePersonal" aria-expanded="true"
                                            aria-controls="collapsePersonal">
                                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                            Personal Information<i class="fa fa-caret-down pull-right"></i>
                                        </div>
                                        <div class="card-body accordion-collapse collapse show"
                                            id="collapsePersonal-disable">


                                            <!-- Name -->
                                            <div class="col-md-12 mb-2">
                                                <label for="firstname" class="form-label">First Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="STUDNAM3"
                                                    id="firstname" placeholder="" maxlength="50" size="50"
                                                    data-toggle="tooltip" data-placement="right" title="First Name"
                                                    required>
                                                <small class="form-text text-muted">
                                                    Given Name
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="midddlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control form-control-sm" name="STUDNAM2"
                                                    id="midddlename" placeholder="" maxlength="30" size="30"
                                                    data-toggle="tooltip" data-placement="right" title="Middle Name">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="lastname" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="STUDNAM1"
                                                    id="lastname" placeholder="" maxlength="30" size="30"
                                                    data-toggle="tooltip" data-placement="right" title="Last Name"
                                                    required>
                                                <small class="form-text text-muted">
                                                    Family Name
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="nameex" class="form-label">Name extension </label>
                                                <input type="text" class="form-control form-control-sm" name="STUDNAM4"
                                                    id="nameex" placeholder="" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name Extension">
                                                <small class="form-text text-muted">
                                                    ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                </small>
                                            </div>
                                            <!-- end name -->

                                            <div class="col-md-12 mb-2">
                                                <label for="gender" class="form-label">Gender*</label>
                                                <select class="form-control form-control-sm" name="GENDER" id="gender"
                                                    data-toggle="tooltip" data-placement="right" title="Gender"
                                                    required>
                                                    <option value="MALE">Male</option>
                                                    <option value="FEMALE">Female</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="civilstatus" class="form-label">Civil Status*</label>
                                                <select class="form-control form-control-sm" name="STUDCIVILSTAT"
                                                    id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                    title="Civil Status" required>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="seperated">Separated</option>
                                                    <option value="widower">Widow/er</option>
                                                </select>
                                            </div>


                                            <div class="col-md-12 mb-2">
                                                <label for="birthdate" class="form-label">Birthdate*</label>
                                                <input type="date" class="form-control form-control-sm" name="STUDBDAY"
                                                    id="birthdate" value="" data-date-format="dd/mm/yyyy"
                                                    min="1960-12-31" max="2020-12-31" data-toggle="tooltip"
                                                    data-placement="right" title="Birthdate" required />
                                                <small class="form-text text-muted">
                                                    ex: 23/12/2000 (For December 23, 2000)
                                                </small>
                                            </div>

                                            <hr>

                                            <!-- Birth Place -->
                                            <div class="col-md-12 mb-2">
                                                <label for="birthplace" class="form-label">Birth Place*</label>
                                                <hr>
                                                <small class="form-text text-muted">
                                                    House No.
                                                </small>
                                                <input type="text" id="BRTHHOUSENO" name="BRTHHOUSENO"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="20" size="20" data-toggle="tooltip"
                                                    data-placement="right" title="House No.">
                                                <small class="form-text text-muted">
                                                    Street
                                                </small>
                                                <input type="text" id="BRTHSTREET" name="BRTHSTREET"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="Street">
                                                <small class="form-text text-muted">
                                                    Barangay*
                                                </small>
                                                <input type="text" id="BRTHBRGY" name="BRTHBRGY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Barangay" required>
                                                <small class="form-text text-muted">
                                                    Town*
                                                </small>
                                                <input type="text" id="BRTHTOWN" name="BRTHTOWN"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Town" required>
                                                <small class="form-text text-muted">
                                                    Zip Code*
                                                </small>
                                                <input type="text" id="BRTHZIPCODE" name="BRTHZIPCODE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                    title="Zip Code" required>
                                                <small class="form-text text-muted">
                                                    Province*
                                                </small>
                                                <input type="text" id="BRTHPROVINCE" name="BRTHPROVINCE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="150" size="150" data-toggle="tooltip"
                                                    data-placement="right" title="Province" required>
                                                <small class="form-text text-muted">
                                                    Country*
                                                </small>
                                                <input type="text" id="BRTHCOUNTRY" name="BRTHCOUNTRY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Country" required>

                                            </div>
                                            <!-- End Birth Place -->

                                            <hr>

                                            <!-- Permanent Address -->

                                            <div class="col-md-12 mb-2">
                                                <label for="permanentaddress" class="form-label">Permanent
                                                    Address*</label> /
                                                <label style="color: green;">
                                                    <input type="checkbox" id="same" onchange="CopyAdd();"> Same as
                                                    Birth Place
                                                </label>
                                                <hr>
                                                <small class="form-text text-muted">
                                                    House No.
                                                </small>
                                                <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="20" size="20" data-toggle="tooltip"
                                                    data-placement="right" title="House No.">
                                                <small class="form-text text-muted">
                                                    Street
                                                </small>
                                                <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="Street">
                                                <small class="form-text text-muted">
                                                    Barangay*
                                                </small>
                                                <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Barangay" required>
                                                <small class="form-text text-muted">
                                                    Town*
                                                </small>
                                                <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Town" required>
                                                <small class="form-text text-muted">
                                                    Zip Code*
                                                </small>
                                                <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                    title="Zip Code" required>
                                                <small class="form-text text-muted">
                                                    Province*
                                                </small>
                                                <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="150" size="150" data-toggle="tooltip"
                                                    data-placement="right" title="Province" required>
                                                <small class="form-text text-muted">
                                                    Country*
                                                </small>
                                                <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Country" required>

                                            </div>
                                            <!-- End Permanent Address -->

                                            <hr>

                                            <div class="col-md-12 mb-2">
                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                    id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Cellphone Number" required>
                                                <small class="form-text text-muted">
                                                    ex: 9770011001
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="emailaddress" class="form-label">Valid Email
                                                    Address*</label>
                                                <input type="email" class="form-control form-control-sm" name="EMAIL1"
                                                    id="emailaddress" placeholder="" maxlength="150" size="150"
                                                    data-toggle="tooltip" data-placement="right" title="Email Address"
                                                    required>
                                                <small class="form-text text-muted">
                                                    Please input a valid email. Your username and password will send to
                                                    your email address.
                                                </small>
                                            </div>

                                            <hr>

                                            <div class="col-md-12 mb-2">
                                                <label for="religion" class="form-label">Religion*</label>
                                                <input type="text" class="form-control form-control-sm" name="RELIGION"
                                                    id="religion" placeholder="" maxlength="150" size="150"
                                                    data-toggle="tooltip" data-placement="right" title="Religion"
                                                    required>

                                            </div>

                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End card -->
                                </div>

                                <div class="col-md-6 p-2 float-sm-start">
                                    <div class="card">
                                        <div class="card-header" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOther" aria-expanded="true"
                                            aria-controls="collapseOther">
                                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                            Other Information<i class="fa fa-caret-down pull-right"></i>
                                        </div>
                                        <div class="card-body accordion-collapse collapse show"
                                            id="collapseOther-disable">



                                            <!-- Fathers Info -->
                                            <div class="col-md-12 mb-2">
                                                <label class="form-label">Father's Information*</label>
                                                <hr>
                                                <small class="form-text text-muted">
                                                    Father's Given Name*
                                                </small>
                                                <input type="text" name="FATHNAM3"
                                                    class="form-control form-control-sm mb-2" placeholder="First Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                                <small class="form-text text-muted">
                                                    Middle Name
                                                </small>
                                                <input type="text" name="FATHNAM2"
                                                    class="form-control form-control-sm mb-2" placeholder="Middle Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                                <small class="form-text text-muted">
                                                    Father's Family Name*
                                                </small>
                                                <input type="text" name="FATHNAM1"
                                                    class="form-control form-control-sm mb-2" placeholder="Last Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Last Name" required>
                                                <small class="form-text text-muted">
                                                    Name Extension: ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                </small>
                                                <input type="text" name="FATHNAM4"
                                                    class="form-control form-control-sm mb-2"
                                                    placeholder="Name Extension" maxlength="3" size="3"
                                                    data-toggle="tooltip" data-placement="right" title="Name extension">
                                                <small class="form-text text-muted">
                                                    Occupation*
                                                </small>
                                                <input type="text" name="FATHOCCUP"
                                                    class="form-control form-control-sm mb-2" placeholder="Occupation"
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Occupation" required>

                                            </div>
                                            <!-- end name -->

                                            <hr>

                                            <!-- Mother's Info -->
                                            <div class="col-md-12 mb-2">
                                                <label class="form-label">Mother's Information (Maiden)*</label>
                                                <hr>
                                                <small class="form-text text-muted">
                                                    Mother's Given Name*
                                                </small>
                                                <input type="text" name="MOTHNAM3"
                                                    class="form-control form-control-sm mb-2" placeholder="First Name"
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="First Name" required>
                                                <small class="form-text text-muted">
                                                    Middle Name
                                                </small>
                                                <input type="text" name="MOTHNAM2"
                                                    class="form-control form-control-sm mb-2" placeholder="Middle Name"
                                                    maxlength="30" size="30" data-toggle="tooltip"
                                                    data-placement="right" title="Middle Name">
                                                <small class="form-text text-muted">
                                                    Mother's Maiden Last Name*
                                                </small>
                                                <input type="text" name="MOTHNAM1"
                                                    class="form-control form-control-sm mb-2"
                                                    placeholder="Maiden Last Name" maxlength="30" size="30"
                                                    data-toggle="tooltip" data-placement="right" title="Last Name"
                                                    required>
                                                <small class="form-text text-muted">
                                                    Occupation*
                                                </small>
                                                <input type="text" name="MOTHOCCUP"
                                                    class="form-control form-control-sm mb-2" placeholder="Occupation"
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Occupation" required>

                                            </div>
                                            <!-- end name -->

                                            <hr>

                                            <div class="col-md-12 mb-2">
                                                <label for="annualfamincome" class="form-label">Annual Family
                                                    Income*</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="ANNUALFAMINCOME" id="annualfamincome" placeholder=""
                                                    min="1000" max="1000000000" data-toggle="tooltip"
                                                    data-placement="right" title="Annual Family Income" required>
                                                <small class="form-text text-muted">
                                                    ex: 100000
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="guardian" class="form-label">Guardian*</label>
                                                <input type="text" class="form-control form-control-sm" name="GUARDIAN"
                                                    id="guardian" placeholder="" maxlength="100" size="100"
                                                    data-toggle="tooltip" data-placement="right" title="Guardian"
                                                    required>
                                                <small class="form-text text-muted">
                                                    Write the full name of your guardian.
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="guardiancontact" class="form-label">Guardian Contact
                                                    No.*</label>
                                                <input type="text" class="form-control form-control-sm" name="PHONE2"
                                                    id="guardiancontact" placeholder="" pattern="[0-9]{10}"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Guardian Contact" required>
                                                <small class="form-text text-muted">
                                                    ex: 9770011001
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="relationship" class="form-label">Relationship*</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="RELATIONSHIP" id="relationship" placeholder="" maxlength="25"
                                                    size="25" data-toggle="tooltip" data-placement="right"
                                                    title="Relationship" required>
                                            </div>

                                            <hr>Private Information (Leave it blank if not applicable)
                                            <hr>

                                            <div class="col-md-12 mb-2">
                                                <label for="tribe" class="form-label">Tribe (for Indigenous
                                                    People)</label>
                                                <input type="text" class="form-control form-control-sm" name="TRIBE"
                                                    id="tribe" placeholder="" maxlength="50" size="50">
                                                <small class="form-text text-muted">
                                                    eg: Mangyan - Alangan | (Leave it blank if not applicable)
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="dis" class="form-label">Disability (for PWD)</label>
                                                <select class="form-control form-control-sm" name="DISABILITY" id="dis">
                                                    <option value="None">None</option>
                                                    <option value="Communication Disability">Communication Disability
                                                    </option>
                                                    <option value="Disability Due to Cronic Illness">Disability Due to
                                                        Cronic Illness</option>
                                                    <option value="Learning Disability">Learning Disability</option>
                                                    <option value="Neurological Disability">Neurological Disability
                                                    </option>
                                                    <option value="Othopedic Disability">Othopedic Disability</option>
                                                    <option value="Psycho Social Disability">Psycho Social Disability
                                                    </option>
                                                    <option value="Visual Disability">Visual Disability</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    Choose For People With Disability
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="sex" class="form-label">LGBT?*</label>
                                                <select class="form-control form-control-sm" name="LGBT" id="sex">
                                                    <option value="NO">No</option>
                                                    <option value="YES">Yes</option>
                                                    <option value="UNDECIDED">Undecided</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="s1" class="form-label">Scholarship 1</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="SCHOLARSHIP1" id="s1" placeholder="" maxlength="150"
                                                    size="150">
                                                <small class="form-text text-muted">
                                                    Name of Scholarship. Leave it blank if none
                                                </small>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="s2" class="form-label">Scholarship 2</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="SCHOLARSHIP2" id="s2" placeholder="" maxlength="150"
                                                    size="150">
                                                <small class="form-text text-muted">
                                                    Name of Scholarship. Leave it blank if none
                                                </small>
                                            </div>

                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End card -->
                                </div>

                            </div>
                            <!-- end col- -->





                            <!-- Col- -->
                            <div class="col-md-12 p-2 float-sm-start pb-5">
                                <div class="card" style="border-bottom: none">
                                    <div class="card-header" style="border: none">
                                        <label style="color: green;">
                                            <input type="checkbox" value="YES" id="CONSENT" name="CONSENT"
                                                onchange="consent();" />
                                            I hereby give my consent for lawful processing of personal information
                                            contained herein
                                            in accordance with Data Privacy Act of 2012.
                                        </label>
                                        <hr>
                                        <input type="submit" id="submit" disabled="disabled" value="Submit"
                                            class="btn btn-sm btn-success">
                                        By clicking Submit, you agree to our <a href="" target="_blank">Terms, Data
                                            Policy and Condition</a>.

                                    </div>
                                    <!-- End Card Body -->
                                </div>
                                <!-- End card -->
                            </div>
                            <!-- end col- -->


                        </form>
                        <!-- End Form -->


                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once('C:\xampp\htdocs\a2\app\views\hr\includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->





    <?php require_once('C:\xampp\htdocs\a2\app\views\hr\includes\footer.php'); ?>


    <script>
    function consent() {
        //CONSENT
        var submit = document.getElementById('submit');
        var CONSENT = document.getElementById('CONSENT');
        if (CONSENT.checked) {
            submit.disabled = false;
        } else {
            submit.disabled = true;
        }
    }

    function CopyAdd() {

        var BRTHHOUSENO = document.getElementById('BRTHHOUSENO');
        var BRTHSTREET = document.getElementById('BRTHSTREET');
        var BRTHBRGY = document.getElementById('BRTHBRGY');
        var BRTHTOWN = document.getElementById('BRTHTOWN');
        var BRTHZIPCODE = document.getElementById('BRTHZIPCODE');
        var BRTHPROVINCE = document.getElementById('BRTHPROVINCE');
        var BRTHCOUNTRY = document.getElementById('BRTHCOUNTRY');

        var ADDHOUSENO = document.getElementById('ADDHOUSENO');
        var ADDSTREET = document.getElementById('ADDSTREET');
        var ADDBRGY = document.getElementById('ADDBRGY');
        var ADDTOWN = document.getElementById('ADDTOWN');
        var ADDZIPCODE = document.getElementById('ADDZIPCODE');
        var ADDPROVINCE = document.getElementById('ADDPROVINCE');
        var ADDCOUNTRY = document.getElementById('ADDCOUNTRY');

        var same = document.getElementById('same');
        if (same.checked) {
            ADDHOUSENO.value = BRTHHOUSENO.value;
            ADDSTREET.value = BRTHSTREET.value;
            ADDBRGY.value = BRTHBRGY.value;
            ADDTOWN.value = BRTHTOWN.value;
            ADDZIPCODE.value = BRTHZIPCODE.value;
            ADDPROVINCE.value = BRTHPROVINCE.value;
            ADDCOUNTRY.value = BRTHCOUNTRY.value;

        } else {
            ADDHOUSENO.value = '';
            ADDSTREET.value = '';
            ADDBRGY.value = '';
            ADDTOWN.value = '';
            ADDZIPCODE.value = '';
            ADDPROVINCE.value = '';
            ADDCOUNTRY.value = '';
        }
    }
    </script>