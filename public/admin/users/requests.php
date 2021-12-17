
<?php
session_start();
//include required files
require '../../../private/initialize.php';
//important variables
$title = "User Requests";
$is_access=true;
//     including header from public/includes/admin directory
include PUBLIC_PATH.'/includes/admin/admin_header.php';
?>

<!--    starting content of page-->
<!-- Page content -->
<div class="content">

        <h2 class="text-success text-center " id="head2">Pending User Requests</h2>

<script  src="<?php echo url_for('js/allow_user.js'); ?>"></script>
    <div class="container">
        <?php if(isset($_GET["success"])){
            echo "<div class='alert alert-danger'> User request successfuly deleted</div>";
        } ?>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>

                   <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"> User type</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once 'request_query.php';
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="" id="user"></div>
        </div>
    </div>
</div>



<!--    including footer from public/includes/admin directory-->
<?php include PUBLIC_PATH.'/includes/admin/admin_footer.php'; ?>