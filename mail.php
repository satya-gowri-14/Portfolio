<?php
//get data from form  
$name = $_POST['name'];//name
$email= $_POST['email'];//mail
$subject= $_POST['subject'];//subject
$message= $_POST['message'];//textarea
$to = "dsatyagowri555@gmail.com";
//$subject = "Mail From website";
$txt ="\r\n Name : ". $name . "\r\n  Email : " . $email . "\r\n  Subject : " . $subject ."\r\n Message :" . $message;
$headers = "From:" . $email . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>