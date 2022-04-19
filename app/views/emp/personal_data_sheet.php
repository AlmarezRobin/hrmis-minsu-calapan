<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <small>Personal Data Sheet</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>

                        <!-- col -->
                        <div class="col-md-12 float-sm-start">
                            <div class="col-md-6 p-2 float-sm-start">
                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOther" aria-expanded="true"
                                        aria-controls="collapseOther">
                                        <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                        Father's Information
                                        <a href="<?=site_url('Pds/view_father_info');?>"> <i class="fa fa-icon fa-edit fa-lg float-sm-end" data-toogle="tooltip" title="EDIT"></i> </a>
                                    </div>
                                    <div class="card-body accordion-collapse collapse show"
                                        id="collapseOther-disable">



                                        <!-- Fathers Info -->
                                        <div class="col-md-12 mb-2">
                                            <small class="form-text text-muted">
                                                Father's Given Name*
                                            </small>
                                            <input type="text" name="FATHNAM3"
                                                class="form-control form-control-sm mb-2" placeholder="First Name"
                                                maxlength="50" size="50" data-toggle="tooltip"
                                                data-placement="right" title="First Name" disabled>

                                            <small class="form-text text-muted">
                                                Middle Name
                                            </small>
                                            <input type="text" name="FATHNAM2"
                                                class="form-control form-control-sm mb-2" placeholder="Middle Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Middle Name" disabled>
                                            <small class="form-text text-muted">
                                                Father's Family Name*
                                            </small>
                                            <input type="text" name="FATHNAM1"
                                                class="form-control form-control-sm mb-2" placeholder="Last Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Last Name" disabled>
                                            <small class="form-text text-muted">
                                                Name Extension: ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                            </small>
                                            <input type="text" name="FATHNAM4"
                                                class="form-control form-control-sm mb-2"
                                                placeholder="Name Extension" maxlength="3" size="3"
                                                data-toggle="tooltip" data-placement="right" title="Name extension" disabled>
                                            <small class="form-text text-muted">
                                                Occupation*
                                            </small>
                                            <input type="text" name="FATHOCCUP"
                                                class="form-control form-control-sm mb-2" placeholder="Occupation"
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Occupation" disabled>

                                        </div>
                                        <!-- end name -->

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
                                        Mother's Information (Maiden)
                                        <a href="<?=site_url('Pds/view_mother_info');?>"> <i class="fa fa-icon fa-edit fa-lg float-sm-end" data-toogle="tooltip" title="EDIT"></i> </a>
                                    </div>
                                    <div class="card-body accordion-collapse collapse show"
                                        id="collapseOther-disable">

                                        <!-- Mother's Info -->
                                        <div class="col-md-12 mb-2">
                                            <small class="form-text text-muted">
                                                Mother's Given Name*
                                            </small>
                                            <input type="text" name="MOTHNAM3"
                                                class="form-control form-control-sm mb-2" placeholder="First Name"
                                                maxlength="50" size="50" data-toggle="tooltip"
                                                data-placement="right" title="First Name" disabled>
                                            <small class="form-text text-muted">
                                                Middle Name
                                            </small>
                                            <input type="text" name="MOTHNAM2"
                                                class="form-control form-control-sm mb-2" placeholder="Middle Name"
                                                maxlength="30" size="30" data-toggle="tooltip"
                                                data-placement="right" title="Middle Name" disabled>
                                            <small class="form-text text-muted">
                                                Mother's Maiden Last Name*
                                            </small>
                                            <input type="text" name="MOTHNAM1"
                                                class="form-control form-control-sm mb-2"
                                                placeholder="Maiden Last Name" maxlength="30" size="30"
                                                data-toggle="tooltip" data-placement="right" title="Last Name"
                                                disabled>
                                            <small class="form-text text-muted">
                                                Occupation*
                                            </small>
                                            <input type="text" name="MOTHOCCUP"
                                                class="form-control form-control-sm mb-2" placeholder="Occupation"
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Occupation" disabled>

                                        </div>
                                        <!-- end name -->

                                    </div>
                                    <!-- End Card Body -->
                                </div>
                                <!-- End card -->
                            </div>

                        </div>
                        <!-- end col- -->
                        
                        <!-- Col- -->
                        <div class="col-md-12 float-sm-start">
                          <div class="col-md-12 p-2 float-sm-start">

                              <div class="card">
                                  <div class="card-header">
                                      <span class="card-icon"><i class="fa fa-th"></i></span>
                                      List Children
                                      <a href="<?=site_url('Pds/view_child_info');?>"> <i class="fa fa-icon fa-plus fa-lg float-sm-end" data-toogle="tooltip" title="ADD"></i> </a>

                                  </div>
                                  <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                      <!-- Table Div -->
                                      <div class="table-responsive m-3">

                                          <!-- Table -->
                                          <table id="example2" class="table table-bordered table-hover table-striped table-sm" >

                                              <thead>
                                                  <tr>
                                                      <th>#</th>
                                                      <th>First Name</th>
                                                      <th>Last Name</th>
                                                      <th>Middle Name</th>
                                                      <th>Date of Birth</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <?php foreach($data as $datum) : ?>
                                                      <tr>
                                                          <td><?php echo $datum['children_id'];  ?></td>
                                                          <td><?php echo $datum['children_fname'] ?></td>
                                                          <td><?php echo $datum['children_mname'];?></td>
                                                          <td><?php echo $datum['children_lname'] ?></td>
                                                          <td><?php echo $datum['children_dob'];?></td>
                                                          <td>
                                                              <a href="<?=site_url('Project/delete_note/'.$datum['children_id'].'');?>" 
                                                                  data-toggle="tooltip" title=" Delete" class = "btn btn-mini btn-danger"
                                                                  onclick="return confirm('are you ure');">
                                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                              </a>
                                                          </td>

                                                      </tr>

                                                  <?php endforeach; ?>
                                              </tbody>

                                              <tfoot>
                                                  <tr>
                                                      <th>#</th>
                                                      <th>First Name</th>
                                                      <th>Last Name</th>
                                                      <th>Middle Name</th>
                                                      <th>Date of Birth</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </tfoot>

                                          </table>
                                          <!-- End Table -->


                                      </div>
                                      <!-- End Table Div -->

                                  </div>
                                  <!-- End Card Body -->
                              </div>
                              <!-- End card -->
                          </div>

                          <!-- END COL 12 -->
                        </div>
                        <!-- end col- -->
                        <!-- Col- -->
                        <div class="col-md-12 float-sm-start">
                          <div class="col-md-12 p-2 float-sm-start">

                              <div class="card">
                                  <div class="card-header">
                                      <span class="card-icon"><i class="fa fa-th"></i></span>
                                      V. WORK EXPERIENCE
                                      <a href="#"> <i class="fa fa-icon fa-plus fa-lg float-sm-end" data-toogle="tooltip" title="ADD"></i> </a>

                                  </div>
                                  <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                      <!-- Table Div -->
                                      <div class="table-responsive m-3">

                                          <!-- Table -->
                                          <table id="example2" class="table table-bordered table-hover table-striped table-sm" >

                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>From</th>
                                                      <th>To</th>
                                                      <th>Position Title</th>
                                                      <th>Company</th>
                                                      <th>Monthly Salary</th>
                                                      <th>Salary Grade</th>
                                                      <th>Step Increment</th>
                                                      <th>Status Of Appointment</th>
                                                      <th>Government Service</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <?php foreach($data as $datum) : ?>
                                                      <tr>
                                                          <td>
                                                              <a href="<?=site_url('Project/delete_note/'.$datum['children_id'].'');?>" 
                                                                  data-toggle="tooltip" title=" Delete" class = "btn btn-mini btn-danger"
                                                                  onclick="return confirm('are you ure');">
                                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                              </a>
                                                          </td>

                                                      </tr>

                                                  <?php endforeach; ?>
                                              </tbody>

                                              <tfoot>
                                                  <tr>
                                                    <th>ID</th>
                                                      <th>From</th>
                                                      <th>To</th>
                                                      <th>Position Title</th>
                                                      <th>Company</th>
                                                      <th>Monthly Salary</th>
                                                      <th>Salary Grade</th>
                                                      <th>Step Increment</th>
                                                      <th>Status Of Appointment</th>
                                                      <th>Government Service</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </tfoot>

                                          </table>
                                          <!-- End Table -->


                                      </div>
                                      <!-- End Table Div -->

                                  </div>
                                  <!-- End Card Body -->
                              </div>
                              <!-- End card -->
                          </div>

                          <!-- END COL 12 -->
                        </div>
                        <!-- end col- -->


                         <!-- Col- -->
                         <div class="col-md-12 float-sm-start">
                          <div class="col-md-12 p-2 float-sm-start">

                              <div class="card">
                                  <div class="card-header">
                                      <span class="card-icon"><i class="fa fa-th"></i></span>
                                      VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZAIONS

                                      <a href="#"> <i class="fa fa-icon fa-plus fa-lg float-sm-end" data-toogle="tooltip" title="ADD"></i> </a>
                                  </div>
                                  <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                      <!-- Table Div -->
                                      <div class="table-responsive m-3">

                                          <!-- Table -->
                                          <table id="example2" class="table table-bordered table-hover table-striped table-sm" >

                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>From</th>
                                                      <th>To</th>
                                                      <th>Position Title</th>
                                                      <th>Company</th>
                                                      <th>Monthly Salary</th>
                                                      <th>Salary Grade</th>
                                                      <th>Step Increment</th>
                                                      <th>Status Of Appointment</th>
                                                      <th>Government Service</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <?php foreach($data as $datum) : ?>
                                                      <tr>
                                                          <td>
                                                              <a href="<?=site_url('Project/delete_note/'.$datum['children_id'].'');?>" 
                                                                  data-toggle="tooltip" title=" Delete" class = "btn btn-mini btn-danger"
                                                                  onclick="return confirm('are you ure');">
                                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                              </a>
                                                          </td>

                                                      </tr>

                                                  <?php endforeach; ?>
                                              </tbody>

                                              <tfoot>
                                                  <tr>
                                                    <th>ID</th>
                                                      <th>From</th>
                                                      <th>To</th>
                                                      <th>Position Title</th>
                                                      <th>Company</th>
                                                      <th>Monthly Salary</th>
                                                      <th>Salary Grade</th>
                                                      <th>Step Increment</th>
                                                      <th>Status Of Appointment</th>
                                                      <th>Government Service</th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </tfoot>

                                          </table>
                                          <!-- End Table -->


                                      </div>
                                      <!-- End Table Div -->

                                  </div>
                                  <!-- End Card Body -->
                              </div>
                              <!-- End card -->
                          </div>

                          <!-- END COL 12 -->
                        </div>
                        <!-- end col- -->

                         <!-- col -->
                         <div class="col-md-12 float-sm-start">
                            <div class="col-md-6 p-2 float-sm-start">

                            </div>
                        </div>
                      
                        <div class="col-md-12 float-sm-start">
                            <div class="col-md-6 p-2 float-sm-start">

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
                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->





    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footer.php'); ?>
