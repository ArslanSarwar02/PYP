<?php
include "../../private/initialize.php";
include_once 'register_validations.php';
?>
<html lang="en">
<head>
    <title>PYP - Register</title>
    <script src="<?php echo node_path('/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo node_path('@popperjs/core/dist/umd/popper.min.js');?>"></script>
    <script src="<?php echo url_for('js/bootstrap.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo node_path('font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('css/style.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('css/login.css');?>">

</head>
<body>
<div class="logo">
  <a href="<?php echo url_for('/');?>">

  <img  class="logo-img center" src="<?php echo url_for('/images/logo.png');?>">
  </a>
</div>

<div class="signup-form register-form">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <br>
        <h2 class="heading-bg-white">Register</h2>
        <p class="hint-text">Create your account. It's free and only takes a minute.
        if already registered please     <a href="<?php echo url_for('/login/index.php')?>">Login</a>
 here.

        </p>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $fname ?? "";?>" required="required">
                    <span class="text-danger ml-1"><?php if (isset($error['fname'])){
                        echo $error['fname'];
                        }?></span>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $lname ?? "";?>" required="required">
                    <?php  if(isset($error['lname'])){?>

                        <span class="text text-danger ml-1"><?php echo $error['lname'] ?? "";?></span>

                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?? ""; ?>" required="required">
            <?php  if(isset($error['email'])){?>

                <span class="text text-danger ml-1"><?php echo $error['email'] ?? "";?></span>

            <?php }
            ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password"  placeholder="Password" required="required">
            <?php  if(isset($error['password'])){?>

                <span class="text text-danger ml-1"><?php echo $error['password'] ?? "";?></span>

            <?php }
            ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password"  placeholder="Confirm Password" required="required">
            <?php  if(isset($error['confirmp'])){?>

                <span class="text text-danger ml-1"><?php echo $error['confirmp'] ?? "";?></span>

            <?php }
            ?>
        </div>
<!--        <div class="form-group">-->
<!--            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>-->
<!--        </div>-->
        <div class="form-group">
            <button type="submit" name="register" class="btn btn-custom-bg btn-lg btn-block">Register Now</button>
        </div>
    </form>
    <div class="text-center text-white">Already have an account? &nbsp;<a href="<?php echo url_for('login');?>">Sign in</a></div>
</div>
<?php
include PUBLIC_PATH.'/includes/footer.php';