<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddresh'];
$message= $_POST['message'];
$to = "bhavikmakvana8@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: abc@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>