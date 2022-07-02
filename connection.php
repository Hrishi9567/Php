<?php

$servername ="localhost";
$username ="root";
$password="";
$db ="Form";

    $conn = mysqli_connect($servername,$username,$password, $db);
    
    // Check connection
    if($conn){
     //echo "connect successfully";
    }
    else{
      echo "connection fail";
    }

  ?>