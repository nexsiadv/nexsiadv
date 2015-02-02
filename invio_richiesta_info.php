<?php
	
	if(trim($_POST['nome']) == '') {
		$hasError = true;
	} else {
		$nome = trim($_POST['nome']);
	}
	
	if(trim($_POST['cognome']) == '') {
		$hasError = true;
	} else {
		$cognome = trim($_POST['cognome']);
	}
		
	if(trim($_POST['email3']) == '')  {
		$hasError = true;
	} else {
		$email3 = trim($_POST['email3']);
	}
	
	if(trim($_POST['ragsoc']) == '') {
		$ragsoc = '--';
	} else {
		$ragsoc = trim($_POST['ragsoc']);
	}
	
 	if(trim($_POST['fatturato']) == '') {
		$hasError = true;
	} else {
		$fatturato = trim($_POST['fatturato']);
	}
	if(trim($_POST['budget']) == '') {
		$hasError = true;
	} else {
		$budget = trim($_POST['budget']);
	}

	if(trim($_POST['tel']) == '') {
		$hasError = true;
	} else {
		$tel = trim($_POST['tel']);
	}
	if(trim($_POST['messaggio']) == '') {
		$messaggio = '--';
		//$hasError = true;
	} else {
		$messaggio = trim($_POST['messaggio']);
	}
	
	//se tutto e' corretto viene inviata la mail
	
	if(!isset($hasError)){
		$emailTo = 'info@admize.it'; 
		$subject = 'Richiesta informazioni sui servizi dal sito Admize da: ' . $email3;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		//$headers .= 'Richiesta di contatto da: ' . $email3;
		$body = '<html>
				<head>
				  <title><b>Richiesta di contatto da: ' . $email3 . '</title>
				</head>
				<body>
				  <table width="400" border="0" cellspacing="6">
						<tr>
							<td colspan="2"><b>Richiesta di contatto da:' . $email3 . '</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="191">Nome:</td>
							<td width="196">' . $nome . '</td>
						</tr>
						<tr>
							<td>Cognome:</td>
							<td>' . $cognome . '</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>' . $email3 . '</td>
						</tr>
						<tr>
							<td>Azienda / Ragione sociale:</td>
							<td>' . $ragsoc . '</td>
						</tr>
						<tr>
							<td>Fatturato annuo:</td>
							<td>' . $fatturato . '</td>
						</tr>
						<tr>
							<td>Budget disponibile:</td>
							<td>' . $budget . '</td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td>' . $tel . '</td>
						</tr>
						<tr>
							<td>Messaggio:</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2">' . $messaggio . '</td>
						</tr>
					</table>
				</body>
				</html>
				';
		//$body = "Nome: $nome \nCognome: $cognome  \nEmail: $email3 \nAzienda/Ragione Sociale: $ragsoc \nFatturato: $fatturato \nTelefono: $tel \nMessaggio: $messaggio;";
		
		$autoTo = $email3;
		$autoreplySubject = "Conferma ricezione email Admize";
		$autoreplyMessage = "Grazie per averci contattato. Verrete al piu' presto richiamati da un nostro responsabile.";
		
		$mail = mail($emailTo, $subject, $body, $headers);
		
		if($mail){
			echo 'OK';
			mail($autoTo, $autoreplySubject, $autoreplyMessage, 'From: noreply@admize.it');
		}
		else
		{
			echo '<small>C\'&egrave; stato un problema nell\'invio al server.<br />Ritenta.</small>';
		}
	}
	else
	{
		echo '<span class="state4"><strong>Attenzione!</strong><br>Ricontrolla i dati inseriti</span>';
	}
	
?>