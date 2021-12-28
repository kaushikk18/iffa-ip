<?php


include('connection.php'); 
$username=$_POST['username'];
$email=$_POST['email']; 
$password=$_POST['password']; 
$club=$_POST['club']; 

$query="INSERT INTO register (username,email,password,club) VALUES ('$username','$email','$password','$club')";
if (mysqli_query($con, $query)) {
    header("Location: login2.php");
    exit;
    // echo "New record has been added successfully !";
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
 }
 mysqli_close($con);


?>
