<?php

$nome = $_GET['q'];
$acao = $_GET['n'];
$to      = 'eu@betho.com.br';
$subject = 'alteracao mobycar';
$message = $nome. 'fez '. $acao;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

return mail($to, $subject, $message, $headers);
