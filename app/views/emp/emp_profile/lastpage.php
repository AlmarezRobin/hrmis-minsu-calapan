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
                        <!-- adding link to the home page which is profile -->
                        <a href="<?=site_url('Employee/');?>"> <i class=" fa fa-icon fa-arrow-left"></i></a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->
                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">

                                    <!-- start  35 of relative information  -->
                                    <?php if(isset($get_rel_info['relative_id'])): ?>
                                        <form action="<?=site_url('Pds/update_relative')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="" class="form-label">34. Are you related by consangguity of affinity to the appointing or recommending authority, or the chief of bureau or office or to the person who has immediate supervision over you in the office Bureau or department where you will be appointed.</label>
                                                    <label for="">a. within the third degree?  <strong> <?=$get_rel_info['third_degree']?>  </strong> </label>
                                                    <br>
                                                    <select name="34a" id="34ayes" class="form-control" required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                    <label for="">b. within the fourth degree (for Local Governtment Unit-career Employee's)? <strong> <?=$get_rel_info['fourth_degree']?>  </strong> </label>
                                                    <br>
                                                    <select name="34b" id="34byes" class="form-control" onchange='_34byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                        <label for="">If yes, give details</label>
                                                        <input type="text" name="34byes" id="34byestxt" onchange='_34byes()' class="form-control" hidden>
                                                        <br>
                                                        <label for="">
                                                            <?=$get_rel_info['relative_details']?>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_relative')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="" class="form-label">34. Are you related by consangguity of affinity to the appointing or recommending authority, or the chief of bureau or office or to the person who has immediate supervision over you in the office Bureau or department where you will be appointed.</label>
                                                    <label for="">a. within the third degree?   </label>
                                                    <br>
                                                    <select name="34a" id="34ayes" class="form-control" required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                    <label for="">b. within the fourth degree (for Local Governtment Unit-career Employee's)?</label>
                                                    <br>
                                                    <select name="34b" id="34byes" class="form-control" onchange='_34byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                        <label for="">If yes give details</label>
                                                        <input type="text" name="34byes" id="34byestxt" onchange='_34byes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>
                                        

                                    <?php endif; ?>
                                    <!-- end of relative information -->
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>


                        <!-- 5 start of guilty or criminally charged -->
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">
                                    <?php if(isset($get_violation_info['violation_id'])): ?>

                                        <form action="<?=site_url('Pds/update_violation')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">35. a. Have you ever been found guilty of any administrative offense? <strong><?= $get_violation_info['admin_offense']?></strong> </label>
                                                    <br>
                                                    <select name="35a" id="35ayes" class="form-control" onchange='_35ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="35ayes" id="35ayestxt" onchange='_35ayes()' class="form-control" hidden>
                                                    <br>
                                                    <label for=""><?= $get_violation_info['offense_desc']?></label>
                                                    <br>

                                                    <label for="">b. Have you been criminally charged before any court? <strong><?= $get_violation_info['criminal_charged']?></strong></label>
                                                    <br>
                                                    <select name="35b" id="35byes" class="form-control" onchange='_35byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                    <?php if($get_violation_info['criminal_charged'] === 'YES'): ?>
                                                    <div class="col-md-12" onchange='_35byes()' id="35bdetails">
                                                        <label for="">If yes, give details:</label>
                                                        <input type="text" name="detail"  class="form-control" value="<?= $get_violation_info['crime_details']?>" >
                                                        <label for="">Date Filed: </label>
                                                        <input type="date" name="35bfiled" class="form-control" value="<?= $get_violation_info['date_crime_filed']?>">
                                                        <label for="">Status of Case/s:</label>
                                                        <input type="text" name="35bstatus"  class="form-control" value="<?= $get_violation_info['criminal_case_status']?>" >
                                                    </div>
                                                    <?php else: ?>
                                                    <div class="col-md-12" onchange='_35byes()' id="35bdetails"  hidden>
                                                        <label for="">If yes, give details:</label>
                                                        <input type="text" name="detail"  class="form-control" >
                                                        <label for="">Date Filed: </label>
                                                        <input type="date" name="35bfiled" class="form-control" >
                                                        <label for="">Status of Case/s:</label>
                                                        <input type="text" name="35bstatus"  class="form-control"  >
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_violation')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">a. Have you ever been found guilty of any administrative offense? </label>
                                                    <br>
                                                    <select name="35a" id="35ayes" class="form-control" onchange='_35ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="35ayes" id="35ayestxt" onchange='_35ayes()' class="form-control" hidden>
                                                    <br>

                                                    <label for="">b. within the fourth degree (for Local Governtment Unit-career Employee's)? </label>
                                                    <br>
                                                    <select name="35b" id="35byes" class="form-control" onchange='_35byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <br>
                                                    <div class="col-md-12" onchange='_35byes()' id="35bdetails"  hidden>
                                                        <label for="">If yes give details</label>
                                                        <input type="text" name="detail"  class="form-control" >
                                                        <label for="">Date Filed: </label>
                                                        <input type="date" name="35bfiled" class="form-control" >
                                                        <label for="">Status of Case/s:</label>
                                                        <input type="text" name="35bstatus"  class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>
                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 35 start of guilty or criminally charged -->



                        <!-- 36 start of guilty or criminally charged -->
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">

                                    <?php if(isset($get_conviction_info['conviction_id'])): ?>
                                        <form action="<?=site_url('Pds/update_conviction')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal? <strong><?= $get_conviction_info['convicted'] ?></strong></label>
                                                    <br>
                                                    <select name="36yes" id="36yes" class="form-control" onchange='_36yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    
                                                    <label for="">If yes, give details:</label><strong for=""><?= $get_conviction_info['conviction_details'] ?></strong>
                                                    
                                                    <input type="text" name="36txtyes" id="36txt" onchange='_36yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_conviction')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</label>
                                                    <br>
                                                    <select name="36yes" id="36yes" class="form-control" onchange='_36yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="36txtyes" id="36txt" onchange='_36yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>
                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 36  -->





                        <!-- 37 -->
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">
                                    <?php if(isset($get_separation_info['separation_id'])):?>
                                        <form action="<?=site_url('Pds/update_separation')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">37. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector? <strong><?= $get_separation_info['separated_from_service'] ?></strong></label>
                                                    <br>
                                                    <select name="37yes" id="37yes" class="form-control" onchange='_37yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details: <strong><?= $get_separation_info['separation_desc'] ?></strong></label>
                                                    <input type="text" name="37txtyes" id="37txt" onchange='_37yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_separation')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">37. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</label>
                                                    <br>
                                                    <select name="37yes" id="37yes" class="form-control" onchange='_37yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="37txtyes" id="37txt" onchange='_37yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>



                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 37  -->



                         <!-- 38 -->
                         <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">
                                    <?php if(isset($get_candidacy_info['candidacy_id'])): ?>
                                        <form action="<?=site_url('Pds/update_candidacy')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)? <strong><?= $get_candidacy_info['political_candidate'] ?></strong></label>
                                                    <br>
                                                    <select name="38ayes" id="38ayes" class="form-control" onchange='_38ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details: <strong><?= $get_candidacy_info['candidacy_details'] ?></strong></label>
                                                    <input type="text" name="38atxtyes" id="38atxt" onchange='_38ayes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">b. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?<strong><?= $get_candidacy_info['resigned_frm_gov'] ?></strong></label>
                                                    <br>
                                                    <select name="38byes" id="38byes" class="form-control" onchange='_38byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details: <strong><?= $get_candidacy_info['resignation_desc'] ?></strong></label>
                                                    <input type="text" name="38btxtyes" id="38btxt" onchange='_38byes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_candidacy')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                    <br>
                                                    <select name="38ayes" id="38ayes" class="form-control" onchange='_38ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="38atxtyes" id="38atxt" onchange='_38ayes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                    <br>
                                                    <select name="38byes" id="38byes" class="form-control" onchange='_38byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="38btxtyes" id="38btxt" onchange='_38byes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>

                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 38  -->



                         <!-- 39 -->
                         <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">
                                    <?php if(isset($get_immigrant_info['immigrant_id'])):?>
                                        <form action="<?=site_url('Pds/update_immigrant')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">39. Have you acquired the status of an immigrant or permanent resident of another country? <strong><?= $get_immigrant_info['foreign_residency'] ?></strong></label>
                                                    <br>
                                                    <select name="39yes" id="39yes" class="form-control" onchange='_39yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes, give details: <strong><?= $get_immigrant_info['residency_details'] ?></strong> </label>
                                                    <input type="text" name="39txtyes" id="39txt" onchange='_39yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_immigrant')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">39. Have you acquired the status of an immigrant or permanent resident of another country?</label>
                                                    <br>
                                                    <select name="39yes" id="39yes" class="form-control" onchange='_39yes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="39txtyes" id="39txt" onchange='_39yes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Insert">
                                                </div>
                                            </div>
                                        </form>



                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 39  -->



                         <!-- 40 -->
                         <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSchoolInfo" aria-expanded="true"
                                    aria-controls="collapseSchoolInfo">
                                    <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                    School Information<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseSchoolInfo-disable">
                                    <?php if(isset($get_previlage_info['sp_id'])): ?>
                                        <form action="<?=site_url('Pds/update_previlage')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">40. Pusuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2020 (RA 8972), please answer the following items:</label>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">a. Are you a member of any indigenous group? <strong><?= $get_previlage_info['member_of_ig'] ?></strong></label>
                                                    <br>
                                                    <select name="40ayes" id="40ayes" class="form-control" onchange='_40ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes, please specify: <strong><?= $get_previlage_info['ig_desc'] ?></strong></label>
                                                    <input type="text" name="40atxtyes" id="40atxt" onchange='_40ayes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">b. Are you a person with disability?<strong><?= $get_previlage_info['pwd'] ?></strong></label>
                                                    <br>
                                                    <select name="40byes" id="40byes" class="form-control" onchange='_40byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes, please specify ID No: <strong><?= $get_previlage_info['pwd_id_no'] ?></strong></label>
                                                    <input type="text" name="40btxtyes" id="40btxt" onchange='_40byes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">c. Are you a solo parent?<strong><?= $get_previlage_info['solo_parent'] ?></strong></label>
                                                    <br>
                                                    <select name="40cyes" id="40cyes" class="form-control" onchange='_40cyes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes, please specify ID No:<strong><?= $get_previlage_info['solo_parent_id_number'] ?></strong></label>
                                                    <input type="text" name="40ctxtyes" id="40ctxt" onchange='_40cyes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                        
                                    <?php else: ?>
                                        <form action="<?=site_url('Pds/insert_previlage')?>" method="post" class="outer-form" autocomplete="off" id="">
                                            <div class="row">
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                    <br>
                                                    <select name="40ayes" id="40ayes" class="form-control" onchange='_40ayes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="40atxtyes" id="40atxt" onchange='_40ayes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                    <br>
                                                    <select name="40byes" id="40byes" class="form-control" onchange='_40byes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="40btxtyes" id="40btxt" onchange='_40byes()' class="form-control" hidden>
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 mb-2">
                                                    <label for="">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                    <br>
                                                    <select name="40cyes" id="40cyes" class="form-control" onchange='_40cyes();' required>
                                                        <option value="">YES/NO</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                    <label for="">If yes give details</label>
                                                    <input type="text" name="40ctxtyes" id="40ctxt" onchange='_40cyes()' class="form-control" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </form>

                                    <?php endif;?>
                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->
                        </div>
                        <!-- 40  -->












                      
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

















































    <script>
        function _34byes(){
            if (document.getElementById('34byes').value ==="YES") 
            {
                document.getElementById('34byestxt').hidden = false;
                const usernameText = document.getElementById("34byestxt").setAttribute('required','required');
            }
            else if(document.getElementById('34byes').value ==="NO")
            {
                document.getElementById('34byestxt').hidden = true;
            }
        }

        function _35ayes(){
            if (document.getElementById('35ayes').value ==="YES") 
            {
                document.getElementById('35ayestxt').hidden = false;
                const usernameText = document.getElementById("35ayestxt").setAttribute('required','required');
            }
            else if(document.getElementById('35ayes').value ==="NO")
            {
                document.getElementById('35ayestxt').hidden = true;
            }
        }
        function _35byes(){
            if (document.getElementById('35byes').value ==="YES") 
            {
                document.getElementById('35bdetails').hidden = false;
                const usernameText = document.getElementById("35bdetails").setAttribute('required','required');
            }
            else if(document.getElementById('35byes').value ==="NO")
            {
                document.getElementById('35bdetails').hidden = true;
            }
        }

        function _36yes(){
            if (document.getElementById('36yes').value ==="YES") 
            {
                document.getElementById('36txt').hidden = false;
                const usernameText = document.getElementById("36txt").setAttribute('required','required');
            }
            else if(document.getElementById('36yes').value ==="NO")
            {
                document.getElementById('36txt').hidden = true;
            }
        }

        function _37yes(){
            if (document.getElementById('37yes').value ==="YES") 
            {
                document.getElementById('37txt').hidden = false;
                const usernameText = document.getElementById("37txt").setAttribute('required','required');
            }
            else if(document.getElementById('37yes').value ==="NO")
            {
                document.getElementById('37txt').hidden = true;
            }
        }

        function _38ayes(){
            if (document.getElementById('38ayes').value ==="YES") 
            {
                document.getElementById('38atxt').hidden = false;
                const usernameText = document.getElementById("38atxt").setAttribute('required','required');
            }
            else if(document.getElementById('38ayes').value ==="NO")
            {
                document.getElementById('38atxt').hidden = true;
            }
        }

        function _38byes(){
            if (document.getElementById('38byes').value ==="YES") 
            {
                document.getElementById('38btxt').hidden = false;
                const usernameText = document.getElementById("38btxt").setAttribute('required','required');
            }
            else if(document.getElementById('38byes').value ==="NO")
            {
                document.getElementById('38btxt').hidden = true;
            }
        }



        function _39yes(){
            if (document.getElementById('39yes').value ==="YES") 
            {
                document.getElementById('39txt').hidden = false;
                const usernameText = document.getElementById("39txt").setAttribute('required','required');
            }
            else if(document.getElementById('39yes').value ==="NO")
            {
                document.getElementById('39txt').hidden = true;
            }
        }







        function _40ayes(){
            if (document.getElementById('40ayes').value ==="YES") 
            {
                document.getElementById('40atxt').hidden = false;
                const usernameText = document.getElementById("40atxt").setAttribute('required','required');
            }
            else if(document.getElementById('40ayes').value ==="NO")
            {
                document.getElementById('40atxt').hidden = true;
            }
        }

        function _40byes(){
            if (document.getElementById('40byes').value ==="YES") 
            {
                document.getElementById('40btxt').hidden = false;
                const usernameText = document.getElementById("40btxt").setAttribute('required','required');
            }
            else if(document.getElementById('40byes').value ==="NO")
            {
                document.getElementById('40btxt').hidden = true;
            }
        }

        function _40cyes(){
            if (document.getElementById('40cyes').value ==="YES") 
            {
                document.getElementById('40ctxt').hidden = false;
                const usernameText = document.getElementById("40ctxt").setAttribute('required','required');
            }
            else if(document.getElementById('40cyes').value ==="NO")
            {
                document.getElementById('40ctxt').hidden = true;
            }
        }













        

    







    </script>
    