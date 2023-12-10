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

$body = json_decode(file_get_contents('php://input'), true);


if (isset($body['name'])) {
  $name = $body['name'];
}
if (isset($body['email'])) {
  $email = $body['email'];
}
if (isset($body['phone'])) {
  $phone = $body['phone'];
}
if (isset($body['textarea'])) {
  $textarea = $body['textarea'];
}
if (isset($body['payment'])) {
  $payment = $body['payment'];
}
if (isset($body['order'])) {
  $order = $body['order'];
}
if (isset($body['final_price'])) {
  $final_price = $body['final_price'];
}
if (isset($body['items'])) {
  $items = $body['items'];
}
else {
  die();
}


$mail->isHTML(true);

$mail->Subject = 'Новый заказ из корзины:';
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
if ($textarea) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Комментарий: <span style = "font-weight: bold;">' . $textarea . '</span></p>';
}
if ($payment) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Метод оплаты: <span style = "font-weight: bold;">' . $payment . '</span></p>';
}

if ($items) {

  $mail->Body    .= '<p>
  <span style = "color: #000; font-size: 18px; line-height: 24px; font-weight: bold;">Сам заказ:</span><br>';

  foreach($items as $index => $item) {
    $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Товар ' . ++$index . ': 
      <span style = "color: #000; font-size: 18px; line-height: 24px; font-weight: bold;">' . $item['name'] . '</span>
      <span style = "color: #000; font-size: 18px; line-height: 24px;">' . $item['amount'] . '</span>
      <span style = "color: #000; font-size: 18px; line-height: 24px;">' . $item['weight'] . '</span>
      <span style = "color: #000; font-size: 18px; line-height: 24px;">' . $item['price'] . '</span>
      <span style = "color: #000; font-size: 18px; line-height: 24px; font-weight: bold;">' . $item['summ'] . '</span>

    </p>';
  }

  $mail->Body    .= '<br></p>';
}

if ($final_price) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Стоимость заказа: <span style = "font-weight: bold;">' . $final_price . '</span></p>';
}

if ($order) {
  $mail->Body    .= '<p style = "color: #000; font-size: 18px; line-height: 24px;">Заказ: <span style = "font-weight: bold;">' . $order . '</span></p>';
}

if ($mail->send()) {
  echo "Email was sent!";
}

else {
  echo "Error!";
  var_dump("Error: " . $mail->ErrorInfo);
}

?>