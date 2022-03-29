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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Registered Employee's <small></small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <!-- content center -->
                        <div class=" d-flex justify-content-center">
                            <div class="col-md-6 p-2">

                                <!-- card -->
                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                        aria-expanded="true" aria-controls="collapseTable">
                                        <span class="card-icon"><i class="fa fa-plus"></i></span>
                                        Registered New Employee
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                        <form action="<?=site_url('Hr/add_employee');?>" method="POST">


                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="field_name" class="form-label mb-0">Role *</label>
                                                    <select name="emp_role" id="field_name"
                                                        class="form-control form-control-sm mb-0" required>
                                                        <option value="Teaching">Teaching</option>
                                                        <option value="Non-Teaching">Non-Teaching</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Employee's ID</label>
                                                    <input type="text" class="form-control form-control-sm" name="emp_idnumber" id="" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Employee's Email</label>
                                                    <input type="email" class="form-control form-control-sm" name="emp_email" id="" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Employee's Username</label>
                                                    <input type="text" class="form-control form-control-sm" name="emp_username" id="" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Employee's Password</label>
                                                    <input type="password" class="form-control form-control-sm" value="MINSU@CALAPAN" name="emp_password" id="default_pass" required>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="chkpass" id="" onclick="showpass()">
                                                    <label for="chkpass">Show Password</label>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right"
                                                        name="submit" value="Add New Employee">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!--  end card -->
                            </div>

                        </div>
                        <!-- end content center -->
                    </div>
                    <!-- END COL 12 -->
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
    
    
    <!-- script para sa default pass show -->
    <script>
            function showpass(){
                var x = document.getElementById("default_pass");
                if(x.type ==="password"){
                    x.type = "text";
                }
                else{
                    x.type="password";
                }
            }
        </script>

   