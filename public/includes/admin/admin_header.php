
    <?php
//    include '../../private/initialize.php';
    ?>
    <html lang="en">
    <head>
        <title>
            PYP |
            <?php
            echo $title ?? '';
            ?>
        </title>
<!--script-->
        <script src="<?php echo node_path('jquery/dist/jquery.min.js');?>"></script>
        <script src="<?php echo url_for('js/customjs.js');?>"></script>
    <!--    style sheets-->
        <link rel="stylesheet" href="<?php echo node_path('/font-awesome/css/font-awesome.css'); ?>" type="text/css">
        <link href="<?php echo url_for('/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo url_for('/css/admin_style.css'); ?>" rel="stylesheet">
    </head>
    <body>
    <div class="logo">
        <img  class="logo-img center" src="<?php echo url_for('/images/logo.png');?>">
    </div>
    <!-- The sidebar -->
    <div class="sidebar">

        <a  href="<?php echo url_for('/admin/index.php');?>">
            <i class="fa fa-dashboard"></i>
            Dashboard
        </a><a  href="<?php echo url_for('/');?>">
            <i class="fa fa-home"></i>
            Home
        </a>
        <a href="<?php echo url_for('admin/users/requests.php');?>">
            <i class="fa fa-user"></i>
            User Requests
        </a>
        <a href="<?php echo url_for('admin/users/index.php');?>">
            <i class="fa fa-user"> </i>
            Users
        </a>
        <a href="#about">
            <i class="fa fa-product-hunt"></i>
            Products
        </a>
        <a href="#about">
            <i class="fa fa-arrow-left"></i>
            Logout
        </a>
    </div>


