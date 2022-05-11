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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 ">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href=""> <i class=" fa fa-icon fa-arrow-left"></i> </a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- container-fluid -->
                    <div class="container-fluid-xxl pb-2">
                        <!-- start table for Work Experience -->
                        <div class="col-md-12 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-table"></i></span>
                                    Learning and Development, Interventions/Training Programs Attended
                                    <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#adding">Add Trainings</button>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                    <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example4" class="table table-bordered table-hover table-striped table-sm" style="overflow:hidden;">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>TRANING PROGRAMS</th>
                                                    <th>FROM</th>
                                                    <th>TO</th>
                                                    <th>NUMBER OF HOURS</th>
                                                    <th>TYPE OF LD</th>
                                                    <th>SPONSORED BY</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($get_trainings as $datum): ?>
                                                    <tr class="odd">
                                                        <td><?php echo $datum['ldi_id'] ?></td>
                                                        <td><?php echo $datum['title'] ?></td>
                                                        <td><?php echo $datum['_from'] ?></td>
                                                        <td><?php echo $datum['_to'] ?></td>
                                                        <td><?php echo $datum['hours'] ?></td>
                                                        <td><?php echo $datum['type'] ?></td>
                                                        <td><?php echo $datum['sponsored'] ?></td>
                                                        <td>
                                                            <button class="btn btn-mini btn-info updatebtn" data-bs-toggle="modal" data-bs-target="#updating">
                                                                Edit
                                                            </button>
                                                            <button class="btn btn-mini btn-warning deletebtn" data-bs-toggle="modal" data-bs-target="deleting">
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
                                    <!-- End Table Div -->

                                    
                                </div>

                            </div>
                        </div>

                        <!-- start table for Work Experience  -->
                    </div>
                    <!-- End container-fluid -->
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
    

<!-- modal for adding trainings -->
<div class="modal fade" id="adding">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Learning and Development, Interventions/Training Programs Attended</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Employee/insert_trainings');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 m-t-20">
                        <label>TRANING PROGRAMS</label>
                        <input type="text" class="form-control" name="title" value="" required > 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>FROM</label>
                        <input type="date" class="form-control" name="from" value="" required > 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>TO</label>
                        <input type="date" class="form-control" name="to" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>NUMBER OF HOURS</label>
                        <input type="number" class="form-control" name="hours" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>TYPE OF LD</label>
                        <input type="text" class="form-control" name="type" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>SPONSORED BY</label>
                        <input type="text" class="form-control" name="spon" value="" required > 
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
<!-- end modal for adding trainings -->


<!-- /* start change jcd May 6, 2022 */ -->
<!-- modal for updating trainings -->
<div class="modal fade" id="updating">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Learning and Development, Interventions/Training Programs Attended</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Employee/update_trainings');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="ldi_id" id="ldi_id">
                    <div class="form-group col-md-12 m-t-20">
                        <label>TRANING PROGRAMS</label>
                        <input type="text" class="form-control" id="title" name="title" value="" required > 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>FROM</label>
                        <input type="date" class="form-control" id="from" name="from" value="" required > 
                    </div>
                    <div class="form-group col-md-6 m-t-20">
                        <label>TO</label>
                        <input type="date" class="form-control" id="to" name="to" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>NUMBER OF HOURS</label>
                        <input type="number" class="form-control" id="hours" name="hours" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>TYPE OF LD</label>
                        <input type="text" class="form-control" id="type" name="type" value="" required > 
                    </div>
                    <div class="form-group col-md-12 m-t-20">
                        <label>SPONSORED BY</label>
                        <input type="text" class="form-control" id="spon" name="spon" value="" required > 
                    </div>
                    
                    
                    <div class="form-actions mt-2 col-md-12">
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                    </div>
                    
                </form>
               
            </div>
        </div>
    </div>
</div>
<!-- end modal for updating trainings -->


<!-- modal for deleting trainings -->
<div class="modal fade" id="deleting">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Learning and Development, Interventions/Training Programs Attended</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?= site_url('Employee/delete_trainings')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="ld_id" name="ld_id">
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
<!-- end modal for deleting trainings -->


<!-- update -->
<script>
    $(document).ready(function () {

        $('.updatebtn').on('click', function () {

            $('#updating').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#ldi_id').val(data[0]);
            $('#title').val(data[1]);
            $('#from').val(data[2]);
            $('#to').val(data[3]);
            $('#hours').val(data[4]);
            $('#type').val(data[5]);
            $('#spon').val(data[6]);
            
        });
    });
</script>

<!-- delete -->
<script>
    $(document).ready(function () {

        $('.deletebtn').on('click', function () {

            $('#deleting').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#ld_id').val(data[0]);
        });
    });
</script>
<!-- /* end change jcd May 6, 2022 */ -->