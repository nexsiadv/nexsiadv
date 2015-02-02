<?php
	//Check to make sure that the name field is not empty
	if(trim($_POST['nome']) == '') {
		$hasError = true;
	} else {
		$nome = trim($_POST['nome']);
	}
	
	//Check to make sure that the name field is not empty
	if(trim($_POST['cognome']) == '') {
		$hasError = true;
	} else {
		$cognome = trim($_POST['cognome']);
	}
	

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	/*if(trim($_POST['messaggio']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$messaggio = stripslashes(trim($_POST['messaggio']));
		} else {
			$messaggio = trim($_POST['messaggio']);
		}
	}*/

	//se tuto e' corretto viene inviata la mail
	
	if(!isset($hasError)){
		/*$emailTo = 'info@ecoseekr.eu';*/
		$emailTo = 'info@hostesspro.com';
		$subject = 'Contatto dal sito HostessPRO';
		$headers = 'Richiesta di contatto da: ' . $email;
		$body = "Nome: $nome \nCognome: $cognome \nEmail del contatto: $email";
		
		$autoTo = $email;
		$autoreplySubject = "Conferma ricezione email a HostessPRO!";
		$autoreplyMessage = "Grazie per averci contattato. Vi saranno invati gli aggiornamenti e le novita' di HostessPRO! .";

		$mail =mail($emailTo, $subject, $body, $headers);
		
		if($mail){
			echo 'OK';
			mail($autoTo, $autoreplySubject, $autoreplyMessage, 'From: noreply@hostesspro.com');
		}
		else
		{
			echo '<div class="notification_error">C\'&egrave; stato un problema nell\'invio. Ritenta.</div>';
		}
	}
	else
	{
		echo '<div class="notification_error"></div>';
	}
	
?>