
<?php
session_start();
//include required files
require '../../private/initialize.php';
//important variables
$title = "HOME";
$is_access=true;
//$is_access_init=true;
// header inclusion
include PUBLIC_PATH.'/includes/header.php';
?>
<div class="container">

        <div class="container">
            <h1 class="text-success text-center" > SHOP</h1>
            <?php include_once PUBLIC_PATH."/includes/home_shop.php";?>
        </div>

</div>
<?php include PUBLIC_PATH."/includes/footer.php";?>