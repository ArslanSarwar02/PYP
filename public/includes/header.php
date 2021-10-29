<?php
//session_start();
if (!isset($is_access)){
    header('location:../index.php');
}
?>

<html  lang="en">
<head>
    <title><?php echo "TWPS - ". $title ?: "TWPS"  ;?></title>
    <script src="<?php echo node_path('/jquery/dist/jquery.slim.min.js');?>"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
    <script src="<?php echo url_for('js/bootstrap.min.js')?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" href="<?php echo node_path('font-awesome/css/font-awesome.css')?>" />
    <link rel="stylesheet" href="<?php echo node_path('/animate/animate.min.css');?>"/>

    <link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?php echo url_for('css/style.css')?>" />

    <link rel="stylesheet" href="<?php echo url_for('css/login.css')?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <script src="<?php echo url_for('js/custom.js');?>" ></script>
</head>
<body>
<header class="header">
    <!-- As a link -->
    <nav class="navbar navbar-light bg-secondary align-items-center p-0 m-0 ">
        <p class="m-1 ml-lg-5  p-0 text-white"><i class="fa fa-phone"></i> +92 323 3508690</p>

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
            </ul>
        <?php } ?>


    </nav>

    <!-- As a heading -->

    <nav class="navbar navbar-expand-lg sticky-top navigation">
        <h3> <a class="navbar-brand ml-lg-5 mt-2" id="logo"
                href="<?php echo url_for("/");?>"><?php echo ucwords("Tameer- e - watan public school mehrabpur")?>
            </a
            ></h3>
        <button class="navbar-toggler " id="tab" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon text-white">
               |||
           </span>
        </button>

    <div class="collapse navbar-collapse align-content-center justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-lg-5">
            <li class="nav-item active">
                <a class="nav-link " href="#">Admission <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="  dropdown-toggle nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo url_for('contact_us/'); ?>">Contact Us</a>
            </li>
        </ul>
<!-- right side navigation links-->
<!--            <form class="form-inline ml-lg-auto my-2 my-lg-0">-->
<!--                <div class="form-group">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success " type="submit">Search</button>-->
<!--                </div>-->
<!--            </form>-->
    </div>
    </nav>
</header>