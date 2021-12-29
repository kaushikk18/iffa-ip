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
            $_SESSION['email']=$row['email'];
            if ($_SESSION['club']=='Liverpool Fans India') {
                // include 'liverpool.php';
                header("Location: liverpool.php");
              } elseif ($_SESSION['club']=='Bharath Spurs Fans') {
                // include 'spurs.php';
                header("Location: liverpool.php");
              }elseif ($_SESSION['club']=='Barca Gang India'){
                // include 'barca.php';
                header("Location: barca.php");
              }elseif ($_SESSION['club']=='PSG supporters club India'){
                include 'psg.php';
              }elseif ($_SESSION['club']=='Bharath Red devils'){
                include 'manu.php';
              }elseif ($_SESSION['club']=='Madridstas in India'){
                include 'madrid.php';
              }elseif ($_SESSION['club']=='Indian Juventus Supporters'){
                include 'juve.php';
              }elseif ($_SESSION['club']=='Chelsea India'){
                include 'chelsea.php';
              }elseif ($_SESSION['club']=='Jai milan'){
                include 'milan.php';
              }else {
                include 'bayern.php';
              }
            // header("Location: liverpool.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     


?>
