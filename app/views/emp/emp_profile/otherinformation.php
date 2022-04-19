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
                        <a href=""> <i class=" fa fa-icon fa-arrow-left"></i> </a>
                        
                    User  <small>Profile</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- start table special skills and hobby -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                    special skills and hobby
                                <button type="button"   class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#skill">Add special skills and hobby</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                 <!-- Table Div -->
                                 <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Skills And Hobby</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($data['insert_skills'] as $skills): ?>
                                            <tr class="odd">
                                                <td><?php echo $skills['ss_id'] ?></td>
                                                <td><?php echo $skills['special_skill'] ?></td>
                                                <td>
                                                    <form action="<?= site_url('Pds/delete_skill')?>" method="post" class="d-inline">
                                                        <input type="hidden" name="ss_id" value="<?= $skills['ss_id']?>">
                                                        <button class="btn-mini btn-danger">Delete</button>
                                                    </form>
                                                    
                                                    <a href="#"><button class="btn-mini btn-warning"  value="" data-bs-toggle="modal" data-bs-target="#">Edit</button></a>
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
                                <!-- end table div -->
 
                            </div>

                        </div>
                    </div>
                    <!-- end table special skills and hobby  -->




                    <!-- start table non-academic distinctions -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                non-academic distinctions
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#distinctions">Add non-academic distinctions</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                 <!-- Table Div -->
                                 <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Non-Academic Distinction</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($data['get_distinctions'] as $recognition): ?>
                                            <tr class="odd">
                                                <td><?php echo $recognition['recognition_id'] ?></td>
                                                <td><?php echo $recognition['award_desc'] ?></td>
                                                <td>
                                                    <form action="<?= site_url('Pds/delete_distinctions')?>" method="post" class="d-inline">
                                                        <input type="hidden" name="recognition_id" value="<?= $recognition['recognition_id']?>">
                                                        <button class="btn-mini btn-danger">Delete</button>
                                                    </form>
                                                    
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
                                <!-- end table div -->

                                
                            </div>

                        </div>
                    </div>
                    <!-- end table non-academic distinctions  -->



                    <!-- start table Membership in association -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Membership in association
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#membership">Add Membership in association</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                
                            </div>

                        </div>
                    </div>
                    <!-- end table Membership in association  -->




                    <!-- start table references -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                    References
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#references">Add references</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                 <!-- Table Div -->
                                 <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Telephone</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($data['get_ref'] as $ref): ?>
                                            <tr class="odd">
                                                <td><?php echo $ref['ref_id'] ?></td>
                                                <td><?php echo $ref['ref_fname'] ?></td>
                                                <td><?php echo $ref['ref_mname'] ?></td>
                                                <td><?php echo $ref['ref_lname'] ?></td>
                                                <td><?php echo $ref['ref_telno'] ?></td>
                                                <td>
                                                <form action="<?= site_url('Pds/delete_references')?>" method="post" class="d-inline">
                                                        <input type="hidden" name="references_id" value="<?= $ref['ref_id']?>">
                                                        <button class="btn-mini btn-danger">Delete</button>
                                                    </form>
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
                                <!-- end table div -->
                                
                            </div>

                        </div>
                    </div>
                    <!-- end table references  -->











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

    
<!-- modal for adding skill and hobby -->
<div class="modal fade" id="skill">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Work Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Pds/insert_skill');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Special Skill</label>
                        <input type="text" class="form-control" name="skill" placeholder="" required> 
                    </div>
                    <div class="form-actions mt-2 col-md-12">
                        <input type="hidden" name="emid" value="">                                                   
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btnskill").click(function(){
    $("#skill").load($insert_skills['special_skill']);
  });
});
</script> -->
<!-- end modal for adding skill and hobby -->


<!-- modal for non-academic distinctions -->
<div class="modal fade" id="distinctions">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Non-Academic distinctions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Pds/insert_acad_recognition');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Non-Academic distinctions</label>
                        <input type="text" class="form-control" name="distinction" placeholder="Add Non-Academic distinctions" required> 
                    </div>
                    <div class="form-actions mt-2 col-md-12">
                        <input type="hidden" name="emid" value="">                                                   
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal for non-academic distinctions -->


<!-- modal for membership -->
<div class="modal fade" id="membership">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Membership</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Pds/insert_membership');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Association Name</label>
                        <input type="text" class="form-control" name="name" placeholder="" required> 
                    </div>
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Organization Address</label>
                        <input type="text" class="form-control" name="add" placeholder="" required> 
                    </div>
                    <div class="form-actions mt-2 col-md-12">
                        <input type="hidden" name="emid" value="">                                                   
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal for adding membership -->





<!-- modal for adding references -->
<div class="modal fade" id="references">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add References</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="row" action="<?=site_url('Pds/insert_references');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="" required> 
                    </div>
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="mname" placeholder="" required> 
                    </div>
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="" required> 
                    </div>
                    <div class="form-group col-md-12 mb-2 m-t-20">
                        <label>Telephone Number</label>
                        <input type="number" class="form-control" name="tel" placeholder="" required> 
                    </div>
                    <div class="form-actions mt-2 col-md-12">
                        <input type="hidden" name="emid" value="">                                                   
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal for adding references -->
