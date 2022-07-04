<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if ($this->session->userdata('role') != 'Admin') {
redirect('Admin');


}   
?>

<!-- sidebar -->
<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse align-items-stretch overflow-auto scrollbar-success"> -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse overflow-auto scrollbar-success border-e">
    <div class="position-sticky ">
        <!-- <div class="list-group list-group-flush border-bottom border-end scrollarea"> -->
        <div class="list-group list-group-flush border-bottom scrollarea ">

           

            <!-- <div class="list-group-item list-group-item-action top-active py-3 lh-tight" aria-current="true"> -->
            <!-- <div style="text-align:center;color:white; border-top: 1px solid rgb(255, 255, 255); border-bottom: 2px solid rgb(255, 255, 255)" class="bg-success">
                <div class="pt-2">
                    <img src="<?= BASE_URL . PUBLIC_DIR;?>/images/newlogo.png" width="100px" height="100px" alt="DA" style="border-radius:50%;border-top: 1px solid rgb(255, 255, 255); ">
                </div>
            </div> -->
           
            <?php if(isset($emp_profile['photo'])): ?>
                <div class="top-active align-items-center brandside">
                    <div class="p-2" style="text-align:center;">
                        <img src="<?= BASE_URL . 'uploads/' . $emp_profile['photo'] ;?>" width="100px" height="100px" alt="DA" style="border-radius:50%;border-top: 1px solid rgb(255, 255, 255); ">
                        
                    </div>
                </div>
            <?php else: ?>
                <div class="top-active align-items-center brandside">
                    <div class="p-2" style="text-align:center">
                        <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/img/profile.png" height="100px" alt="DA">
                    </div>
                </div>
            <?php endif; ?>

            <!-- <div class="list-group-item list-group-item-action top-active py-3 lh-tight" aria-current="true"> -->
            <div style="text-align:center; background-color: rgb(212, 212, 212); border-bottom: 2px solid rgb(12, 114, 56)">
                <div class="pt-1">
                    <strong class="pt-2">Admin</strong>
                </div>
                <div class="pb-1 small"><i>HRMO</i>
                </div>
            </div>



            <a href="<?=site_url('Hr');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-tachometer me-2"></i> Dashboard
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>



            <a href="#" class="list-group-item list-group-item-action lh-tight side-menu" data-bs-toggle="collapse" data-bs-target="#accounts-collapse" aria-expanded="false">
                <div class="w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-edit me-2"></i> Manage Accounts
                        <span class="fa fa-caret-down pull-right"></span>
                    </div>
                </div>
            </a>
            <div class="collapse" id="accounts-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal medium mb-0">

                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Hr/view_employee');?>" class="text-white "><i class="fa fa-icon fa-users me-1"></i> Manage Employee's</a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Hr/view_admin');?>" class="text-white "><i class="fa fa-icon fa-user me-1"></i> Manage Admins</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="list-group-item list-group-item-action lh-tight side-menu " data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
                <div class="w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-edit me-2"></i> Utility Settings
                        <span class="fa fa-caret-down pull-right"></span>
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>
            <div class="collapse" id="utilities-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal medium mb-0">

                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Utility_Settings/view_employment_status');?>" class="text-white"><i class="fa fa-icon fa-plus me-1"></i>Employment Status </a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Utility_Settings/view_designation');?>" class="text-white "><i class="fa fa-icon fa-plus me-1"></i> Designation</a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Utility_Settings/view_department');?>" class="text-white "><i class="fa fa-icon fa-plus me-1"></i> Department</a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Utility_Settings/view_office');?>" class="text-white "><i class="fa fa-icon fa-plus me-1"></i> Office</a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?=site_url('Utility_Settings/view_deduction');?>" class="text-white "><i class="fa fa-icon fa-plus me-1"></i> Deduction</a>
                    </li>
                    <li class="bg-dark ps-4 sub-link">
                        <a href="<?= site_url('Utility_Settings/view_leave');?>" class="text-white "><i class="fa fa-icon fa-plus me-1"></i> Leave</a>
                    </li>

                </ul>
            </div>

            <a href="<?=site_url('Attendance');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-tachometer me-2"></i> Attendance
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>


            <a href="<?=site_url('CED');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-tachometer me-2"></i> Temporary CED
                    </div>
                    <small class="text-muted"></small>
                </div>
            </a> -->

            <a href="<?=site_url('Admin/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu" onclick=" return confirm('Are you sure you want to logout this session?')">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-key me-2"></i> Logout
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>
        </div>
    </div>
</nav>
<!-- end side bar -->