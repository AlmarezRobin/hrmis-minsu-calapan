<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes/head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes/topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href=""> <i class=" fa fa-icon fa-arrow-left"></i> </a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="row">       
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card-body">
                                    <label for=""><h4>WORK EXPERIENCE</h4></label>
                                    <hr>
                                        <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example1" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FROM</th>
                                                    <th>TO</th>
                                                    <th>POSITION TILE</th>
                                                    <th>COMPANY</th>
                                                    <th>MONTLY SALARY</th>
                                                    <th>SALARY GRADE & STEP INCREMENT</th>
                                                    <th>STATUS OF APPOINMENT</th>
                                                    <th>GOV'T SERVICE</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($data as $datum): ?>
                                                    <tr>
                                                        <td><?php echo $datum['work_exp_id'] ?></td>
                                                        <td><?php echo $datum['_from'] ?></td>
                                                        <td><?php echo $datum['_to'] ?></td>
                                                        <td><?php echo $datum['designation'] ?></td>
                                                        <td><?php echo $datum['company'] ?></td>
                                                        <td><?php echo $datum['monthly_salary'] ?></td>
                                                        <td><?php echo $datum['salary_grade'] ?></td>
                                                        <td><?php echo $datum['appointment_status'] ?></td>
                                                        <td><?php echo $datum['government'] ?></td>
                                                        <td>
                                                            <a href="#"><button
                                                                    class="btn btn-mini btn-info">View</button></a>
                                                            <a href="#"><button
                                                                    class="btn btn-mini btn-warning">Edit</button></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    
                                                </tr>
                                            </tfoot>

                                        </table>
                                        <!-- End Table -->


                                    </div>
                                    <hr>
                                    <!-- End Table Div -->
                                    <form class="row" action="<?=site_url('Employee/insert_experience');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-md-2 mb-2">
                                            <label>FROM</label>
                                            <input type="date" class="form-control" name="from" value="" required > 
                                        </div>
                                        <div class="form-group col-md-2 mb-2">
                                            <label>TO</label>
                                            <input type="date" class="form-control" name="to" value="" required > 
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>POSITION TITLE</label>
                                            <input type="text" id="" name="position" class="form-control " required > 
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>COMPANY</label>
                                            <input type="text" class="form-control" name="company" value="" required > 
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>MONTHLY SALARY</label>
                                            <input type="number" class="form-control" name="month_sal" value="" required > 
                                        </div>

                                        <div class="form-group col-md-4 mb-2">
                                            <label>SALARY GRADE AND STEP INCREMENT</label>
                                            <input type="text" id="" name="step_incre" class="form-control " required > 
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>STATUS OF APPOINMENT</label>
                                            <input type="text" class="form-control" name="status" value="" required > 
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>GOVERNMENT SERVICE</label>
                                            <select name="gov_ser" id="" class="form-control" >
                                                <option>(YES/NO)</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <div class="form-actions mt-2 col-md-12">
                                            <input type="hidden" name="emid" value="">                                                   
                                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End container-fluid -->
                    </div>
                        <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes/footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once(APP_DIR . 'views/emp/includes/footer.php'); ?>
    