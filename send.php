<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $to = "kasunwijesekara11@gmail.com";
  $subject = "$_POST['subject'];";

  $body = '';
  foreach($_POST as $filed => $value) {
    $body .= $filed . ':' . $value . '\n';
  }
  mail($to, $subject, $body);{
    return header('location', 'success_email.html');
  }

  return header('location', 'fail_email.html');
}