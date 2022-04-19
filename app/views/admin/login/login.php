<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php' ?>
        <title>MINSU-HRMIS | Log in</title>
    </head>
    <body>
        <div class="back">
            <div class="div-center">
                <div class="content">
                    <div class="text-center">
                        <h1>MinSU-HRMIS</h1>
                        <img src="<?php echo BASE_URL . PUBLIC_DIR;?>/images/newlogo.png" width="60%" height="60%" alt="logo" srcset="">
                        <h3>Admin Sign In</h3>
                    </div>
                    <form action="<?=site_url('Admin/admin_login')?>" method="post">

                        <?php flash_alert(); ?>

                        
                        <div class="form-group mb-3">
                            <label for="">Username</label>
                            <input type="text" class="form-control" id="" name="username" placeholder="Enter your Username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="pass" name="password" placeholder="Enter your Password" required   >
                        </div>
                        
                        <div>
                            <input type="checkbox" name="chkpass" id="" onclick="showpass()">
                            <label for="chkpass">Show Password</label>
                        </div>
                        <div class="form-group" style="float:right">
                            <input type="submit" value="Login" name="submit" class="btn btn-primary">
                        </div>
                        <div class="form-group mt-5">
                           <h6> <a href="<?=site_url('Admin/emailverification')?>">Forgot Password</a></h6>
                        </div>
                    </form>
                </div>
                </span>
            </div>
        </div>
        <script>
            function showpass(){
                var x = document.getElementById("pass");
                if(x.type ==="password"){
                    x.type = "text";
                }
                else{
                    x.type="password";
                }
            }
        </script>
    </body>
</html>