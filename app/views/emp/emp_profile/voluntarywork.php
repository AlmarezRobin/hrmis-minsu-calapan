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
                    <!-- start table for Work Experience -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Current Rice Production Status
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#adding">Add Work Voluntary</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">

                                   <!-- Table Div -->
                                   <div class="table-responsive m-3">

                                <!-- Table -->
                                <table id="example3" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAME OF ORGANIZATION</th>
                                            <th>ADDRESS OF ORGANIZATION</th>
                                            <th>FROM</th>
                                            <th>TO</th>
                                            <th>NUMBER OF HOURS</th>
                                            <th>POSITION/NATURE OF WORK</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($data as $datum): ?>
                                            <tr>
                                                <td><?php echo $datum['voluntary_id'] ?></td>
                                                <td><?php echo $datum['name'] ?></td>
                                                <td><?php echo $datum['org_address'] ?></td>
                                                <td><?php echo $datum['_from'] ?></td>
                                                <td><?php echo $datum['_to'] ?></td>
                                                <td><?php echo $datum['hours'] ?></td>
                                                <td><?php echo $datum['position'] ?></td>
                                                <td>
                                                    <a href="#"><button class="btn btn-mini btn-info">View</button></a>
                                                    <a href="#"><button class="btn btn-mini btn-warning">Edit</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>NAME OF ORGANIZATION</th>
                                            <th>ADDRESS OF ORGANIZATION</th>
                                            <th>FROM</th>
                                            <th>TO</th>
                                            <th>NUMBER OF HOURS</th>
                                            <th>POSITION/NATURE OF WORK</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>

                                </table>
                                <!-- End Table -->


                                </div>
                                <!-- End Table Div -->

                            </div>

                        </div>
                    </div>
                    <!-- start table for Work Experience  -->
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





<!-- modal for adding workexperience -->
<div class="modal fade" id="adding">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Work Voluntary</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Employee/insert_voluntary');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 m-t-20">
                        <label>NAME OF ORGANIZATION</label>
                        <input type="text" class="form-control" name="name" value="" required minlength="6"> 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>ADDRESS OF ORGANIZATION</label>
                        <input type="text" id="" name="add" class="form-control " required minlength="6"> 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>FROM</label>
                        <input type="date" class="form-control" name="from" value="" required minlength="6"> 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>TO</label>
                        <input type="date" class="form-control" name="to" value="" required minlength="6"> 
                    </div>

                    <div class="form-group col-md-12 m-t-20">
                        <label>NUMBER OF HOURS</label>
                        <input type="number" class="form-control" name="hours" value="" required minlength="6"> 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>POSITION OF NATURE OF WORK </label>
                        <input type="text" id="" name="position" class="form-control " required minlength="6"> 
                    </div>
                    
                    
                    <div class="form-actions mt-2 col-md-12">
                        <input type="hidden" name="emid" value="">                                                   
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                    
                </form>
               
            </div>
        </div>
    </div>
</div>
<!-- end modal for adding workexperience -->




    