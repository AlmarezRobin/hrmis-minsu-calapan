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
                        <a href=""><i class=" fa fa-icon fa-arrow-left"></i></a>
                        
                    Employee's <small>PDS</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- modal for add eligibility -->
                    <div class="modal fade" id="add">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Eligibility</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="row" action="<?= site_url('Employee/view_eligibility')?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>SERVICE</label>
                                            <input type="text" class="form-control" name="service" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>RATING</label>
                                            <input type="text" id="" name="rating" class="form-control " required > 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>DATE OF CONFERMENT</label>
                                            <input type="date" class="form-control" name="date" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>PLACE OF CONFERMENT</label>
                                            <input type="text" id="" name="place" class="form-control " required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>NUMBER</label>
                                            <input type="number" class="form-control" name="number" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>DATE OF VALIDITY </label>
                                            <input type="date" id="" name="validity" class="form-control " required minlength="6"> 
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
                    <!-- end modal for addd eligibility -->

                    <!-- modal for updating eligibility -->
                    <div class="modal fade" id="edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Eligibility</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="row" action="<?= site_url('Employee/update_eligibility')?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="eligibility-id" name="eligibility-id">
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>SERVICE</label>
                                            <input type="text" class="form-control" id="service" name="service" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>RATING</label>
                                            <input type="text" id="rating" name="rating" class="form-control " required > 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>DATE OF CONFERMENT</label>
                                            <input type="date" class="form-control" id="date" name="date" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>PLACE OF CONFERMENT</label>
                                            <input type="text" id="place" name="place" class="form-control " required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>NUMBER</label>
                                            <input type="number" class="form-control" id="number" name="number" value="" required minlength="6"> 
                                        </div>
                                        <div class="form-group col-md-12 mb-2 m-t-20">
                                            <label>DATE OF VALIDITY </label>
                                            <input type="date" id="validity" name="validity" class="form-control " required minlength="6"> 
                                        </div>                                                 
                                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for updating eligibility -->

                    <!-- modal for deleting eligibility -->
                    <div class="modal fade" id="delete">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Eligibility</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="row" action="<?= site_url('Employee/delete_eligibility')?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="eligible-id" name="eligibility_id">
                                        <p class="h5">Delete this information?</p>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success pull-right"> 
                                                Delele
                                            </button>
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"> 
                                                Cancel
                                            </button>
                                        </div>
                                            
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for deleting eligibility -->

                     <!-- start table for eligibility -->
                     <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Current Rice Production Status
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#add">Add eligibility</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">

                                <!-- Table Div -->
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>SERVICE</th>
                                                <th>RATING</th>
                                                <th>DATE OF CONFERMENT</th>
                                                <th>PLACE</th>
                                                <th>LICENCE NUMBER</th>
                                                <th>DATE OF VALIDITY</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($get_eligibility as $datum): ?>
                                                <tr class="odd">
                                                    <td><?php echo $datum['eligibility_id'] ?></td>
                                                    <td><?php echo $datum['service'] ?></td>
                                                    <td><?php echo $datum['rating'] ?></td>
                                                    <td><?php echo $datum['date_conferment'] ?></td>
                                                    <td><?php echo $datum['place_conferment'] ?></td>
                                                    <td><?php echo $datum['license_num'] ?></td>
                                                    <td><?php echo $datum['validity'] ?></td>
                                                    <td>
                                                        <button class="btn btn-mini btn-info updatebtn" data-bs-toggle="modal" data-bs-target="#edit">
                                                            Edit
                                                        </button>
                                                        <button class="btn btn-mini btn-warning deletebtn" data-bs-toggle="modal" data-bs-target="#delete">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- End Table -->

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- start table for eligibility -->



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
    
    <!-- /* start change jcd May 6, 2022 */ -->
     <!-- update -->
     <script>
        $(document).ready(function () {

            $('.updatebtn').on('click', function () {

                $('#edit').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#eligibility-id').val(data[0]);
                $('#service').val(data[1]);
                $('#rating').val(data[2]);
                $('#date').val(data[3]);
                $('#place').val(data[4]);
                $('#number').val(data[5]);
                $('#validity').val(data[6]);
            });
        });
    </script>

    <!-- delete -->
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#delete').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#eligible-id').val(data[0]);
            });
        });
    </script>
    <!-- /* end change jcd May 6, 2022 */ -->