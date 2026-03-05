<?php
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$subjectdata=trim($_POST['subject']);
$mobileno=trim($_POST['phone']);
$msg=$_POST['message'];
$to_mail="himalayan.pradise@gmail.com";
//echo $to_mail; exit;

$subject="Contact Form";
//echo $subject; 

$message=" <table class='inner-meet-infm' cellpadding='2' cellspacing='0' width='350px'>
<tr><td>Name :</td><td>$firstname</td></tr><tr><td>Subject :</td><td>$subjectdata</td></tr><tr><td>Phone no :</td><td>$mobileno</td></tr><tr><td>Email :</td><td>$email</td></tr><tr><td>Message :</td><td>$msg</td></tr></table>";  
//echo $message; exit;
$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

if(mail($to_mail,$subject,$message,$headers))
{ 
    header('Location: index.html');
//echo'<span style="color:green;">Your request submitted successfully. Please allow us some time to address your request.</span>';
}
else 
{ 
    header('Location: contact.html');
//echo '<span style="color:red;">Please Try Again.</span>';
}
?>