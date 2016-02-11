<?php
mb_language("en");
mb_internal_encoding("UTF-8");

$field_email = $_POST['email'];
$mail_to = 'kaseda@sendee.jp';
$subject = 'Message from Belp Landing Page';
$body_message = 'mail-address: '.$field_email."\n";
$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mb_send_mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) {
  session_start();
  $_SESSION['alert'] = 1;
  header('Location: http://belp.info');
  exit; 
} else {
  session_start();
  $_SESSION['alert'] = 2;
  header('Location: http://belp.info');
  exit;
}
?>