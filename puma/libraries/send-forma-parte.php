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
		$mail->Subject = 'Trabajá con Nosotros - Puma Energy Paraguay';
		$mail->Body    =
			"
				<font color='#999999'><h2>Trabajá con Nosotros - Puma Energy Paraguay</h2></font><br>
				
				<font color='#999999'><b>Nombre y Apellido:</b></font> " . $_POST['nombre'] . "<br>				
				<font color='#999999'><b>E-mail:</b></font> " . $_POST['email'] . "<br>
				<font color='#999999'><b>Teléfono / Celular:</b></font> " . $_POST['telefono'] . "<br>
				<font color='#999999'><b>Edad:</b></font> " . $_POST['edad'] . "<br>
				<font color='#999999'><b>Profesión:</b></font> " . $_POST['profesion'] . "<br>
				<font color='#999999'><b>Área postulada:</b></font> " . $_POST['cargo_postula'] . "<br>
				<br>
				<font color='#999999'><b>IP Registrada:</b></font> " . $_POST['ipCliente'] . "<br>
			";
		
		$mail->AltBody =
			"
				Trabajá con Nosotros - Puma Energy Paraguay
				
				Nombre y Apellido: " . $_POST['nombre'] . "
				E-mail: " . $_POST['email'] . "
				Teléfono / Celular: " . $_POST['telefono'] . "
				Edad: " . $_POST['edad'] . "
				Profesión: " . $_POST['profesion'] . "
				Área postulada: " . $_POST['cargo_postula'] . "
				
				IP Registrada: " . $_POST['ipCliente'] . "
			";
		
		//for attached files
		if (isset($_FILES['adjunto_cv']) && $_FILES['adjunto_cv']['error'] == UPLOAD_ERR_OK) {
			$mail->AddAttachment($_FILES['adjunto_cv']['tmp_name'],
								 $_FILES['adjunto_cv']['name']);
		}

		$mail->send();
		echo 'Message has been sent';
		// header('Location: ../postulacion-enviada');
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		// header('Location: ../postulacion-error');
	}

?>
