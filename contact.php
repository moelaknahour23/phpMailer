<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/phpMailer/Exception.php';
require_once __DIR__ . '/phpMailer/PHPMailer.php';
require_once __DIR__ . '/phpMailer/SMTP.php';

  $mail = new PHPMailer;
 $mail->isSMTP();

  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';


  $mail->Username='Your Gmail address';
  $mail->Password='Your Gmail password';
  $email = $_POST['email'];
  $mail->addAddress('Your Gmail address');
  $mail->setFrom('donotreply@something.com', $_POST['name']);
  $mail->addReplyTo($_POST['email'], $_POST['name']);


$mail->isHTML(true);
$mail->Subject= $_POST['subject'];
$mail->Body= '<div>'

.$_POST['message']
.'<br/>'
.$_POST['email']
.'</div>';


if($mail->send()){
  
  echo "Thanks ".$_POST['name']. " for contacting me. I'll get back to you soon!"; 

}

else{
  
  echo  "Somthing Went wrong. Please try again.";
  
}


?>

  
