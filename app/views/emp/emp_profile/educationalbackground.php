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

                   

                
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-plus"></i></span>
                                    Educational Background
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-d">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
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

                                                <div class="col-md-6 mb-2">
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

                                                <div class="col-md-6 mb-2">
                                                    <label>Name of School</label>
                                                    <input type="text"id="" name="name" class="form-control form-control-line" placeholder="NAME OF SCHOOL (write in full)">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label>Basic Education/Degree/Course of School</label>
                                                    <input type="text" id="" name="degree" class="form-control form-control-line" placeholder="Basic Education/Degree/Course of School (write in full)"> 
                                                </div>
                                                <div class="col-md-3 mb-2">
                                                    <label>Period of Attendace</label>
                                                    <input type="month" id="" name ="from"class="form-control form-control-line" placeholder="From">  
                                                </div>
                                                <div class="col-md-3 mb-2">
                                                    <label for=""></label>
                                                    <input type="month" id="" name="to" class="form-control form-control-line" placeholder="To"> 
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label>Highest Level Unit Earned</label>
                                                    <input type="text" id=""  name="unit_earned" class="form-control form-control-line" data-toogle="tooltip" title="HIGHEST LEVEL UNIT EARNED (if not graduated)" placeholder="">
                                                </div>
                                                <div class="col-md-6 mb-2"> 
                                                    <label>Year graduated</label>
                                                    <input type="text" id="" name="year_grad" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6 mb-2"> 
                                                    <label>Scholarship/Academic honors received</label>
                                                    <input type="text" id="" name="honors"class="form-control form-control-line" >
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="form-actions mt-2 float-sm-end col-md-12 pull-right">
                                                <input type="hidden" name="emid" value="">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> insert</button>
                                                </div>
                                            </div>
                                        </form>
                                

                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- start table for Educational Background -->
                     <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Current Rice Production Status<i class="fa fa-caret-down pull-right"></i>
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
                                                    <a href="#"><button
                                                            class="btn btn-mini btn-info">View</button></a>
                                                    <a href="#"><button
                                                            class="btn btn-mini btn-warning">Edit</button></a>
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

                    <!-- start table for Educational Background -->



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
    