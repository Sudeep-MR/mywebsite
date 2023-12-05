<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "sudeepmr18@gmail.com";


mail($recipient,$subject,$message,$mailheader)
or die("ERROR!");

echo "message sent sucessfull";

?>