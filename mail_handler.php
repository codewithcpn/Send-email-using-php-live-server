<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


    $to ="cpnpra1213@gmail.com";
    $from =$email;
    $subject = "Form Submission";
    $message = "Name: ".$name."\n"."Email: ".$email."\n"."phone: ".$phone."\n"."Wrote the following:"."\n\n".$msg;
    $headers = "From: ".$email;

     mail($to,$subject,$message,$headers);


     if( mail($to,$subject,$message,$headers)){
     echo "<h1>Send Successfully! Thank You"."".$name.", We will conect you Shortly!</h1>"; 
     }
     else{
         echo "Something went wrong"; 
     }
}
