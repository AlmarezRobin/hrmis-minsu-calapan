<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
    // * start change jcd april 21, 2022
    if ($this->session->userdata('role') !== 'Teaching') {
        redirect('Login');
    }   
    // if($this->session->userdata('password') === 'MINSU@CALAPAN'){
    //     redirect('Employee/view_change_password');
    // }
    // * end change jcd april 21, 2022
?>

<!-- sidebar -->
<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse align-items-stretch overflow-auto scrollbar-success"> -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse overflow-auto scrollbar-success border-e">
    <div class="position-sticky">
        <!-- <div class="list-group list-group-flush border-bottom border-end scrollarea"> -->
        <div class="list-group list-group-flush border-bottom scrollarea ">


            <!-- <div class="list-group-item list-group-item-action top-active py-3 lh-tight" aria-current="true"> -->
            <div style="text-align:center; background-color: rgb(212, 212, 212); border-bottom: 2px solid rgb(12, 114, 56)">
                <div class="pt-2">
                    <strong class="pt-2">
                        PERSONAL DATA SHEET
                    </strong>
                </div>
                
            </div>
            <a href="<?=site_url('Employee');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i>Home
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>

            
            <a href="<?=site_url('Employee/view_edit_profile');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Personal Info
                    </div>
                </div>
            </a>




            <!-- <a href="<?=site_url('Employee/view_family_background');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Family Background
                    </div>
                </div>
            </a> -->







            <a href="#" class="list-group-item list-group-item-action lh-tight side-menu" data-bs-toggle="collapse" data-bs-target="#form-collapse" aria-expanded="false">
                <div class="w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-edit me-2"></i>Family Background
                        <span class="fa fa-caret-down pull-right"></span>
                    </div>
                </div>
            </a>
            <div class="collapse" id="form-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal medium mb-0">
                <li class="bg-light ps-4 sub-link"><a  data-toggle="tab" class="text-dark " href="<?=site_url('Employee/view_spouse');?>"  > <i class="fa fa-icon fa-edit me-1"></i>  Spouse's Information Info </a></li>
                    <li class="bg-light ps-4 sub-link"><a  data-toggle="tab" class="text-dark " href="<?=site_url('Employee/view_father');?>"  > <i class="fa fa-icon fa-edit me-1"></i>  Father's Information Info </a></li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="<?=site_url('Employee/view_mother');?>"  > <i class="fa fa-icon fa-edit me-1"></i>Mother's Information </a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="<?=site_url('Employee/view_child');?>"  > <i class="fa fa-icon fa-edit me-1"></i>Child's Information</a> </li>
                </ul>
            </div>
            <a href="<?=site_url('Employee/view_educational_background');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Educational Background
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_eligibility');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Civil Service Eligibility
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_experience');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Work Experience
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_voluntary_work');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>VOLUNTARY WORK
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_trainings');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Trainings Attended
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Pds/view_other_information');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Other Information
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_change_password');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Change Password
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_upload_signature');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Upload Signature
                    </div>
                </div>
            </a>

            <a href="<?=site_url('Pds/view_lastpage');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-1"></i>Last Page
                    </div>
                </div>
            </a>

            <a href="<?=site_url('Login/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-key me-2"></i> Logout
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>

            <!-- <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" style="border-top: 2px solid green; background-color: #dedede">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Lunes, January 3, 2022</strong>
                    <small class="text-muted"></small>
                </div>
                <div class="col-12 mb-1 small">
                    <i class="fa fa-bolt"></i> 0.111s &nbsp; <i class="fa fa-server"></i> <span class="text"> .000001 MB</span>
                </div>
            </a> -->



        </div>
    </div>
</nav>
<!-- end side bar -->