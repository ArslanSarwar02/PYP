<?php
include '../../../private/initialize.php';
if(isset($_GET['id'])){
    require_once PRIVATE_PATH.'/db_config.php';
    $id = $_GET['id'];
    $delete_request = "DELETE FROM user_requests where user_id = ?";
    $stmt = $connection->prepare($delete_request);
    $stmt->bind_param('i', $id);
    if($stmt->execute()){
        header('location:requests.php?success=true');
//        echo "<div class='alert-success text-success'>User request deleted</div>";
    }
    }