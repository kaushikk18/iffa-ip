<?php

session_start();

include('connection.php'); 
$email=$_POST['email'];
$password=$_POST['password']; 

$sql = "select * from register where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['username']=$row['username'];
            $_SESSION['club']=$row['club'];
            header("Location: home.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     


?>
