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
                                
                                <div class="col-md-12 p-2 float-sm-start">
                                    
                                    <section class="section profile">
                                        
                                        <div class="row">
                                            <div class="col-xl-4">
        
                                            <div class="card">
                                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                    <?php if(isset($emp_profile['photo'])): ?>
                                                        <img src="<?= BASE_URL . 'uploads/' . $emp_profile['photo'] ;?>" alt="" srcset="" class="rounded-circle" height="150" width="150">
                                                    <?php else: ?>
                                                        <img src="" alt="Profile Photo" srcset="" class="img-circle" height="150" width="150">
                                                    <?php endif; ?>
                                                    <a href="<?=site_url('Employee/view_upload')?>" class="fa fa-camera fa-lg" data-toogle="tooltip" title="Upload Your Profile" ></a>
                                                </div>
                                            </div>
        
                                            </div>
        
                                            <div class="col-xl-8">
        
                                                <div class="card">
                                                    <div class="card-body pt-3">
                                                        <!-- Bordered Tabs -->
                                                        <ul class="nav nav-tabs nav-tabs-bordered ">
        
                                                            <li class="nav-item">
                                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                                            </li>
                                                            <li class="nav-item">
                                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#residential-address"> Address</button>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content pt-2">
        
                                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                            
                                                                <h5 class="card-title">Profile Details</h5>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label ">SURNAME</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['l_name'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">FIRST NAME</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['f_name'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">MIDDLE NAME</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['m_name'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">NAME EX.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['name_ex'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">EMPLOYMENT STATUS</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['status_desc'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">OFFICE</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['office_description'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">DESIGNATION</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['designation_desc'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">DATE OF BIRTH</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['date_of_birth'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">PLACE OF BIRTH</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($birth_add['municipality_city'])  && empty($birth_add['province']) ? print 'N/A' :  print trim($birth_add['municipality_city']).', ' . $birth_add['province']?> </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">GENDER</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['sex'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">CIVIL STATUS</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['civil_status'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">HEIGHT</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['height'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">WEIGHT</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['weight'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">BLOOD TYPE</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['blood_type'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">GSIS ID NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['gsisno'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">PAG-IBIG ID NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['pag_ibig_no'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">PHILHEALTH NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['philhealth_no'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">SSS NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['sss_no'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">TIN NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['tin_no'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Agency Employee NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['agency_emp_no'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">CITYZENSHIP</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['citizenship'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">CITYZENSHIP CATEGORY</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['ship_by'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">COUNTRY</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['citizenship_country'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">CONTACT NUMBER</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['mobile'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">TELEPHONE NO.</div>
                                                                    <div class="col-lg-9 col-md-8"><?= $emp_profile['telephone'] ?></div>
                                                                </div>
                                                            </div>
        
        
                                                            <div class="tab-pane fade show profile-overview" id="residential-address">
                                                            
                                                                <h5 class="card-title">Residential Address  </h5>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label ">House/Block/Lot No.</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['house_block_lotno']) ? print 'N/A' : print $residential_add['house_block_lotno'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Street</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['street_sitio']) ? print 'N/A' : print $residential_add['street_sitio'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Subdivision/Village</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['subdivision_village']) ? print 'N/A' : print $residential_add['subdivision_village'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Barangay</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['barangay']) ? print 'N/A' : print $residential_add['barangay'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">City/Municipality</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['municipality_city']) ? print 'N/A' : print $residential_add['municipality_city'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Province</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['province']) ? print 'N/A' : print $residential_add['province'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Region</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['region']) ? print 'N/A' : print $residential_add['region'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Zipcode</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['zipcode']) ? print 'N/A' : print $residential_add['zipcode'] ?></div>
                                                                </div>
        
        
                                                                <h5 class="card-title">Permanent Address  </h5>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label ">House/Block/Lot No.</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['house_block_lotno']) ? print 'N/A' : print $permanent_add['house_block_lotno'] ?></div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Street</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['street_sitio']) ? print 'N/A' : print $permanent_add['street_sitio'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Subdivision/Village</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['subdivision_village']) ? print 'N/A' : print $permanent_add['subdivision_village'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Barangay</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['barangay']) ? print 'N/A' : print $permanent_add['barangay'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">City/Municipality</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['municipality_city']) ? print 'N/A' : print $permanent_add['municipality_city'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Province</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['province']) ? print 'N/A' : print $permanent_add['province'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Region</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($permanent_add['region']) ? print 'N/A' : print $permanent_add['region'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-4 label">Zipcode</div>
                                                                    <div class="col-lg-9 col-md-8"><?php empty($residential_add['zipcode']) ? print 'N/A' : print $residential_add['zipcode'] ?></div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Bordered Tabs -->
        
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </section>
                                </div>
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

