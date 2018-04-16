<?php
	
	$email=$_POST['email'];
	$assunto=$_POST['assunto'];
	$menssagem=$_POST['menssagem'];


		$to      = 'vinicius_k2013@hotmail.com';
		$subject = $assunto;
		$message = $menssagem=wordwrap($menssagem, 70);
		$headers = 'From:'. $email . "\r\n"  .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);


?>