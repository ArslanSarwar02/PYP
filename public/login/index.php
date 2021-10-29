<?php
$title = "Login";
    session_start();
    include "../../private/initialize.php";
    include 'is_login.php';
    if(isset($_SESSION['is_login'])){
    header('location:../');


}
?>
<html lang="en">
    <head>
        <title>TWPS - <?php echo $title; ?></title>
        <script src="<?php echo node_path('/jquery/dist/jquery.min.js');?>"></script>
        <script src="<?php echo node_path('@popperjs/core/dist/umd/popper.min.js');?>"></script>
        <script src="<?php echo url_for('js/bootstrap.min.js');?>"></script>
        <link rel="stylesheet" href="<?php echo node_path('font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?php echo url_for('css/style.css');?>">
        <link rel="stylesheet" href="<?php echo url_for('css/login.css');?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top navigation justify-content-center align-items-center">
            <h3 class="mt-2"> <a class="navbar-brand ml-auto" id="logo" href="<?php echo url_for("/");?>"><?php echo ucwords("Tameer- e - watan public school mehrabpur")?></a></h3>
            <ul class="navbar-nav">
    <!--        <p>Already have an account? </p>-->

            <li class="nav-item">
                <a class="nav-link " href="<?php echo url_for('register');?>">Register</a>
            </li>
            </ul>
        </nav>
        <div class="signup-form">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<!--                <img class="rounded-circle m-auto center form-logo" src="--><?php //echo url_for('images/logo.jpg');?><!--"/>-->
                <br>
                <h2 class="heading-bg-white">Sign In</h2>
                <p class="hint-text">Sign-In. To access your account details.</p>

                <?php if(isset($error['incorrect'])){?>
                    <div class="alert alert-danger alert-dismissible fade show text-center container mt-5" role="alert">
                    <?php echo $error['incorrect'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <div class="form-group">
                <input type="email" class="form-control" name="email" value="<?php echo $email ?? "";?>"placeholder="Email" />
                  <?php
                  if(isset($error['email'])){?>
                    <p class="text-danger"><?php echo $error['email']; ?></p>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"  />
                    <?php
                    if(isset($error['password'])){?>
                        <p class="text-danger"><?php echo $error['password']; ?></p>
                    <?php } ?>
                </div>

                <div class="form-group">
                          <div class="form-group">
                    <button type="submit" class="btn  btn-lg btn-block btn-custom-bg" name="login">Sign-In</button>
                </div>

            </form>
        </div>
        <div class="text-center text-white">Do not  have an account? &nbsp;<a href="<?php echo url_for('register');?>">Register Now</a></div>
        </div>
    <?php include '../includes/footer.php'; ?>
    </body>
</html>