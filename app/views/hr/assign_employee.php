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
                                        Assign New Employee
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                        <form action="<?=site_url('Hr/assign_emp');?>" method="POST">
                                            <input type="hidden" name="user_id" value="<?= $get_user_id['user_id']?>">
                                            <div class="col-md-12 mb-2 mt-2">
                                                <label for="">Employee Status</label>
                                                <select name="emp_status" id="" class="form-control form-control-sm">
                                                    <option >Option</option>
                                                    
                                                    <?php foreach($employment_stat as $stat): ?>
                                                    <option value="<?php echo $stat['status_id'] ?>"><?php echo $stat['status_desc'] ?></option>
                                                    <?php endforeach;?>

                                                </select>
                                                
                                            </div>
                                            <div class="col-md-12 mb-2 mt-2">
                                                <label for="">Office</label>
                                                <select name="office" id="" class="form-control form-control-sm">
                                                    <option >Option</option>
                                                    
                                                    <?php foreach($office as $off): ?>
                                                    <option value="<?php echo $off['office_id'] ?>"><?php echo $off['office_description'] ?></option>
                                                    <?php endforeach;?>

                                                </select>
                                                
                                            </div>
                                            <div class="col-md-12 mb-2 mt-2">
                                                <label for="">Designation</label>
                                                <select name="designation" id="" class="form-control form-control-sm">
                                                    <option >Option</option>
                                                    
                                                    <?php foreach($designation as $pos): ?>
                                                    <option value="<?php echo $pos['designation_id'] ?>"><?php echo $pos['designation_desc'] ?></option>
                                                    <?php endforeach;?>

                                                </select>
                                                
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

   