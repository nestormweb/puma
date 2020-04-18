<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'Exception.php';
	require 'PHPMailer.php';
	require 'SMTP.php';

	$mail = new PHPMailer(true);								// Passing `true` enables exceptions
	try {
		//Server settings
		$mail->SMTPDebug = 0;									// Enable verbose debug output
		$mail->isSMTP();										// Set mailer to use SMTP
		$mail->Host = 'mail.nisastudio.com';					// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;									// Enable SMTP authentication
		$mail->Username = 'email@dominio.com.py';				// SMTP username
		$mail->Password = '***********';						// SMTP password
		$mail->SMTPSecure = 'tls';								// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;										// TCP port to connect to

		//Recipients
		$mail->setFrom('somos@nisastudio.com', $_POST['nombre']);
		// $mail->addAddress('joe@example.net', 'Joe User');		// Add a recipient
		$mail->addAddress('nicolas@nisastudio.com');			// Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		$mail->addReplyTo($_POST['email']);
		// $mail->addCC('nicolas@nisastudio.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');		// Optional name

		//Content
		$mail->isHTML(true);									// Set email format to HTML
		$mail->CharSet = 'UTF-8';
		$mail->Subject = $_POST['asunto'];
		$mail->Body    =
			"
				<font color='#999999'><h2>Consulta enviada - Puma Energy Paraguay</h2></font><br>
				
				<font color='#999999'><b>Nombre y Apellido:</b></font> " . $_POST['nombre'] . "<br>				
				<font color='#999999'><b>E-mail:</b></font> " . $_POST['email'] . "<br>
				<font color='#999999'><b>Teléfono:</b></font> " . $_POST['telefono'] . "<br>
				<font color='#999999'><b>Consulta o Sugerencia:</b></font> " . $_POST['mensaje'] . "<br>
				<br>
				<font color='#999999'><b>IP Registrada:</b></font> " . $_POST['ipCliente'] . "<br>
			";
		
		$mail->AltBody =
			"
				Consulta enviada - Puma Energy Paraguay
				
				Nombre y Apellido: " . $_POST['nombre'] . "
				E-mail: " . $_POST['email'] . "
				Teléfono: " . $_POST['telefono'] . "
				Consulta o Sugerencia: " . $_POST['mensaje'] . "
				
				IP Registrada: " . $_POST['ipCliente'] . "
			";
			
		$mail->send();
		echo 'Message has been sent';
		//header('Location: ../mensaje-enviado');
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		//header('Location: ../mensaje-error');
	}

?>
