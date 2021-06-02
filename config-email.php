<?php
if (isset($_POST['sendmail'])) {
   require 'src/PHPMailer.php';
   require 'src/SMTP.php';

	$subject = utf8_decode($_POST['subject']);
	$email = utf8_encode($_POST['email']);
	$message = utf8_decode($_POST['message']);

   //CODIGOS DO HOSTGATOR

   $mail = new PHPMailer\PHPMailer\PHPMailer();
   $mail->IsSMTP(); // enable SMTP
   $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
   $mail->SMTPAuth = true; // authentication enabled
   $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
   $mail->Host = '';//seu host
   $mail->Port = 465; // or 587
   $mail->IsHTML(true);
   $mail->Username = '';//seu email
   $mail->Password = '';//sua senha
   
   $corpo = "";

   $mail->addReplyTo("");//copia
   $mail->SetFrom("");//remetente
   $mail->Subject = $subject;
   $mail->Body = $message; //$corpo
   $mail->AddAddress($email);
   
   //Anexo
   for ($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {
      $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
   }

   if (!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Mensagem enviada com sucesso";
   }
}
?>