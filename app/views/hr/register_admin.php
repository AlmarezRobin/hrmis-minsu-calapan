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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Register Admin's <small></small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <!-- content center -->
                        <div class=" d-flex justify-content-center">
                            <div class="col-md-12 p-2">

                                <!-- card -->
                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                        aria-expanded="true" aria-controls="collapseTable">
                                        <span class="card-icon"><i class="fa fa-plus"></i></span>
                                        Register New Admin
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                   








                                        <form action="<?=site_url('Hr/add_admin');?>" method="POST">
                                            <div class="row">
                                                
                                                <div class="col-md-6 mb-2">
                                                    <label for="field_name" class="form-label">Role *</label>
                                                    <select name="admin_role" id="field_name"
                                                        class="form-control form-control-line mb-0" required>
                                                        <option value="Teaching">HR</option>
                                                        <option value="Non-Teaching">Cashier</option>
                                                        <option value="Non-Teaching">Exect</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="field_name" class="form-label">Office *</label>
                                                    <select name="admin_office" id="field_name"
                                                        class="form-control form-control-line mb-0" required>
                                                        <option value="">--office--</option>
                                                        <option value="office1">Office 1</option>
                                                        <option value="office2">Office 2</option>
                                                        <option value="office3">Office 3</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Admin's Email</label>
                                                    <input type="email" class="form-control form-control-line" name="admin_email" id="" required>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Admin's Username</label>
                                                    <input type="text" class="form-control form-control-line" name="admin_username" id="" required>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Admin's Password</label>
                                                    <input type="password" class="form-control form-control-line" value="MINSU@CALAPAN" name="admin_password" id="default_pass" required>
                                                    <input type="checkbox" name="chkpass" id="" onclick="showpass()">
                                                    <label for="chkpass">Show Password</label>
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Fist Name</label>
                                                    <input type="text" class="form-control form-control-line" name="admin_name" id="" required>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control form-control-line" name="admin_midname" id="" required>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="f1" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control form-control-line" name="admin_lname" id="" required>
                                                </div>

                                                <!-- <div class="col-md-6 mb-2">
                                                    <label  class="form-label">e-sign </label>
                                                    <input type="file" readonly  name="admin_sign" class="form-control" value=""> 
                                                </div>  -->
                                                <div class="col-md-12 float-sm-left">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right"
                                                        name="submit" value="Add New Admin">
                                                </div>
                                            </div>
                                           
                                        </form>
                                        <?php# endif; ?>



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

   