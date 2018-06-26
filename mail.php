<?php
  $after_mail = "http://lokoom.eu/";
  $subject = $_POST['subject'];
  $email = 'lokoomlodz@gmail.com';

  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = '<html><meta charset="UTF-8"><body>';
  $message .= '<h1>Wiadomosc ze strony lokoom</h1>';
  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $message .= "<tr style='background: #eee;'><td><strong>Od:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
  $message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
  $message .= "<tr style='background: #eee;'><td><strong>Tytul:</strong> </td><td>" . $subject . "</td></tr>";
  $message .= "<tr style='background: #eee;'><td><strong>Wiadomosc:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
  $message .= "</table>";
  $message .= "</body></html>";

  mail($email, $subject, $message, $headers);
  header('Location: '.$after_mail);
?>
