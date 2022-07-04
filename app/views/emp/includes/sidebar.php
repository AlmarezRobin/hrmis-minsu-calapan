<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
    // * start change jcd april 21, 2022
    if ($this->session->userdata('role') !== 'Teaching') {
        redirect('Login');
    }
    // elseif($this->session->userdata('role') != 'Non-Teaching'){
    //     redirec t('Login');
    // }
    if($this->session->userdata('password') === 'MINSU@CALAPAN'){
        set_flash_alert('warning', 'Please change the default password');
        redirect('Employee/view_change_password'); 
    }
    // * end change jcd april 21, 2022
?>


<!-- sidebar -->
<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse align-items-stretch overflow-auto scrollbar-success"> -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse overflow-auto scrollbar-success border-e">
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
                    <div class="p-2" style="text-align:center">
                        <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/img/profile.png" height="100px" alt="DA">
                    </div>
                </div>
            <?php endif; ?>


            <div style="text-align:center; background-color: rgb(212, 212, 212); border-bottom: 2px solid rgb(12, 114, 56)">
                <div class="pt-1">
                    <strong class="pt-2"><?php echo $emp_profile['l_name'].' '. $emp_profile['f_name'] ?></strong>
                </div>
                <div class="pb-1 small"><i><?php echo $emp_profile['designation_desc'] ?></i>
                </div>
            </div>


            <a href="<?=site_url('Employee');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i> My Profile
                    </div>
                </div>
            </a>
            <a href="<?=site_url('Employee/view_notif');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i> Notifications
                        <span class="badge badge-pill bg-danger align-text-bottom color-white"><?php echo $get_emp_notif['notif']?></span>
                    </div>
                </div>
            </a>

            <a href="<?=site_url('Pds/view_finished_pds');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-file-text-o me-2" aria-hidden="true"></i> Personal Data Sheet
                    </div>
                </div>
            </a>

            <a href="<?=site_url('Employee/view_emp_attendance');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-file-text-o me-2" aria-hidden="true"></i> Attendance
                    </div>
                </div>
            </a>




            <a href="<?=site_url('Locator');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-icon fa-map-marker me-2" aria-hidden="true"></i> Locator
                    </div>
                </div>
            </a>


            <a href="<?=site_url('Leave');?>" class="list-group-item list-group-item-action lh-tight side-menu ">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-th-list me-2"></i> Leave
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>

            
            <a href="<?=site_url('Login/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu" onclick=" return confirm('Are you sure you want to logout this session?')">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-sign-out me-2"></i> Logout  
                    </div>
                </div>
            </a>
        </div>
    </div>
</nav>
<!-- end side bar -->