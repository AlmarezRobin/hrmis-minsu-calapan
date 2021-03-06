<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <a href=""> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a>
                    &nbsp; Designation <small></small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="d-flex justify-content-center">

                            <div class="col-md-6 p-2">

                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                        aria-expanded="true" aria-controls="collapseTable">
                                        <span class="card-icon"><i class="fa fa-plus"></i></span>
                                        Add New Degination
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseTable-d">
                                        <?php if(isset($data['designation_id'])): ?>
                                            <form action="<?=site_url('Hr/update_designation');?>" method="POST">
                                                <input type="hidden" name="designation_id" value="<?= $data['designation_id']?>">
                                                <div class="row">
                                                  <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label"> of Designation*</label>
                                                        <select class="form-control form-control-sm" name="" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="<?= $data['designation_desc']?>"><?php echo $data['designation_desc'];?></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Grade*</label>
                                                        <select class="form-control form-control-sm" name="salary_grade" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="<?= $data['salary_grade']?>"><?php echo $data['salary_grade'];?></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary rate category*</label>
                                                        <select class="form-control form-control-sm" name="salary_rate_cat" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required value="<?= $data['salary_rate_cat']?>">
                                                            <option value="<?= $data['salary_rate_cat']?>"><?= $data['salary_rate_cat']?>"</option>
                                                            <!-- <option value="MONTHLY">Monthly</option>
                                                            <option value="DAILY">Daily</option> -->
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Rate Amount*</label>
                                                        <input type="number" class="form-control form-control-sm" name="salary_rate_amount" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required value="<?= $data['salary_rate_amount']?>">
                                                            <div class="Invalid-feedback">
                                                                <?php echo $this->session->flashdata(''); ?>

                                                            </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-sm btn-success pull-right"
                                                            name="submit" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                        <?php else: ?>
                                            <form action="<?=site_url('Hr/add_designation');?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="f1" class="form-label">Description of Designation</label>
                                                        <input type="text" class="form-control form-control-sm" name="designation_desc" id="" required>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Grade*</label>
                                                        <select class="form-control form-control-sm" name="salary_grade" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option >SALARY GRADE 1</option>
                                                            <option value="SALARY GRADE 1">SALARY GRADE 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary rate category*</label>
                                                        <select class="form-control form-control-sm" name="salary_rate_cat" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="MONTHLY">Monthly</option>
                                                            <option value="DAILY">Daily</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Rate Amount*</label>
                                                        <input type="number" class="form-control form-control-sm" name="salary_rate_amount" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-sm btn-success pull-right"
                                                            name="submit" value="Add">
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                        <!-- END COL 12 -->
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