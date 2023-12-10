<?php

header('Access-Control-Allow-Origin: *');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer/src/Exception.php');
require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;
$mail->isSMTP(); 

$mail->Host = 'imago.gohost.ru';

$mail->SMTPAuth = true;

$mail->Username = 'mail@beans-brothers.ru';
$mail->Password = '!!rGxEw?5oFg**';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;  
$mail->CharSet = "utf-8";

$mail->setFrom('mail@beans-brothers.ru', 'С beans-brothers.ru');

$mail->addAddress('evgenij.baltais@yandex.ru');

if (isset($_POST['name'])) {
  $name = $_POST['name'];
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['phone'])) {
  $phone = $_POST['phone'];
}
if (isset($_POST['comment'])) {
  $comment = $_POST['comment'];
}
if (isset($_POST['type_of_connect'])) {
  $type_of_connect = $_POST['type_of_connect'];
}
if (isset($_POST['type_of_call'])) {
  $type_of_call = $_POST['type_of_call'];
}
else {
  die();
}


$mail->isHTML(true);

$mail->Subject = 'Новое сообщение с формы "Отправить заявку":';
$mail->Body    = '<p style = "color: #000; font-size: 22px; line-height: 30px;">Данные с формы:</p>';

if ($name) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Имя: <span style = "font-weight: bold;">' . $name . '</span></p>';
}
if ($email) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Email: <span style = "font-weight: bold;">' . $email . '</span></p>';
}
if ($phone) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Телефон: <span style = "font-weight: bold;">' . $phone . '</span></p>';
}
if ($type_of_connect && $type_of_call) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Способ связи: <span style = "font-weight: bold;">' . $type_of_connect . '; ' . $type_of_call . '</span></p>';
}
$mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Комментарий: <span style = "font-weight: bold;">' . $comment . '</span></p>';

if ($mail->send()) {
  var_dump("Email was sent!");
}

else {
 var_dump("Error!");
 var_dump("Error: " . $mail->ErrorInfo);
}

?>