<?php

//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "admin@apcosys.in";
$txt =" Name    : ". $name . "\r\n\n Email   : " . $email .  "\r\n\n Phone   : " . $phone.  "\r\n\n Subject : LEPASS:" . $subject. "\r\n\n Message : " . $message;
$headers = "From: noreply@apcosys.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>