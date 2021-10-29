<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('location:../?login_alert= Please login to contact the administrator');
}
include "../../private/initialize.php";
//important variables
$title = "Contatc-Us";
$is_access=true;
//$is_access_init=true;
// header inclusion
include PUBLIC_PATH.'/includes/header.php';
?>
    <body>

        <div class="signup-form register-form">
            <form action="#" method="post">
<!--                    <img class="rounded-circle m-auto center form-logo" src="--><?php //echo url_for('images/logo.jpg');?><!--"/>-->
                    <br>
                    <h2 class="heading-bg-white">Contact Us</h2>

                    <p class="hint-text">Contact Us by filling th form given below</p>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">

                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Subject" required="required">
                    </div>

                    <div class="form-group">
                        <textarea  class="form-control" name="message"  rows="15" placeholder="Enter you message" required ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="login" class="btn btn-custom-bg btn-lg btn-block">Send Now</button>
                    </div>
            </form>
            <div class="text-center text-white">Already have an account? &nbsp;<a href="<?php echo url_for('login');?>">Sign in</a></div>
        </div>
<?php include PUBLIC_PATH."/includes/footer.php";?>