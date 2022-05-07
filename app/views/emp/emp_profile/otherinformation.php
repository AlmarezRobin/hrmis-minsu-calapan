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

                        User <small>Profile</small>
                    </h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- start table special skills and hobby -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                special skills and hobby
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#skill">Add special skills and hobby</button>
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
                                            <?php foreach ($data['insert_skills'] as $skills) : ?>
                                                <tr class="odd">
                                                    <td><?php echo $skills['ss_id'] ?></td>
                                                    <td><?php echo $skills['special_skill'] ?></td>
                                                    <td>
                                                        <form action="<?= site_url('Pds/delete_skill') ?>" method="post" class="d-inline">
                                                            <input type="hidden" name="ss_id" value="<?= $skills['ss_id'] ?>">
                                                            <button class="btn-mini btn-danger">Delete</button>
                                                        </form>

                                                        <button class="btn-mini btn-warning edit-skill-btn" value="" data-bs-toggle="modal" data-bs-target="edit-skill">Edit</button>
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
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
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
                                            <?php foreach ($data['get_distinctions'] as $recognition) : ?>
                                                <tr class="odd">
                                                    <td><?php echo $recognition['recognition_id'] ?></td>
                                                    <td><?php echo $recognition['award_desc'] ?></td>
                                                    <td>
                                                        <form action="<?= site_url('Pds/delete_distinctions') ?>" method="post" class="d-inline">
                                                            <input type="hidden" name="recognition_id" value="<?= $recognition['recognition_id'] ?>">
                                                            <button class="btn-mini btn-danger">Delete</button>
                                                        </form>
                                                        <button class="btn-mini btn-warning edit-recog-btn" value="" data-bs-toggle="modal" data-bs-target="edit-recog">Edit</button>

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
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Membership in association
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#membership">Add Membership in association</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                <table class="table table-bordered table-hover table-sm mb-0">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Association/Organization Name</th>
                                            <th>Association/Organization Address</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($data['get_membership'] as $member) : ?>
                                            <tr class="odd">
                                                <td><?php echo $member['membership_id'] ?></td>
                                                <td><?php echo $member['assoc_name'] ?></td>
                                                <td><?php echo $member['org_address'] ?></td>
                                                <td>
                                                    <form action="<?= site_url('Pds/delete_membership') ?>" method="post" class="d-inline">
                                                        <input type="hidden" name="membership_id" value="<?= $member['membership_id'] ?>">
                                                        <button class="btn-mini btn-danger">Delete</button>
                                                    </form>
                                                    <button class="btn-mini btn-warning edit-member-btn" value="" data-bs-toggle="modal" data-bs-target="edit-member">Edit</button>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- end table Membership in association  -->




                    <!-- start table references -->
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
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
                                                <th>Address</th>
                                                <th>Telephone</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($data['get_ref'] as $ref) : ?>
                                                <tr class="odd">
                                                    <td><?php echo $ref['ref_id'] ?></td>
                                                    <td><?php echo $ref['ref_fname'] ?></td>
                                                    <td><?php echo $ref['ref_mname'] ?></td>
                                                    <td><?php echo $ref['ref_lname'] ?></td>
                                                    <td><?php echo $ref['ref_add'] ?></td>
                                                    <td><?php echo $ref['ref_telno'] ?></td>
                                                    <td>
                                                        <form action="<?= site_url('Pds/delete_references') ?>" method="post" class="d-inline">
                                                            <input type="hidden" name="references_id" value="<?= $ref['ref_id'] ?>">
                                                            <button class="btn-mini btn-danger">Delete</button>
                                                        </form>
                                                        <button class="btn-mini btn-warning edit-ref-btn" value="" data-bs-toggle="modal" data-bs-target="edit-references">Edit</button>
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

    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |-----------------------------MODALS FOR SKILSS AND HOBBY--------------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->

    <!-- modal for adding skill and hobby -->
    <div class="modal fade" id="skill">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Special Skill</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" action="<?= site_url('Pds/insert_skill'); ?>" method="post" enctype="multipart/form-data">
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
    <!-- end modal for adding skill and hobby -->

    <!-- modal for updating skill and hobby -->
    <div class="modal fade" id="edit-skill">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Special Skill</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" action="<?= site_url('Pds/update_skill'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="sps_id" name="sps_id">
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Special Skill</label>
                            <input type="text" id="spe-skill" class="form-control" name="skill" placeholder="" required>
                        </div>
                        <div class="form-actions mt-2 col-md-12">

                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end modal for updating skill and hobby -->

    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |-----------------------END MODALS FOR SKILSS AND HOBBY----------------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->

    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |-----------------------MODALS FOR NON-ACADEMIC DISTINCTION------------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->

    <!-- inserting non-academic distinctions -->
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
                    <form class="row" action="<?= site_url('Pds/insert_acad_recognition'); ?>" method="post" enctype="multipart/form-data">
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
    <!-- end inserting non-academic distinctions -->


    <!-- updating non-academic distinctions -->
    <div class="modal fade" id="edit-recog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Non-Academic distinctions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" action="<?= site_url('Pds/update_acad_recognition'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="recog_id" name="recognition_id">
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Non-Academic distinctions</label>
                            <input type="text" class="form-control" id="recog" name="distinction" placeholder="Update Non-Academic distinctions" required>
                        </div>
                        <div class="form-actions mt-2 col-md-12">
                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end updating non-academic distinctions -->
    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |-----------------------END MODALS FOR NON-ACADEMIC DISTINCTION--------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->


    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |----------------MODALS FOR ORGANIZATION/ASSOCIATION MEMBERSHIP--------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->

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
                    <form class="row" action="<?= site_url('Pds/insert_membership'); ?>" method="post" enctype="multipart/form-data">
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

    <!-- modal for updating membership -->
    <div class="modal fade" id="edit-membership">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Membership</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" action="<?= site_url('Pds/update_membership'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="org-id" name="org_id">
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Association Name</label>
                            <input type="text" class="form-control" id="org-name" name="name" placeholder="" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Organization Address</label>
                            <input type="text" class="form-control" id="org-add" name="add" placeholder="" required>
                        </div>
                        <div class="form-actions mt-2 col-md-12">
                            <input type="hidden" name="emid" value="">
                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal for updating membership -->

    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |----------------END MODALS FOR ORGANIZATION/ASSOCIATION MEMBERSHIP----------------| -->
    <!-- |----------------------------------------------------------------------------------| -->





    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |----------------------------- MODALS FOR REFERENCES-------------------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->

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
                    <form class="row" action="<?= site_url('Pds/insert_references'); ?>" method="post" enctype="multipart/form-data">
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
                            <label>Address</label>
                            <input type="text" class="form-control" name="add" placeholder="" required>
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

    <!-- modal for updating references -->
    <div class="modal fade" id="edit-references">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update References</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" action="<?= site_url('Pds/update_references'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="ref-id" name="ref_id">
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Address</label>
                            <input type="text" class="form-control" id="ref-add" name="add" placeholder="" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 m-t-20">
                            <label>Telephone Number</label>
                            <input type="number" class="form-control" id="tel" name="tel" placeholder="" required>
                        </div>
                        <div class="form-actions mt-2 col-md-12">
                            <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal for updating references -->

    <!-- |----------------------------------------------------------------------------------| -->
    <!-- |----------------------------- END MODALS FOR REFERENCES---------------------------| -->
    <!-- |----------------------------------------------------------------------------------| -->



    <!-- /* start change jcd May 6, 2022 */ -->
    <!-- |---------------------------------------------------------------------------------------| -->
    <!-- |--------------------------------------SCRIPTS------------------------------------------| -->
    <!-- |---------------------------------------------------------------------------------------| -->

    <!-- update special skill -->
    <script>
        $(document).ready(function() {

            $('.edit-skill-btn').on('click', function() {

                $('#edit-skill').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#sps_id').val(data[0]);
                $('#spe-skill').val(data[1]);
            });
        });
    </script>
    <!-- end update special skill -->


    <!-- update non-acad recognition -->
    <script>
        $(document).ready(function() {

            $('.edit-recog-btn').on('click', function() {

                $('#edit-recog').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#recog_id').val(data[0]);
                $('#recog').val(data[1]);
            });
        });
    </script>
    <!-- end update non-acad recognition -->

    <!-- update membership -->
    <script>
        $(document).ready(function() {

            $('.edit-member-btn').on('click', function() {

                $('#edit-membership').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#org-id').val(data[0]);
                $('#org-name').val(data[1]);
                $('#org-add').val(data[2]);
            });
        });
    </script>
    <!-- end update membership -->

    <!-- update references -->
    <script>
        $(document).ready(function() {

            $('.edit-ref-btn').on('click', function() {

                $('#edit-references').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ref-id').val(data[0]);
                $('#fname').val(data[1]);
                $('#mname').val(data[2]);
                $('#lname').val(data[3]);
                $('#ref-add').val(data[4]);
                $('#tel').val(data[5]);
            });
        });
    </script>
    <!-- end update references -->









    <!-- |---------------------------------------------------------------------------------------| -->
    <!-- |-------------------------------------END SCRIPTS---------------------------------------| -->
    <!-- |---------------------------------------------------------------------------------------| -->
    <!-- /* end change jcd May 6, 2022 */ -->