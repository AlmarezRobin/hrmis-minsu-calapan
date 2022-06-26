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
            <?php require_once(APP_DIR . 'views/emp/emp_profile/sidebar.php'); ?>
            <!-- end side bar -->

            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">

                <!-- title -->
                <div class="mt-3">
                    <h3>child infomation </h3>
                    
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Child</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="<?=site_url('Employee/insert_child');?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label for="f1" class="form-label">Child's Given Name*</label>
                                            <input type="text" class="form-control form-control-sm" name="fname" id="" required>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="f1" class="form-label">Child's Middle Name*</label>
                                            <input type="text" class="form-control form-control-sm" name="mname" id="" required>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="f1" class="form-label">Child's Last Name*</label>
                                            <input type="text" class="form-control form-control-sm" name="lname" id="" required>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="f1" class="form-label">Child's Name Extension* 
                                            <small class="form-text text-muted">ex: (Sr., Jr., I, II, etc.) leave it blank if none</small>
                                            </label>

                                            <input type="text" class="form-control form-control-sm" name="xname" id="" >
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="f1" class="form-label">Child's Birth Date*</label>
                                            <input type="date" class="form-control form-control-sm" name="bday" id="">
                                        </div>
                                        
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-sm btn-success pull-right" name="submit" value="Add New New Child">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php flash_alert() ?>
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-table"></i></span>
                                Children's Information 
                                <button type="button" class="btn btn-sm btn-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">add new child</button>
                            </div>
                            <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-d">
                                
                                <!-- Table Div -->
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table table-bordered table-hover table-sm mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First name</th>
                                                <th>Middle name</th>
                                                <th>Last name</th>
                                                <th>Name extension</th>
                                                <th>Birthday</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($get_all_child as $datum): ?>

                                            <tr class="odd">
                                                <td><?php echo $datum['child_id'] ?></td>
                                                <td><?php echo $datum['fname'] ?></td>
                                                <td><?php echo $datum['mname'] ?></td>
                                                <td><?php echo $datum['lname'] ?></td>
                                                <td><?php echo $datum['xname'] ?></td>
                                                <td><?php echo $datum['bday'] ?></td>
                                                <td>
                                                    <button class="btn btn-mini btn-info update-child-btn" data-bs-toggle="modal" data-bs-target="#editmodal">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-mini btn-warning delete-child-btn"  value="" data-bs-toggle="modal" data-bs-target="#deletemodal">
                                                        Delete
                                                    </button>
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

                            </div>

                        </div>
                    </div>
                    <!-- modal for edit -->
                    <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update child information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?=site_url('Employee/update_child');?>" method="POST">
                                        <input type="hidden" id="child-id" name="child_id">
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Given Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="fname" id="fname" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Middle Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="mname" id="mname" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Last Name*</label>
                                                <input type="text" class="form-control form-control-sm" name="lname" id="lname" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Name Extension* 
                                                <small class="form-text text-muted">ex: (Sr., Jr., I, II, etc.) leave it blank if none</small>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" name="xname" id="xname" >
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="f1" class="form-label">Child's Birth Date*</label>
                                                <input type="date" class="form-control form-control-sm" name="bday" id="date">
                                            </div>
                                            
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-sm btn-success pull-right">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END COL 12 -->
                </div>

                <!-- modal for deleting eligibility -->
                <div class="modal fade" id="deletemodal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Child</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="row" action="<?= site_url('Employee/delete_child')?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="childid" name="child_id">
                                        <p class="h5">Delete this information?</p>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success pull-right"> 
                                                Delele
                                            </button>
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"> 
                                                Cancel
                                            </button>
                                        </div>
                                            
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal for deleting eligibility -->

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

<!-- update -->
<script>
    $(document).ready(function () {

        $('.update-child-btn').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#child-id').val(data[0]);
            $('#fname').val(data[1]);
            $('#mname').val(data[2]);
            $('#lname').val(data[3]);
            $('#xname').val(data[4]);
            $('#date').val(data[5]);
        });
    });
</script>

<!-- delete -->
<script>
    $(document).ready(function () {

        $('.delete-child-btn').on('click', function () {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#childid').val(data[0]);
        });
    });
</script>