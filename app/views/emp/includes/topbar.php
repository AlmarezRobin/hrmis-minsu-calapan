<!-- topbar -->
<header class="py-2 bg-dark text-white fixed-top px-0 ">
    <div class="container px-0 mx-3">

        <div class="d-flex flex-wrap align-items-center justify-content-center topbarcss">

            <!-- <button class="navbar-toggler d-md-none collapsed menutoggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"> <i class="fa fa-icon fa-bars"></i> </span>
                </button> -->

            <a href="" class="d-flex align-items-left mb-0 mb-lg-0 text-white text-decoration-none logotext">
                <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/public/img/logo.png" height="100px" class="topbrand" alt="DA">
                <span style="color:#3bbf0f"><b style="color:#ffd900;">MINSU-HRMIS</b>DASHBOARD</span>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-3 mt-2 justify-content-center mb-md-0 menu1">
               <li><button class="navbar-toggler d-md-none collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white"> <i class="fa fa-icon fa-bars"></i> </span>
                </button></li>
                <li><a href="#" class="nav-link px-2 text-white"> Home </a></li>
                <li><a href="#" class="nav-link px-2 text-white"> About </a></li>
                <li><a href="#" class="nav-link px-2 text-white"> Contact Us </a></li>

                 <!-- for nofification -->
                 <li>        
                        <form action="<?=site_url('Employee/view_notif');?>" method="post">
                            <input type="submit" value="Notifications">
                             <strong style="color:red"> <?php echo $emp_notif_forpds['notif']?> </strong> 
                        </form>
                </li>  
                <!-- <li>
                    
                    <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank" class="nav-link px-2">
                        <i class="fa fa-icon fa-info-circle"></i> 
                        Bootstrap 5.0 </a>
                </li> -->
            </ul>
            <form action="" class="col-12 col-lg-auto mb-3 mb-lg-0 me-0 justify-content-center d-flex searchform" method="POST">

                

                <!-- <input type="search" name="search" class="form-control form-control-sm form-control-dark searchbar" style="font-size: 12px" placeholder="Search..." required>
                <input type="submit" class="btn btn-success btn-sm ms-2" style="font-size: 12px" value="Search"> -->
            </form>

            <!-- <ul class="social-links">
                <a href="#" class="text-white pb-0 mb-0 mx-2"> <i class="fa fa-bell-o" aria-hidden="true"></i> </a>
            </ul> -->

            <!-- <div class="text-end me-0">
                    <a class="btn btn-outline-light btn-sm me-1">Login</a>
                    <a class="btn btn-success btn-sm">Sign-up</a>
                </div> -->


        </div>

    </div>
</header>
<!-- end topbar -->