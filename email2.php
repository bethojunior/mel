<?php

$nome = $_GET['q'];
$to      = 'eu@betho.com.br';
$subject = 'alteracao mobycar';
$message = $nome. '';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

return mail($to, $subject, $message, $headers);
