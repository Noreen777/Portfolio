<?php

$firstname = $_POST['First name'];
$lastname = $_POST['Last name'];
$visitor_email = $_POST['email'];
$company_url = $_POST['Company url'];
$message = $_POST['message'];

$email_from = 'noreen-malik@outlook.com';
$email_subject = "New querry submission";
$email_body = "User First Name: $firstname.\n".
"User Last Name: $lastname.\n".
"User Email: $visitor_email.\n".
"Company URL: $company_url.\n".
"Message: $message.\n";

$to = 'noreenmalikinfo@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: Hireme.html");








// if($_POST["message"]) {


//     mail("noreenmalikinfo@gmail.com", "Here is the subject line",
    
    
//     $_POST["insert your message here"]. "From: noreenmalik296@gmail.com");
    
    
//     }


?>