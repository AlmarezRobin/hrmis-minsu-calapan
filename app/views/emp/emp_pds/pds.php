<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes\head.php'); ?>
<link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR ?>/pds/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR ?>/pds/pds.css">

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . 'views/emp/includes\sidebar.php'); ?>
            <!-- end side bar -->
            <!-- // * commented jcd april 23, 2022 -->
            <!-- <button id="print" onclick="print_pds()">
                Print
            </button>
            <script>
                function print_pds(){
                    window.print();
                }
            </script> -->
            <!-- // * commented jcd april 23, 2022 -->
            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> USER PROFILE
                    </h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>
                        <?php

                        require_once(APP_DIR . 'vendor/autoload.php');

                        use PhpOffice\PhpSpreadsheet\Spreadsheet;
                        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

                        $spreadsheet = new Spreadsheet();
                        $sheet = $spreadsheet->getActiveSheet();
                        $sheet->setCellValue('A1', 'Hello World !');

                        $writer = new Xlsx($spreadsheet);
                        $writer->save('hello world.xlsx');

                        ?>



                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR . 'views/emp/includes\footer.php'); ?>