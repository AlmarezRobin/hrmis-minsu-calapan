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
            <?php require_once(APP_DIR . 'views/emp/includes/sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 ">

                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <div class="col-md-12 p-2 float-sm-start">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                aria-expanded="true" aria-controls="collapseTable">
                                <span class="card-icon"><i class="fa fa-plus"></i></span>
                                Create Your Locator Slip<i class="fa fa-caret-down pull-right"></i>
                            </div>
                            <div class="card-body accordion-collapse collapse show" id="collapseTable-d">

                                <form action="<?=site_url('Hr/add_department');?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <small class="form-text text-muted">Departure Time:</small>
                                            <input type="time" name="FATHNAM3" class="form-control form-control-sm mb-2" placeholder="First Name" maxlength="50" size="50" data-toggle="tooltip"data-placement="right" title="First Name" required>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <small class="form-text text-muted">Location</small>
                                            <input type="text" name="FATHNAM2"class="form-control form-control-sm mb-2" placeholder=""maxlength="30" size="30" data-toggle="tooltip"data-placement="right" title="Middle Name" required>
                                        
                                        </div>

                                    </div>

                                     <div class="row">
                                        <div class="col-md-12 mb-2">
                                        <small class="form-text text-muted">
                                            Reason:
                                        </small>
                                        <textarea name="" id=""  rows="10" class="form-control form-control-sm mb-2"
                                            placeholder="Write Employee's reason for locator" data-toggle="tooltip"
                                            data-placement="right" title="Employee's Reason">
                                        </textarea>

                                        </div>
                                    </div>
                                    
                                    <div class="row">

                                        <div class="col-md-6 mb-2">
                                            <small class="form-text text-muted">Arrival Time:</small>
                                            <input type="time" name="FATHNAM3"class="form-control form-control-sm mb-2" placeholder="" maxlength="50" size="50" data-toggle="tooltip" data-placement="right" title="First Name" required>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <small class="form-text text-muted">Type </small>
                                            <select name="" id=""class="form-control form-control-sm mb-2" 
                                                data-toggle="tooltip"
                                                data-placement="right" title="Locator type" required>
                                                <option>--option--</option>
                                                <option value="">Option1</option>
                                                <option value="">Option2</option>
                                            </select>
                                    </div>
                                   
                                    <div class="col-md-12 mb-2">
                                        <input type="submit" class="btn btn-success float-end" value="save">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


                
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

   
<style>
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
</style>