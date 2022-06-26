<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . "views/emp/includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . "views/emp/includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . "views/emp/includes/sidebar.php"); ?>
            <!-- end side bar -->



            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Locator </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Create <small>Locator</small></h5>
                </div>
                <!-- end title -->
                


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>
                        
                        <div class="col-md-12 p-2 float-sm-start">
                            <div class="row">
                                <div class="col-md-6">
                                    <small>Your Application</small>
                                </div>
                                <div class="col-md-6 ">
                                    <small class="float-sm-end ">Progress 50%</small>
                                </div>
                                <div class="col-md-12">
                                    <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 50%;">Hr</div>
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%;">CED</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-plus"></i></span>
                                    Create Your Locator Slip<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                    <form action="<?=site_url('Locator/file_locator');?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">Departure Time:</small>
                                                <input type="time" name="dep_time" class="form-control form-control-sm mb-2" placeholder="" maxlength="50" size="50" data-toggle="tooltip"data-placement="right" title="Depature Time" required>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">Location</small>
                                                <input type="text" name="location"class="form-control form-control-sm mb-2" placeholder=""maxlength="30" size="30" data-toggle="tooltip"data-placement="right" title="Location" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                            <small class="form-text text-muted">
                                                Reason:
                                            </small>
                                           <textarea name="reason" id="" class="form-control form-control-sm" placeholder="Please State your reason."></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">Arrival Time:</small>
                                                <input type="time" name="arrival"class="form-control form-control-sm mb-2" placeholder="" maxlength="50" size="50" data-toggle="tooltip" data-placement="right" title="" required>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <small class="form-text text-muted">Type </small>
                                                <select name="type" id=""class="form-control form-control-sm mb-2" 
                                                    data-toggle="tooltip"
                                                    data-placement="right" title="Locator type" required>
                                                    <option>--option--</option>
                                                    <option value="OFFICIAL">Official</option>
                                                    <option value="PERSONAL">Personal</option>
                                                </select>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input type="submit" class="btn btn-success float-end" value="save">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        


                    </div>
                    <!-- End col -->

                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . "views/emp/includes/footbar.php"); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR . "views/emp/includes/footer.php"); ?>



    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->







  <style>
    input[type=text] {
    border: none;
    border-bottom: 1px solid black;
    }
</style>










