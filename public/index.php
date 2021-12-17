
<?php
session_start();
//include required files
require '../private/initialize.php';
//important variables
$title = "HOME";
$is_access=true;
//$is_access_init=true;
// header inclusion
include PUBLIC_PATH.'/includes/header.php';
?>

<div class="hero">
    <section class="content " id="cont">

        <?php if(isset($_GET['success'])) {?>
            <div class="">
                <div class="alert alert-success alert-dismissible fade show text-center container mt-5" role="alert">
                    <?php  echo $_GET['success'];
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php $_GET['success']='';?>
                </div>
            </div>
        <?php } ?>

        <?php if(isset($_GET['login_alert'])) {?>
            <div class="">
                <div class="alert alert-danger alert-dismissible fade show text-center container" role="alert">

                    <?php  echo $_GET['login_alert'];
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                   <?php //$_GET['login_alert']='';?>
                </div>
            </div>
        <?php } ?>
        <div class="container">
            <h1 class="text-success text-center"> OUR PRODUCTS</h1>
            <?php include_once PUBLIC_PATH."/includes/home_shop.php";?>
        </div>

    </section>
</div>
  <?php include PUBLIC_PATH."/includes/footer.php";?>