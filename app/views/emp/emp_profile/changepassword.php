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
                        
                    User  <small>Change Password</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="d-flex justify-content-center">       
                            <div class="col-lg-6 col-xlg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="row" action="<?=site_url('Employee/changepass');?>" method="post" enctype="multipart/form-data">
                                        <?php flash_alert() /* jcd april 21, 2022 */  ?>
                                        <div class="form-group col-md-12 m-t-20">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="new_pass" id="pass1" onkeyup = 'change_pass();' required> 
                                        </div>
                                        <div class="form-group col-md-12 m-t-20">
                                            <label>Confirm Password</label>
                                            <input type="password" id="pass2"  class="form-control " onkeyup = 'change_pass();' required> 
                                        </div>
                                        <div class="form-actions col-md-12">

                                        <input type="hidden" name="emid" value="">                                                   
                                            <button type="submit"  id="btn" class="btn btn-success pull-right mt-2" onkeyup = 'change_pass();' disabled> <i class="fa fa-check"></i> Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                                
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End container-fluid -->
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
    <script type="text/javascript">
        function change_pass(){
            var pass1 = document.getElementById('pass1');
            var pass2 = document.getElementById('pass2');

            if (pass1.value == pass2.value) {
                document.getElementById('btn').disabled = false;
            }
            else{
                document.getElementById('btn').disabled = true;
            }
        }
        
        </script>