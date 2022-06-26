<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once("includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once("includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once("includes/sidebar.php"); ?>
            <!-- end side bar -->



            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Student </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Locator <small>Request_model</small></h5>
                </div>
                <!-- end title -->


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>
                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card p-5">

                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <p class="float-sm-end"  style="margin-right:2em;"> _____________2022</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="float-sm-end" style="margin-right:6em;"> Date</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3><strong>PERSONEL LOCATOR SLIP</strong></h3>
                                    </div>
                                    <div class="col-md-12">
                                        <p>The undersigned to leave his/her post at ___ o'clock am/pm today. He/She shall be at ___</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p>For the following reason:</p>
                                    </div>

                                    <div class="col-md-12">
                                        <p><strong> sample reason Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, laborum. Nulla, corrupti ipsa voluptatum delectus tenetur sequi, iste eos qui exercitationem ullam deleniti fugit autem quam deserunt repellat sapiente ut. </strong></p>
                                    </div>


                                    <div class="col-md-12 text-center mb-3">
                                        <p>The Expected time of return is ____________________o'clock am/pm</p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h6>Approved</h6>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            _________________________________
                                            <h6>Signature over Printed Name</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" name="" id="" readonly>
                                        <label for="">Official</label>
                                        <input type="checkbox" name="" id="" readonly>
                                        <label for="">Personal</label>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            
                                        </div>
                                        <div class="col-md-6 text-center">
                                            _________________________________
                                            <h6>Designation</h6>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="row">
                                <div class="col-md-12 text-center">
                                        <h3><strong>DR. MA. ARLYN M. REDUBLO</strong></h3>
                                        _____________________________________________________________________________________
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <a href="#"><button class="btn btn-success btn-sm">ACCEPT</button></a>
                                    </div>
                                    <div class="col-md-6  text-center">
                                        <a href="#"><button class="btn btn-warning btn-sm">REJECT</button></a>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- End card -->

                        </div>
                        <!-- End Col-12 -->


                    </div>
                    <!-- End col -->

                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once("includes/footbar.php"); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once("includes/footer.php"); ?>
