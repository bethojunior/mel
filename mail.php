<?php

$nome = $_GET['name'];
$to      = 'hgomescostajr@gmail.com';
$subject = 'Confirmação do niver da Mel';
$message = $nome. ' Confirmou a presenã';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

return mail($to, $subject, $message, $headers);