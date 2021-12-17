<?php
//session_start();
if (!isset($is_access)){
    header('location:../requests.php');
}
?>
<html  lang="en">
<head>
    <title><?php echo "Pick Your Part - ". $title ?: "Pick Your Part"  ;?></title>
    <script src="<?php echo node_path('/jquery/dist/jquery.slim.min.js');?>"></script>
    <script src="<?php echo url_for('js/bootstrap.min.js')?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" href="<?php echo node_path('font-awesome/css/font-awesome.css')?>" />
    <link rel="stylesheet" href="<?php echo node_path('/animate/animate.min.css');?>"/>

    <link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?php echo url_for('css/style.css')?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <script src="<?php echo url_for('js/custom.js');?>" ></script>
</head>
<body>
<header class="header">
    <!-- As a link -->
    <nav class="navbar  align-items-center navigation p-1 p-0 m-0 ">
        <p class="m-1 ml-lg-5  p-0 text-white">Helpline:  <i class="fa fa-phone"></i> +92 306 8239715</p>

            <?php if(!isset($_SESSION['is_login'])){
            ?>
                <ul class="navbar-nav d-flex flex-row m-0 mr-lg-5">
            <li class="nav-item mr-lg-5">
            <a class="nav-link " href="<?php echo url_for('login/index.php');?>">Login</a>
            </li>
            <li class="nav-item mr-lg-5">
            <a class="nav-link" href="<?php echo url_for('register/index.php');?>">Register</a>
            </li>
                </ul>
            <?php } ?>
            <?php if(isset($_SESSION['is_login'])){
            ?>

            <ul class="navbar-nav d-flex flex-row m-0 mr-lg-5">
                <li class="nav-item ">
                  <a class="nav-link" href="#"  title="View Profile">
                      <?php echo $_SESSION['username'];?>
<!--                      <span class="fa fa-angle-right"></span>-->
                  </a>
                </li>
                <li class="nav-item mr-lg-5">
                    <a class="nav-link" href="<?php echo url_for('login/logout.php');?>">Logout</a>
                </li>
               <?php  if (isset($_SESSION['admin'])) {?>
                <li class="nav-item mr-lg-5">
                    <a class="nav-link" href="<?php echo url_for('admin/index.php');?>">Admin panel</a>
                </li>
                <?php } ?>
            </ul>
        <?php } ?>


    </nav>
        <div class="logo">
            <img  class="logo-img center" src="<?php echo url_for('/images/logo.png');?>"></image>
        </div>
    <nav class="navbar navbar-expand-lg sticky-top navigation">
        <button class="navbar-toggler left" id="tab" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon text-white">
               |||
           </span>
        </button>

    <div class="collapse navbar-collapse align-content-center justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo url_for('shop/'); ?>">Contact Us</a>
            </li>
        </ul>
    </div>
    </nav>
</header>