<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
        <title>Code verification</title>

        
    </head>
    <body>
        <div class="back">
            <div class="div-center">
                <div class="content">

                    <div class="text-center">
                        <h1>MinSU-HRMIS</h1>
                        <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/images/newlogo.png" width="60%" height="60%" alt="logo" srcset="">
                    </div>
                    <div class="form-group" style="color:yellow">
                        <?php echo $this->session->flashdata('status'); ?>
                    </div>
                    <div class="text-center">
                    <!-- <img src="assets/images/logo1.jpg" width="30%" height="30%" alt="logo" srcset=""> -->
                    <!-- <h3>Verify by email</h3> -->
                    </div>
                    <form action="" method="post">
                    <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="pass" placeholder="New Password" required   >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirmation</label>
                            <input type="password" class="form-control" id="pass" placeholder="Confirm Password" required   >
                        </div>
                        <div class="form-group" style="float:right">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                    
                    <div class="form-group mt-5">
                        <a href="<?= site_url('Login');?>">Sign in to your account</a>
                    </div>
                </div>
                </span>
            </div>
        </div>
        
    </body>
</html>
