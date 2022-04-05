
<?php 
// if (!$this->auth->is_logged_in()){
//     redirect('Login');
// }

?>
<!-- sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse overflow-auto scrollbar-success border-e">
    <div class="position-sticky">
        <div class="list-group list-group-flush border-bottom scrollarea ">

            <div class="top-active align-items-center brandside">
                <div class="p-2" style="text-align:center;">
                    <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/img/brand.png" height="100px" alt="DA">
                    
                </div>
            </div>

            <div style="text-align:center; background-color: rgb(212, 212, 212); border-bottom: 2px solid rgb(12, 114, 56)">
                <div class="pt-1">
                    <strong class="pt-2"><?php echo $this->Auth->get_username(); ?></strong>
                </div>
                <div class="pb-1 small"><i>Developer</i>
                </div>
            </div>
            <a href="<?=site_url('Employee');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i> My Profile
                    </div>
                </div>
            </a>


            <a href="<?=site_url('Employee/view_locator');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                    <i class="fa fa-user me-2" aria-hidden="true"></i> Locator
                    </div>
                </div>
            </a>



            
            <a href="<?=site_url('Hr/logout');?>" class="list-group-item list-group-item-action lh-tight side-menu">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="mb-0">
                        <i class="fa fa-icon fa-key me-2"></i> Logout
                    </div>
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