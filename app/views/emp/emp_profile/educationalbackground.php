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
                        
                    Employee's <small>Personal Data Sheet</small></h5>
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
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#adding">Add educational background</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">

                                <!-- Table Div -->
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>LEVEL</th>
                                                <th>SCHOOL NAME</th>
                                                <th>DEGREE</th>
                                                <th>FROM</th>
                                                <th>TO</th>
                                                <th>HIGHEST LEVEL</th>
                                                <th>YEAR GRADUATED</th>
                                                <th>HONORS RECEIVED</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($data as $datum): ?>

                                            <tr class="odd">
                                                <td><?php echo $datum['educ_id'] ?></td>
                                                <td><?php echo $datum['level'] ?></td>
                                                <td><?php echo $datum['school_name'] ?></td>
                                                <td><?php echo $datum['degree'] ?></td>
                                                <td><?php echo $datum['from_date'] ?></td>
                                                <td><?php echo $datum['to_date'] ?></td>
                                                <td><?php echo $datum['highest_level'] ?></td>
                                                <td><?php echo $datum['year_graduated'] ?></td>
                                                <td><?php echo $datum['honors_received'] ?></td>
                                                <td>
                                                    <button class="btn btn-mini btn-info updatebtn" data-bs-toggle="modal" data-bs-target="#updating">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-mini btn-warning deletebtn" data-bs-toggle="modal" 
                                                    data-bs-target="#deleting">
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

                    <!-- start table for Work Experience  -->

                    <!-- /* start change jcd May 5,2022 */ -->
                    <!-- modal for adding educational background -->
                    <!-- dipa napasok yung other sa db *reminder -->
                    <div class="modal fade" id="adding">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update child information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?= site_url('Employee/view_educational_background') ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label>Level</label>
                                                <select name="level" name="level" onChange="other();"class="form-control form-control-line">
                                                    <option>option</option>
                                                    <option value="ELEMENTARY">ELEMENTARY</option>
                                                    <option value="SECONDARY">SECONDARY</option>
                                                    <option value="TERTIARY">TERTIARY</option>
                                                    <option value="ELEMENTARY">ELEMENTARY</option>
                                                    <option value="K-12 PROGRAM">K-12 PROGRAM</option>
                                                    <option value="VOCATIONAL">VOCATIONAL</option>
                                                    <option value="OTHER">OTHER</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label>If Other</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Please Specify the level" disabled>
                                            </div>
                                            <script type="text/javascript">
                                                $('#level').change(function() {
                                                    if( $(this).val() == "OTHER") {
                                                        $('#specify').prop( "disabled", false );
                                                    } else {       
                                                        $('#specify').prop( "disabled", true );
                                                    }
                                                });
                                            </script>

                                            <div class="col-md-12 mb-2">
                                                <label>Name of School</label>
                                                <input type="text" name="name" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label>Basic Education/Degree/Course of School</label>
                                                <input type="text" name="degree" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label>Period of Attendace</label>
                                                <input type="month" name ="from"class="form-control form-control-line" placeholder="From">  
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for=""></label>
                                                <input type="month" name="to" class="form-control form-control-line" placeholder="To"> 
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label>Highest Level Unit Earned</label>
                                                <input type="text" name="unit_earned" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                            </div>
                                            <div class="col-md-12 mb-2"> 
                                                <label>Year graduated</label>
                                                <input type="text" name="year_grad" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-12 mb-2"> 
                                                <label>Scholarship/Academic honors received</label>
                                                <input type="text" name="honors"class="form-control form-control-line" >
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                <input type="hidden" name="emid" value="">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Insert</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for adding educational background -->




                    <!-- modal for updating educational background -->
                    <div class="modal fade" id="updating">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Educational Background</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?= site_url('Employee/update_educ_bg') ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label>Level</label>
                                                <select name="level" id="level" name="level" onChange="other();"class="form-control form-control-line">
                                                    <option>option</option>
                                                    <option value="ELEMENTARY">ELEMENTARY</option>
                                                    <option value="SECONDARY">SECONDARY</option>
                                                    <option value="TERTIARY">TERTIARY</option>
                                                    <option value="ELEMENTARY">ELEMENTARY</option>
                                                    <option value="K-12 PROGRAM">K-12 PROGRAM</option>
                                                    <option value="VOCATIONAL">VOCATIONAL</option>
                                                    <option value="OTHER">OTHER</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label>If Other</label>
                                                <input type="text" id="specify" class="form-control form-control-line" placeholder="Please Specify the level" disabled>
                                            </div>
                                            <script type="text/javascript">
                                                $('#level').change(function() {
                                                    if( $(this).val() == "OTHER") {
                                                        $('#specify').prop( "disabled", false );
                                                    } else {       
                                                        $('#specify').prop( "disabled", true );
                                                    }
                                                });
                                                </script>

                                            <div class="col-md-12 mb-2">
                                                <label>Name of School</label>
                                                <input type="text" id="name" name="name" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label>Basic Education/Degree/Course of School</label>
                                                <input type="text" id="degree" name="degree" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label>Period of Attendace</label>
                                                <input type="month" id="from" name ="from"class="form-control form-control-line" placeholder="From">  
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for=""></label>
                                                <input type="month" id="to" name="to" class="form-control form-control-line" placeholder="To"> 
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label>Highest Level Unit Earned</label>
                                                <input type="text" id="unit-earned"  name="unit_earned" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                            </div>
                                            <div class="col-md-12 mb-2"> 
                                                <label>Year graduated</label>
                                                <input type="text" id="year-grad" name="year_grad" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-12 mb-2"> 
                                                <label>Scholarship/Academic honors received</label>
                                                <input type="text" id="honors" name="honors"class="form-control form-control-line" >
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                <input type="hidden" name="emid" id="emid" value="">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> insert</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for updating educational background -->

                    <!-- modal for deleting educational background -->
                    <div class="modal fade" id="deleting">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Educational Background</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?= site_url('Employee/delete_educ_bg') ?>" method="POST">
                                        <p class="h5">Do you want to delete this information?</p>
                                        <input type="hidden" name="emid" id="educ-id">

                                                
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"> Delete</button>
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"> Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for deleting educational background -->
                    
                    <!-- /* end change jcd May 5,2022 */ -->

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



     <!-- /* start change jcd May 5,2022 */ -->
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

                $('#emid').val(data[0]);
                $('#level').val(data[1]);
                // $('#specify').val(data[2]);
                $('#name').val(data[2]);
                $('#degree').val(data[3]);
                $('#from').val(data[4]);
                $('#to').val(data[5]);
                $('#unit-earned').val(data[6]);
                $('#year-grad').val(data[7]);
                $('#honors').val(data[8]);
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

                $('#educ-id').val(data[0]);
            });
        });
    </script>
     <!-- /* end change jcd May 5,2022 */ -->