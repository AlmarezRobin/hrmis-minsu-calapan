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
            <?php require_once(APP_DIR . 'views/emp/emp_profile/sidebar.php'); ?>
            <!-- end side bar -->

            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Program </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Program <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-3 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-plus"></i></span>
                                    Add Rice Crop Production<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                    <form action="<?=site_url('Employee/insert_child');?>" method="POST">


                                        <div class="row">
                                            
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Given Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="fname" id="" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Middle Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="mname" id="" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Last Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="lname" id="" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Name Extension* 
                                                <small class="form-text text-muted">ex: (Sr., Jr., I, II, etc.) leave it blank if none</small>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" name="xname" id="" >
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Birth Date*</label>
                                                <input type="date" class="form-control form-control-sm" name="bday" id="" required>
                                            </div>
                                            
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-sm btn-success pull-right"
                                                    name="submit" value="Add New New Child">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 p-2 float-sm-start">
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
                                                    <th>First name</th>
                                                    <th>Middle name</th>
                                                    <th>Last name</th>
                                                    <th>Name extension</th>
                                                    <th>Birthday</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($data as $datum): ?>

                                                <tr class="odd">
                                                    <td><?php echo $datum['child_id'] ?></td>
                                                    <td><?php echo $datum['fname'] ?></td>
                                                    <td><?php echo $datum['mname'] ?></td>
                                                    <td><?php echo $datum['lname'] ?></td>
                                                    <td><?php echo $datum['xname'] ?></td>
                                                    <td><?php echo $datum['bday'] ?></td>
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
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                        <!-- End Table -->

                                    </div>

                                </div>

                            </div>
                        </div>
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
    