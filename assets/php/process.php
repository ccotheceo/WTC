<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$cname = $_POST["cname"];
$number = $_POST["number"];
 
$EmailTo = "ccotheceo@gmail.com";
$Subject = "New Message Received";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$Body .= "Company: ";
$Body .= $cname;
$Body .= "\n";

$Body .= "Number: ";
$Body .= $number;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>