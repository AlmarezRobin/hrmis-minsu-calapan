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
                                    Work Experience
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#adding">Add Work Experience</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">

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
                                            <th>SALARY GRADE</th>
                                            <th>STEP INCREMENT</th>
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
                                                <td><?php echo $datum['step_inc'] ?></td>
                                                <td><?php echo $datum['appointment_status'] ?></td>
                                                <td><?php echo $datum['government'] ?></td>
                                                <td>
                                                    <button class="btn btn-mini btn-info updatebtn" data-bs-toggle="modal" data-bs-target="#updating">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-mini btn-warning deletebtn" ata-bs-toggle="modal" data-bs-target="#deleting">
                                                        Delete
                                                    </button>
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
                <h4 class="modal-title">Add Work Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Employee/insert_experience');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6 mb-2">
                        <label>FROM</label>
                        <input type="date" class="form-control" name="from" value="" required > 
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label>TO</label>
                        <input type="date" class="form-control" name="to" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>POSITION TITLE</label>
                        <input type="text" id="" name="position" class="form-control " required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>COMPANY</label>
                        <input type="text" class="form-control" name="company" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>MONTHLY SALARY</label>
                        <input type="number" class="form-control" name="month_sal" value="" required > 
                    </div>

                    <div class="form-group col-md-12 mb-2">
                        <label>SALARY GRADE</label>
                        <input type="text" id="" name="salary_grade" class="form-control " required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>STEP INCREMENT</label>
                        <input type="text" id="" name="step_incre" class="form-control " required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>STATUS OF APPOINMENT</label>
                        <input type="text" class="form-control" name="status" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>GOVERNMENT SERVICE</label>
                        <select name="gov_ser" id="" class="form-control" >
                            <option>(YES/NO)</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-actions mt-2 col-md-12">
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- end modal for adding workexperience -->


<!-- modal for updating workexperience -->
<div class="modal fade" id="updating">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Work Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Employee/update_experience');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="work_exp_id" id="work_exp_id">
                    <div class="form-group col-md-6 mb-2">
                        <label>FROM</label>
                        <input type="date" class="form-control" id="from" name="from" value="" required > 
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label>TO</label>
                        <input type="date" class="form-control" id="to" name="to" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>POSITION TITLE</label>
                        <input type="text" id="position" name="position" class="form-control" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>COMPANY</label>
                        <input type="text" class="form-control" id="company" name="company" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>MONTHLY SALARY</label>
                        <input type="number" class="form-control" id="month_sal" name="month_sal" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>SALARY GRADE</label>
                        <input type="text" id="salary_grade" name="salary_grade" class="form-control " required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>STEP INCREMENT</label>
                        <input type="text" id="step_incre" name="step_incre" class="form-control " required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>STATUS OF APPOINMENT</label>
                        <input type="text" class="form-control" id="status" name="status" value="" required > 
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label>GOVERNMENT SERVICE</label>
                        <select name="gov_ser" id="gov_ser" class="form-control" >
                            <option>(YES/NO)</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="form-actions mt-2 col-md-12">
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal for updating workexperience -->

<!-- modal for deleting eligibility -->
<div class="modal fade" id="deleting">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Work Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?= site_url('Employee/delete_experience')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="work_exp" name="work_exp">
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


<!-- /* start change jcd May 6, 2022 */ -->
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

            $('#work_exp_id').val(data[0]);
            $('#from').val(data[1]);
            $('#to').val(data[2]);
            $('#position').val(data[3]);
            $('#company').val(data[4]);
            $('#month_sal').val(data[5]);
            $('#salary_grade').val(data[6]);
            $('#step_incre').val(data[7]);
            $('#status').val(data[8]);
            $('#gov_ser').val(data[9]);
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

            $('#work_exp').val(data[0]);
        });
    });
</script>
<!-- /* end change jcd May 6, 2022 */ -->