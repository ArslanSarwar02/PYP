<?php
 include '../../../private/initialize.php';

// if(isset($_POST['submit'])){

     if(isset( $_POST['id'] )&& !empty($_POST['id']) ){

     require_once PRIVATE_PATH.'/db_config.php';
         $fname =
         $us_id=
         $lname =
         $email =
         $password =
         $confirm_password = "";

         $select = "SELECT * from user_requests where user_id = ?";
     $stmt =$connection->prepare($select);
     $stmt ->bind_param ('i', $_POST['id']);
     $stmt ->execute();
     $result = $stmt->get_result();
     while ($row = $result->fetch_assoc()) {
         $us_id = $row['user_id'];
         $fname = $row['first_name'];
         $lname = $row['last_name'];
         $email = $row['email'];
         $password = $row['password'];
         $confirm_password = $row['confirm_password'];
     }
     $stmt->close();

         $insert = "INSERT INTO users(first_name,last_name,email,password,confirm_password) VALUES(?,?,?,?,?)";

         //prepare query
         $stmt1 = $connection->prepare($insert);
         $stmt1->bind_param('sssss', $fname, $lname, $email, $password, $confirm_password);
         if ($stmt1->execute()) {
             $stmt1->close();
         }
             $delete_request = "DELETE FROM user_requests where user_id = ?";
         $deletestmt = $connection->prepare($delete_request);
         $deletestmt->bind_param('i', $us_id);
         if($deletestmt->execute()) {
             echo "<p>User successfully allowed to use services<p>";

         }
 }