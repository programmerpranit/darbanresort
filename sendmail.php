<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];

$to = "contact@darbanresort.com";
$subject = "Enquiry for Room";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone =" . $phone;
$headers = "From: contact@darbanresort.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>