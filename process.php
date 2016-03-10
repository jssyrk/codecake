<?php
// Fetching Values From URL


$to      = 'joss@codecake.co';
$subject = 'Codecake Contact Form';
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$emailaddress = filter_var($_POST['emailaddress'], FILTER_SANITIZE_EMAIL);
$telephonenumber = filter_var($_POST['telephonenumber'], FILTER_SANITIZE_NUMBER_INT);
$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);


$message = 'Name : '. $firstname .' '. $lastname .' Email Address : '. $emailaddress .' Telephone Number : '. $telephonenumber .' Comments : '. $comments;


$headers = 'From: codecake@codecake.co' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>