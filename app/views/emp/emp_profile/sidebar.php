
<?php 
// if (!$this->auth->is_logged_in()){
//     redirect('Login');
// }

?>
<!-- sidebar -->
<!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse align-items-stretch overflow-auto scrollbar-success"> -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse overflow-auto scrollbar-success border-e">
    <div class="position-sticky">
        <!-- <div class="list-group list-group-flush border-bottom border-end scrollarea"> -->
        <div class="list-group list-group-flush border-bottom scrollarea ">

            <div class="top-active align-items-center brandside">
                <div class="p-2" style="text-align:center;">
                    <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/img/brand.png" height="100px" alt="DA">
                    
                </div>
            </div>

            <!-- <div class="list-group-item list-group-item-action top-active py-3 lh-tight" aria-current="true"> -->
            <div style="text-align:center; background-color: rgb(212, 212, 212); border-bottom: 2px solid rgb(12, 114, 56)">
                <div class="pt-1">
                    <strong class="pt-2"><?php echo $this->auth->get_username(); ?></strong>
                </div>
                <div class="pb-1 small"><i>Developer</i>
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






            <a href="#" class="list-group-item list-group-item-action lh-tight side-menu" data-bs-toggle="collapse" data-bs-target="#form-collapse" aria-expanded="false">
                <div class="w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-edit me-2"></i> Forms
                        <span class="fa fa-caret-down pull-right"></span>
                    </div>
                    <!-- <small class="text-primary">Geospatial Analytics</small> -->
                </div>
            </a>
            <div class="collapse" id="form-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal medium mb-0">
                    <li class="bg-light ps-4 sub-link"><a  data-toggle="tab" class="text-dark " href="#home"  > <i class="fa fa-icon fa-edit me-1"></i>  Personal Info </a></li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#family"  > <i class="fa fa-icon fa-edit me-1"></i> Family Background </a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#education"  > <i class="fa fa-icon fa-edit me-1"></i> Educational Background</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#eligibility"  > <i class="fa fa-icon fa-edit me-1"></i> Civil Service Eligibility</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#experience"  > <i class="fa fa-icon fa-edit me-1"></i>Work Experience</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#voluntary"  > <i class="fa fa-icon fa-edit me-1"></i>Voluntary Work</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#program"  > <i class="fa fa-icon fa-edit me-1"></i>Trainings Programs Attended</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#otherinfo"  > <i class="fa fa-icon fa-edit me-1"></i>Other Information</a> </li>
                    <li class="bg-light ps-4 sub-link"> <a  data-toggle="tab" class="text-dark " href="#password1"  > <i class="fa fa-icon fa-edit me-1"></i> Change Password</a> </li>
                </ul>
            </div>
            <a href="<?=site_url('Hr/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-key me-2"></i> Logout
                    </div>
                    <!-- <small class="text-muted"></small> -->
                </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" style="border-top: 2px solid green; background-color: #dedede">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Lunes, January 3, 2022</strong>
                    <small class="text-muted"></small>
                </div>
                <div class="col-12 mb-1 small">
                    <i class="fa fa-bolt"></i> 0.111s &nbsp; <i class="fa fa-server"></i> <span class="text"> .000001 MB</span>
                </div>
            </a>



        </div>
    </div>
</nav>
<!-- end side bar -->