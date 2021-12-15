
    <?php
    session_start();
    //include required files
    require '../../private/initialize.php';
    //important variables
    $title = "Dashboard";
    $is_access=true;
//     including header from public/includes/admin directory
    include PUBLIC_PATH.'/includes/admin/admin_header.php';
    ?>

<!--    starting content of page-->
    <!-- Page content -->
    <div class="content">

    </div>



    <!--    including footer from public/includes/admin directory-->
    <?php include PUBLIC_PATH.'/includes/admin/admin_footer.php'; ?>