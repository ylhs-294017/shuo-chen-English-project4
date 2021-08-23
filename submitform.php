<?php 
ob_start(); 
error_log();
if(isset($_POST['email'])){

$email = $_POST['email'];

$mailHeading = 'MyFreeOnlineTools Contact Form';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: MyFreeOnlineTools <mailmyfreeonlinetools.com>' . PHP_EOL .
'Reply-To: MyFreeOnlineTools <mailmyfreeonlinetools.com>' . PHP_EOL .
'X-Mailer: PHP/' . phpversion();
$to = 'cutev91011@gmail.com'; 
$messageSent = '<div> Name Email : '.$email.' </div>';

if($email != ''){
mail($to,$subject,$messageSent,$headers);
echo 'Mail Send I Will Get Back to You....';
} 
}

?>