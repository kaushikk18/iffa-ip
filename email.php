<?php

session_start();
// $user =  $_SESSION['username'];
// $emailid=$_SESSION['email'];
$emailTo = $_SESSION['email'];
            
$subject = "Watchalong enrollment successfull";
                
$content = "Congrats".$_SESSION['username'].", your enrollement has been successfull";
                
$headers = "From: ";
             
if (mail($emailTo, $subject, $content, $headers)) {

    header("Location: liverpool.php");                
    echo "<script>alert('Enrollment successfull')</script>";
         
                   
                    
} else {
                    
    header("Location: juve.php");
                    
                    
} 

?>
