<?php

 $connection= new  mysqli('localhost','root','','pickyourpart');
if(!$connection){
    die('could not connect to database'.$connection->error());
}