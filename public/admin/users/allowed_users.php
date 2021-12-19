<?php

            require_once PRIVATE_PATH.'/db_config.php';
            //selecting user request with role
            $query = "select u.user_id , u.first_name , u.last_name, u.email ,r.role
                                                        from users u 
                                                       join role r on u.role_id=r.role_id order by u.user_id";
            $stmt= $connection->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows==0){
                echo "<tr><td colspan='5'>No new user request</td></tr>";
            }
            // generating user request table
            while ($row= $result->fetch_assoc()){
                    ?>
                    <tr >
                        <th scope="row"><?php echo $row['user_id'];?></th>
                        <td class="text-capitalize"><?php echo $row['first_name'] ." ". $row['last_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['role'];?></td>
                        <td>
                            <a href="delete_user.php?id=<?php echo $row['user_id'];?>" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                </tr>
        <?php }
            $stmt->close();
        //count number of user requests
        ?>

