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

                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">

                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-th"></i></span>
                                    Leave
                                    <button type="button" class="btn btn-mini btn-success float-sm-end" data-bs-toggle="modal" data-bs-target="#addloc">New Leave</button>
                                    <!-- <i class="fa fa-caret-down pull-right"></i> -->
                                </div>
                                <div><!-- <div class="card-body accordion-collapse collapse show p-0" id="collapseTable"> -->

                                    <!-- Table Div -->
                                    <div class="table-responsive">
                                        <!-- Table -->
                                        <table class="table table-bordered table-hover table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>type_of_leave</th>
                                                    <th>details_of_leave</th>
                                                    <th>details_desc</th>
                                                    <th>no_days_applied</th>
                                                    <th>From_date</th>
                                                    <th>To_date</th>
                                                    <th>commutation</th>
                                                    <th>Date Filed</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($get_myleave as $leave): ?>
                                                <tr class="odd">
                                                    <td><?php echo $leave['type_of_leave'] ?></td>
                                                    <td><?php echo $leave['details_of_leave'] ?></td>
                                                    <td><?php echo $leave['details_desc'] ?></td>
                                                    <td><?php echo $leave['no_days_applied'] ?></td>
                                                    <td><?php echo $leave['from_date'] ?></td>
                                                    <td><?php echo $leave['to_date'] ?></td>
                                                    <td><?php echo $leave['commutation'] ?></td>
                                                    <td><?php echo $leave['date_filed'] ?></td>
                                                    <td><?php echo $leave['status'] ?></td>
                                                    <td>
                                                    <a href="#"><button class="btn btn-mini btn-info">Export</button></a>
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
                                    <!-- End Table Div -->

                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->

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



    <style>
    input[type=text] {
    border: none;
    border-bottom: 1px solid black;
    }
</style>





<div class="modal fade" id="addloc" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Application For Leave</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="<?=site_url('Leave/file_leave');?>" method="post" class="outer-form" autocomplete="off" >
                <!-- Modal body -->
                <div class="modal-body">
                        <center><h6>DETAILS OF APPLICATION</h6></center>

                        <input type="text" name="dept" value="<?= $emp_profile['dept_id'] ?>">
                        <input type="text" name="desig" value="<?= $emp_profile['designation_id'] ?>">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="" class="form-label"> TYPE OF LEAVE TO BE AVAIL OF:</label>
                                <select class="form-control form-control-sm" name="type"  id="leavetype" onchange="myFunction()"  data-toggle="tooltip" data-placement="right" title=""required>
                                    <option value="">Type</option>
                                    <?php foreach($leave_type as $l): ?>
                                        <option value="<?= $l['leave_desc'] ?>"><?php echo $l['leave_desc'] ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <p class="mt-2">DETAILS OF LEAVE:</p>
                                <select class="form-control form-control-sm" name="details"  id="details" onchange="myFunction()"  data-toggle="tooltip" data-placement="right" title=""required>
                                    <option value="">Type</option>
                                    <option value="Within the Philippines">Within the Philippines</option>
                                    <option value="Abroad">Abroad</option>
                                    <option value="In Hospital ">In Hospital</option>
                                    <option value="Out Patient ">Out Patient</option>
                                    <option value="Completion of Master's Degree">Completion of Master's Degree</option>
                                    <option value="BAR/Board Examination Review Other ">BAR/Board Examination Review Other </option>
                                    <option value="Monetization of Leave Credits">Monetization of Leave Credits</option>
                                    <option value="Terminal Leave ">Terminal Leave</option>
                                </select>
                                <label for="">Specify</label>
                                <input type="text" name="specify" id="" class="form-control form-control-sm">
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="col-md-12 mb-2">
                                    <label for="">NUMBER OF WORKING DAYS APPLIED FOR:</label>
                                    <input type="number" name="no_days_applied_for" id="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">:</label>INCLUSIVE DATES: <br>
                                    <small>From Date</small>
                                    <input type="date" name="from" id="" class="form-control form-control-sm">
                                    <small>To Date</small>
                                    <input type="date" name="to" id="" class="form-control form-control-sm">
                                </div>
                                <hr>
                                <label for="">COMMUTATION</label>
                                <div class="col-md-12 mb-1">
                                    <select class="form-control form-control-sm" name="commutation"  id="leavetype" onchange="myFunction()"  data-toggle="tooltip" data-placement="right" title=""required>
                                        <option value="">----</option>
                                        <option value="Not Requested">Not Requested</option>
                                        <option value="Requested">Requested</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <input type="submit"  class="btn btn-success"value="SUBMIT">
                </div>
            </form>

        </div>
    </div>
</div>



<!-- 
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave"  value="VACATION LEAVE" id="">
    <label for=""><strong> Vacation Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="MANDATORY/FORCED LEAVE" id="">
    <label for=""><strong> Mandatory/Forced Leave </strong></label><small> (Sec, 25, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="SICK LEAVE" id="">
    <label for=""><strong> Sick Leave </strong></label><small> (Sec, 43, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="MATERNITY LEAVE" id="">
    <label for=""><strong> Maternity Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="PATERNITY LEAVE" id="">
    <label for=""><strong> Paternity Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="SPECIAL PRIVILEGE LEAVE" id="">
    <label for=""><strong> Special Privilege Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="SOLO PARENT LEAVE" id="">
    <label for=""><strong> Solo Parent Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="STUDY LEAVE" id="">
    <label for=""><strong> Study Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="10-DAY VAWC LEAVE" id="">
    <label for=""><strong> 10-Day VAWC Leave </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <input type="radio" name="type_of_leave" value="REHABILITATION PRIVILEGE" id="">
    <label for="" ><strong> Rehabilitation Privilege </strong></label><small> (Sec, 51, Rule XVI, Omnibus Rules Implementing E.O No.292)</small>
</div>
<div class="col-md-6 mb-1">
    <label for="">Others</label>
    <input type="text" name="type_of_leave" value="" id="" class="form-control form-control-sm">
</div>


<label for=""><strong><i>In case of Vacation/Specil Privilege Leave:</i></strong></label>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave"  value="within the philippines" id=""> <label for="">Within the philipines</label>
                                    <input type="text" name="details" id="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave"  value="Abroad" id=""> <label for="">Abroad (Specify)</label>
                                    <input type="text" name="details" id="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-12 mb-2 mt-3">
                                    <label for=""><strong><i>In case of Special Leave Benefits for Women</i></strong></label>
                                    <input type="text" name="details" id="" class="form-control form-control-sm">
                                    <small>Specify illness</small>
                                </div>
                                <hr>
                                <label for=""><strong><i> In case of Vacation/Specil Privilege Leave:</i></strong></label>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave" value="Completion of Master's Degree" id=""> <label for="">Completion of Master's Degree</label>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave" value="Bar/Board Exam Review" id=""> <label for="">Bar/Board Exam Review</label>
                                </div>
                                <label for=""><strong><i>Other Purpose</i></strong></label>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave" value="Monetilization Leave Credits" id=""> <label for="">Monetilization Leave Credits</label>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <input type="radio" name="details_of_leave" value="Terminal Leave" id=""> <label for="">Terminal Leave</label>
                                </div>


 -->







