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
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> <a href=""> <i class=" fa fa-solid fa-arrow-left fa-lg"></i></a>
                    &nbsp; Designation <small></small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="d-flex justify-content-center">

                            <div class="col-md-6 p-2">

                                <div class="card">
                                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                        aria-expanded="true" aria-controls="collapseTable">
                                        <span class="card-icon"><i class="fa fa-plus"></i></span>
                                        Add New Degination
                                    </div>
                                    <div class="card-body accordion-collapse collapse show" id="collapseTable-d">
                                        <?php if(isset($data['designation_id'])): ?>
                                            <form action="<?=site_url('Utility_Settings/update_designation');?>" method="POST">
                                                <input type="hidden" name="designation_id" value="<?= $data['designation_id']?>">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="f1" class="form-label">Description of Designation</label>
                                                        <input type="text" class="form-control form-control-sm" name="designation_desc" id="" value="<?= $data['designation_desc']?>" required>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Grade*</label>
                                                        <select class="form-control form-control-sm" name="salary_grade" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="<?= $data['salary_grade']?>"><?php echo $data['salary_grade'];?></option>
                                                            <option value="SALARY GRADE 1">SALARY GRADE 1</option>
                                                            <option value="SALARY GRADE 2">SALARY GRADE 2</option>
                                                            <option value="SALARY GRADE 3">SALARY GRADE 3</option>
                                                            <option value="SALARY GRADE 4">SALARY GRADE 4</option>
                                                            <option value="SALARY GRADE 5">SALARY GRADE 5</option>
                                                            <option value="SALARY GRADE 6">SALARY GRADE 6</option>
                                                            <option value="SALARY GRADE 7">SALARY GRADE 7</option>
                                                            <option value="SALARY GRADE 8">SALARY GRADE 8</option>
                                                            <option value="SALARY GRADE 9">SALARY GRADE 9</option>
                                                            <option value="SALARY GRADE 10">SALARY GRADE 10</option>
                                                            <option value="SALARY GRADE 11">SALARY GRADE 11</option>
                                                            <option value="SALARY GRADE 12">SALARY GRADE 12</option>
                                                            <option value="SALARY GRADE 13">SALARY GRADE 13</option>
                                                            <option value="SALARY GRADE 14">SALARY GRADE 14</option>
                                                            <option value="SALARY GRADE 15">SALARY GRADE 15</option>
                                                            <option value="SALARY GRADE 16">SALARY GRADE 16</option>
                                                            <option value="SALARY GRADE 17">SALARY GRADE 17</option>
                                                            <option value="SALARY GRADE 18">SALARY GRADE 18</option>
                                                            <option value="SALARY GRADE 19">SALARY GRADE 19</option>
                                                            <option value="SALARY GRADE 20">SALARY GRADE 20</option>
                                                            <option value="SALARY GRADE 21">SALARY GRADE 21</option>
                                                            <option value="SALARY GRADE 22">SALARY GRADE 22</option>
                                                            <option value="SALARY GRADE 23">SALARY GRADE 23</option>
                                                            <option value="SALARY GRADE 24">SALARY GRADE 24</option>
                                                            <option value="SALARY GRADE 25">SALARY GRADE 25</option>
                                                            <option value="SALARY GRADE 26">SALARY GRADE 26</option>
                                                            <option value="SALARY GRADE 27">SALARY GRADE 27</option>
                                                            <option value="SALARY GRADE 28">SALARY GRADE 28</option>
                                                            <option value="SALARY GRADE 29">SALARY GRADE 29</option>
                                                            <option value="SALARY GRADE 30">SALARY GRADE 30</option>
                                                            <option value="SALARY GRADE 31">SALARY GRADE 31</option>
                                                            <option value="SALARY GRADE 32">SALARY GRADE 32</option>
                                                            <option value="SALARY GRADE 33">SALARY GRADE 33</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary rate category*</label>
                                                        <select class="form-control form-control-sm" name="salary_rate_cat" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required value="<?= $data['salary_rate_cat']?>">
                                                            <option value="<?= $data['salary_rate_cat']?>"><?= $data['salary_rate_cat']?></option>
                                                            <option value="MONTHLY">Monthly</option>
                                                            <option value="DAILY">Daily</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Rate Amount*</label>
                                                        <input type="number" class="form-control form-control-sm" name="salary_rate_amount" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required value="<?= $data['salary_rate_amount']?>">
                                                            <div class="Invalid-feedback">
                                                                <?php echo $this->session->flashdata(''); ?>

                                                            </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-sm btn-success pull-right"
                                                            name="submit" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                        <?php else: ?>
                                            <form action="<?=site_url('Utility_Settings/add_designation');?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="f1" class="form-label">Description of Designation</label>
                                                        <input type="text" class="form-control form-control-sm" name="designation_desc" id="" required>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="gender" class="form-label">Salary Grade*</label>
                                                        <select class="form-control form-control-sm" name="salary_grade" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="SALARY GRADE 1">SALARY GRADE 1</option>
                                                            <option value="SALARY GRADE 2">SALARY GRADE 2</option>
                                                            <option value="SALARY GRADE 3">SALARY GRADE 3</option>
                                                            <option value="SALARY GRADE 4">SALARY GRADE 4</option>
                                                            <option value="SALARY GRADE 5">SALARY GRADE 5</option>
                                                            <option value="SALARY GRADE 6">SALARY GRADE 6</option>
                                                            <option value="SALARY GRADE 7">SALARY GRADE 7</option>
                                                            <option value="SALARY GRADE 8">SALARY GRADE 8</option>
                                                            <option value="SALARY GRADE 9">SALARY GRADE 9</option>
                                                            <option value="SALARY GRADE 10">SALARY GRADE 10</option>
                                                            <option value="SALARY GRADE 11">SALARY GRADE 11</option>
                                                            <option value="SALARY GRADE 12">SALARY GRADE 12</option>
                                                            <option value="SALARY GRADE 13">SALARY GRADE 13</option>
                                                            <option value="SALARY GRADE 14">SALARY GRADE 14</option>
                                                            <option value="SALARY GRADE 15">SALARY GRADE 15</option>
                                                            <option value="SALARY GRADE 16">SALARY GRADE 16</option>
                                                            <option value="SALARY GRADE 17">SALARY GRADE 17</option>
                                                            <option value="SALARY GRADE 18">SALARY GRADE 18</option>
                                                            <option value="SALARY GRADE 19">SALARY GRADE 19</option>
                                                            <option value="SALARY GRADE 20">SALARY GRADE 20</option>
                                                            <option value="SALARY GRADE 21">SALARY GRADE 21</option>
                                                            <option value="SALARY GRADE 22">SALARY GRADE 22</option>
                                                            <option value="SALARY GRADE 23">SALARY GRADE 23</option>
                                                            <option value="SALARY GRADE 24">SALARY GRADE 24</option>
                                                            <option value="SALARY GRADE 25">SALARY GRADE 25</option>
                                                            <option value="SALARY GRADE 26">SALARY GRADE 26</option>
                                                            <option value="SALARY GRADE 27">SALARY GRADE 27</option>
                                                            <option value="SALARY GRADE 28">SALARY GRADE 28</option>
                                                            <option value="SALARY GRADE 29">SALARY GRADE 29</option>
                                                            <option value="SALARY GRADE 30">SALARY GRADE 30</option>
                                                            <option value="SALARY GRADE 31">SALARY GRADE 31</option>
                                                            <option value="SALARY GRADE 32">SALARY GRADE 32</option>
                                                            <option value="SALARY GRADE 33">SALARY GRADE 33</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="" class="form-label">Salary rate category*</label>
                                                        <select class="form-control form-control-sm" name="salary_rate_cat" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
                                                            <option value="MONTHLY">Monthly</option>
                                                            <option value="DAILY">Daily</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="" class="form-label">Salary Rate Amount*</label>
                                                        <input type="number" class="form-control form-control-sm" name="salary_rate_amount" id=""
                                                            data-toggle="tooltip" data-placement="right" title=""
                                                            required>
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