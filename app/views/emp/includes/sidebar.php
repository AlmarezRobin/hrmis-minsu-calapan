<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
    // * start change jcd april 21, 2022
    if ($this->session->userdata('role') !== 'Teaching') {
        redirect('Login');
    }
    // elseif($this->session->userdata('role') != 'Non-Teaching'){
    //     redirect('Login');
    // }
    if($this->session->userdata('password') === 'MINSU@CALAPAN'){
        set_flash_alert('warning', 'Please change the default password');
        redirect('Employee/view_change_password');
    }
    // * end change jcd april 21, 2022
?>


<!-- sidebar -->
<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse align-items-stretch overflow-auto scrollbar-success"> -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse overflow-auto scrollbar-success border-e">
    <div class="position-sticky ">
        <!-- <div class="list-group list-group-flush border-bottom border-end scrollarea"> -->
        <div class="list-group list-group-flush border-bottom scrollarea ">

            <?php if(isset($emp_profile['photo'])): ?>
                <div class="top-active align-items-center brandside">
                    <div class="p-2" style="text-align:center;">
                        <img src="<?= BASE_URL . 'uploads/' . $emp_profile['photo'] ;?>" width="100px" height="100px" alt="DA" style="border-radius:50%;border-top: 1px solid rgb(255, 255, 255); ">
                        
                    </div>
                </div>
            <?php else: ?>
                <div class="top-active align-items-center brandside">
                    <div class="p-2" style="text-align:center;">
                        <img src="" height="100px" alt="Profile Photo">
                        
                    </div>
                </div>
            <?php endif; ?>


            <div style="text-align:center;color:white;border-top: 1px solid rgb(255, 255, 255);  border-bottom: 2px solid rgb(255, 255, 255)" class="bg-success">
                <div class="pt-1">
                    <strong class="pt-2"><?php echo $this->session->userdata('username'); ?></strong>
                </div>
                <div class="pb-1 small"><i>Developer</i>
                </div>
            </div>


            <a href="<?=site_url('Employee');?>" class="list-group-item list-group-item-action lh-tight side-menu mb-1">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i> My Profile
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_notif');?>" class="list-group-item list-group-item-action lh-tight side-menu mb-1">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-bell me-2" aria-hidden="true"></i> Notifications
                        <span class="badge badge-pill bg-info align-text-bottom color-white"><?php echo $emp_notif_forpds['notif']?></span>
                    </div>
                </div>
            </a>

            <a href="<?=site_url('Pds/view_finished_pds');?>" class="list-group-item list-group-item-action lh-tight side-menu mb-1">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i> Personal Data Sheet
                    </div>
                </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action lh-tight side-menu" data-bs-toggle="collapse" data-bs-target="#locator-collapse" aria-expanded="false" >
                <div class="w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-edit me-2"></i>Locator
                        <span class="fa fa-caret-down pull-right"></span>
                    </div>
                </div>
            </a>
            <div class="collapse" id="locator-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal medium mb-0">
                <li class="bg-light ps-4 sub-link"><a  data-toggle="tab" class="text-dark " href="<?=site_url('Locator');?>"  > <i class="fa fa-icon fa-edit me-1"></i> New Locator Slip </a></li>
                    <li class="bg-light ps-4 sub-link"><a  data-toggle="tab" class="text-dark " href="<?=site_url('');?>"  > <i class="fa fa-icon fa-edit me-1"></i>History</a></li>
                </ul>
            </div>
            
            <a href="<?=site_url('Login/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu mt-1">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-key me-2"></i> Logout
                    </div>
                </div>
            </a>
        </div>
    </div>
</nav>
<!-- end side bar -->