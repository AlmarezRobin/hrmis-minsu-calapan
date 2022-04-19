<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/hr/includes/head.php'); ?>

<body class="d-flex flex-column h-100">
    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/hr/includes/topbar.php'); ?>
    <!-- end topbar -->
        <!-- Container - Fluid -->
        <div class="container-fluid pt-5">
            <!-- Row -->
            <div class="row">
                <!-- sidebar -->
                <?php require_once(APP_DIR . 'views/hr/includes/sidebar.php'); ?>
                <!-- end side bar -->
            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">
                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a>
                    &nbsp;Deductions <small></small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="d-flex justify-content-center">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable" >
                                    <span class="card-icon"><i class="fa fa-plus"></i></span>
                                    Add New Deductions
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-d">
                                    <?php if(isset($data['deduction_id'])): ?>
                                        <form action="<?=site_url('Utility_Settings/update_deduction');?>" method="POST">
                                            <input type="hidden" name="deduction_id" value="<?= $data['deduction_id']?>">
                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Deduction Name</label>
                                                    <input type="text" class="form-control form-control-sm" name="deduction_name" id="" value="<?= $data['deduction_name']?>" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Base Amount</label>
                                                    <input type="text" class="form-control form-control-sm" name="deduction_base_amount" id="" value="<?= $data['deduction_base_amount']?>" required>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-sm btn-success pull-right"
                                                            name="submit" value="Update">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Utility_Settings/add_deduction');?>" method="POST">
                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Deduction Name</label>
                                                    <input type="text" class="form-control form-control-sm" name="deduction_name" id="" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="f1" class="form-label">Base Amount</label>
                                                    <input type="text" class="form-control form-control-sm" name="deduction_base_amount" id="" required>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right"
                                                        name="submit" value="Add">
                                                </div>
                                            </div>
                                            
                                        </form>
                                    <?php endif; ?>
                                   

                                </div>
                            </div>
                        </div>

                       
                        <!-- END COL 12 -->
                    </div>
                </div>
                <!-- End container-fluid -->

                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/hr/includes/footbar.php'); ?>
                <!-- End Footer -->
            </main>
            <!-- End Main -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once(APP_DIR . 'views/hr/includes/footer.php'); ?>
    <script>
    function consent() {
        //CONSENT
        var submit = document.getElementById('submit');
        var CONSENT = document.getElementById('CONSENT');
        if (CONSENT.checked) {
            submit.disabled = false;
        } else {
            submit.disabled = true;
        }
    }

    function CopyAdd() {

        var BRTHHOUSENO = document.getElementById('BRTHHOUSENO');
        var BRTHSTREET = document.getElementById('BRTHSTREET');
        var BRTHBRGY = document.getElementById('BRTHBRGY');
        var BRTHTOWN = document.getElementById('BRTHTOWN');
        var BRTHZIPCODE = document.getElementById('BRTHZIPCODE');
        var BRTHPROVINCE = document.getElementById('BRTHPROVINCE');
        var BRTHCOUNTRY = document.getElementById('BRTHCOUNTRY');

        var ADDHOUSENO = document.getElementById('ADDHOUSENO');
        var ADDSTREET = document.getElementById('ADDSTREET');
        var ADDBRGY = document.getElementById('ADDBRGY');
        var ADDTOWN = document.getElementById('ADDTOWN');
        var ADDZIPCODE = document.getElementById('ADDZIPCODE');
        var ADDPROVINCE = document.getElementById('ADDPROVINCE');
        var ADDCOUNTRY = document.getElementById('ADDCOUNTRY');

        var same = document.getElementById('same');
        if (same.checked) {
            ADDHOUSENO.value = BRTHHOUSENO.value;
            ADDSTREET.value = BRTHSTREET.value;
            ADDBRGY.value = BRTHBRGY.value;
            ADDTOWN.value = BRTHTOWN.value;
            ADDZIPCODE.value = BRTHZIPCODE.value;
            ADDPROVINCE.value = BRTHPROVINCE.value;
            ADDCOUNTRY.value = BRTHCOUNTRY.value;

        } else {
            ADDHOUSENO.value = '';
            ADDSTREET.value = '';
            ADDBRGY.value = '';
            ADDTOWN.value = '';
            ADDZIPCODE.value = '';
            ADDPROVINCE.value = '';
            ADDCOUNTRY.value = '';
        }
    }