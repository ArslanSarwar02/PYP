
<?php
session_start();
//include required files
require '../../../private/initialize.php';
//setting up required variables
$title = "User Requests";
$is_access=true;
//     including header from public/includes/admin directory
include PUBLIC_PATH.'/includes/admin/admin_header.php';
?>

<!--    starting content of page-->
<!-- Page content -->
<div class="content">

        <h2 class="text-success text-center " id="head2">Pending User Requests</h2>

    <div class="container">
        <div id="success"></div>

        <?php if(isset($_GET["success"])){
            echo "<div class='alert alert-danger'> User request successfully deleted</div>";
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
        </div>
    </div>
</div>



<!--    including footer from public/includes/admin directory-->
<?php include PUBLIC_PATH.'/includes/admin/admin_footer.php'; ?>
<script  src="<?php echo url_for('js/allow_user.js'); ?>"></script>

