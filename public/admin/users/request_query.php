<?php
//            include '../../private/initialize.php';
            require_once PRIVATE_PATH.'/db_config.php';
            $connection= new  mysqli('localhost','root','','pickyourpart');
            if(!$connection){
                exit("error creating database connection");
            }
            $query = "select u.user_id , u.first_name , u.last_name, u.email ,r.role
                                            from user_requests u 
                                           join role r on u.role_id=r.role_id  ";
            $stmt= $connection->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows==0){
                echo "<tr><td colspan='5'>No new user request</td></tr>";
            }
            while ($row= $result->fetch_assoc()){
                    ?>
                    <tr >
                        <th scope="row"><?php echo $row['user_id'];?></th>
                        <td class="text-capitalize"><?php echo $row['first_name'] ." ". $row['last_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['role'];?></td>
                        <td>
                            <button type="button" class="btn btn-success" title="Allow"><i class="fa fa-check"></i></button>
                            <button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
</tr>
<?php }?>