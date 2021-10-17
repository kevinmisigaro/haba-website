<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$subject = "New early bird";
$to = "kunbata93@gmail.com"; 

$email_message = "

Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Gender: ".$gender."

";

$headers = "From:" . $email;
$headers = "Content-type: text/html\r\n";
$headers = "Reply-To:" . $email;

mail($to,$subject,$message,$headers);
header('Location : index.html');
echo run();
?>

