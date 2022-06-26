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
                        <li class="breadcrumb-item"> Leave </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> File <small>Leave</small></h5>
                </div>
                <!-- end title -->


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>
                        <form action="" method="post" class="outer-form" autocomplete="off" >
                             <!-- col -->
                            <div class="col-md-12 float-sm-start">
                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                        aria-controls="collapseSchoolInfo">
                                        <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                        Application for Leave<i class="fa fa-caret-down pull-right"></i>
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">

                                        <div class="row">
                                            <div class="col-md-3 mb-2">
                                                <label for="status" class="form-label">Office/Department*</label>
                                                <select name="" id="" class="form-control form-control-sm">
                                                    <option value="">option1</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    <!-- New Student or Transferee -->
                                                </small>
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="yearlevel" class="form-label">Surname*</label>
                                                <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Last name">
                                                <small class="form-text text-muted">
                                                    Last name
                                                </small>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="yearlevel" class="form-label">Surname*</label>
                                                <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Last name">
                                                <small class="form-text text-muted">
                                                    Last name
                                                </small>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="yearlevel" class="form-label">Surname*</label>
                                                <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Last name">
                                                <small class="form-text text-muted">
                                                    Last name
                                                </small>
                                            </div>
                                        </div>
                                        <hr>
                                        <center><h6>DETAILS OF APPLICATION</h6></center>
                                        <p>TYPE OF LEAVE TO BE AVAIL OF:</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Vacation Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Mandatory/Forced Leave </strong></label><small> (Sec, 25, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Sick Leave </strong></label><small> (Sec, 43, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Maternity Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Paternity Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Special Privilege Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Solo Parent Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> Study Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for=""><strong> 10-Day VAWC Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label for="" ><strong> Rehabilitation Privilege </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="">Others</label>
                                                <input type="text" name="" id="" class="form-control form-control-sm">
                                            </div>
                                            
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                             <p class="mt-2">DETAILS OF LEAVE:</p>

                                                <label for=""><strong><i>In case of Vacation/Specil Privilege Leave:</i></strong></label>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                    <input type="text" name="" id="" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                    <input type="text" name="" id="" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-3">
                                                    <label for=""><strong><i>In case of Special Leave Benefits for Women</i></strong></label>
                                                    <input type="text" name="" id="" class="form-control form-control-sm">
                                                </div>
                                                <hr>
                                                <label for=""><strong><i> In case of Vacation/Specil Privilege Leave:</i></strong></label>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                </div>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                </div>
                                                <label for=""><strong><i>Other Purpose</i></strong></label>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                </div>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Within the philipines</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <div class="col-md-12 mb-2">
                                                    <label for="">NUMBER OF WORKING DAYS APPLIED FOR:</label>
                                                    <input type="text" name="" id="" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="">:</label>INCLUSIVE DATES:
                                                    <input type="text" name="" id="" class="form-control form-control-sm">
                                                </div>
                                                <hr>
                                                <label for="">COMMUTATION</label>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Not Requested</label>
                                                </div>
                                                <div class="col-md-12 mb-1">
                                                    <input type="checkbox" name="" id=""> <label for="">Requested</label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- <hr> -->
                                        <!-- <center><h6>DETAILS OF ACTION APPLICATION</h6></center>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <p class="mt-2">CERTIFICATE OF LEAVE CREDITS </p>
                                                <small>As of</small>
                                                <table  class="table-bordered" width="100%">
                                                    <tr>
                                                        <th></th>
                                                        <th>Vacation Leave</th>
                                                        <th>Sick leave</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Earned</td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Less this application</td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Balance</td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                        <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
                                                    </tr>

                                                </table>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="">RECOMMENDATION</label>
                                                <div class="col-md-12 mb-1 m-3">
                                                    <input type="checkbox" name="" id=""> <label for="">Not Requested</label>
                                                </div>
                                                <div class="col-md-12 mb-1 m-3">
                                                    <input type="checkbox" name="" id=""> <label for="">Requested</label>
                                                    
                                                </div>
                                                <div class="col-md-12 mb-1 m-3">
                                                    <textarea name="" id="" class="form-control form-control-sm"></textarea>
                                                    
                                                </div>

                                            </div>
                                            <hr>
                                        </div> -->
                                        

                                       

                                    </div>
                                    <!-- End Card Body -->
                                </div>
                                <!-- End card -->
                            </div>
<!-- end col- -->
                        </form>

                        


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



    <style>
    input[type=text] {
    border: none;
    border-bottom: 1px solid black;
    }
</style>




















