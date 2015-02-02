<?php
	
	if(trim($_POST['utente']) == '') {
		$hasError = true;
	} else {
		$utente = trim($_POST['utente']);
	}
	
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
	
	
	if(trim($_POST['ruolo']) == '') {
		$ruolo = '--';
	} else {
		$ruolo = trim($_POST['ruolo']);
	}
	
	/*if(trim($_POST['email3']) == '') {
		$email3 = '--';
	} else {
		$email3 = trim($_POST['email3']);
	}*/
	
	
	if(trim($_POST['email3']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email3']))) {
		$hasError = true;
	} else {
		$email3 = trim($_POST['email3']);
	}
	
	
	if(trim($_POST['ragsoc']) == '') {
		$ragsoc = '--';
	} else {
		$ragsoc = trim($_POST['ragsoc']);
	}

	
	
	if(trim($_POST['piva']) == '') {
		$hasError = true;
	} else if (strlen(trim($_POST['piva'])) != 11) {
		$hasError = true;
	} else {
		$piva = trim($_POST['piva']);
	}
	
	
 	if(trim($_POST['regione']) == '') {
		$hasError = true;
	} else {
		$regione = trim($_POST['regione']);
	}
	
	
	if(trim($_POST['provincia']) == '') {
		$hasError = true;
	} else {
		$provincia = trim($_POST['provincia']);
	}
	

	if(trim($_POST['website']) == '') {
		$website = '--';
	} else {
		$website = trim($_POST['website']);
	}

	if(trim($_POST['emailaz']) == '') {
		$emailaz = '--';
	} else {
		$emailaz = trim($_POST['emailaz']);
	}


	if(trim($_POST['tel']) == '') {
		$hasError = true;
	} else {
		$tel = trim($_POST['tel']);
	}
	
	if(trim($_POST['fax']) == '') {
		$fax = '--';
	} else {
		$fax = trim($_POST['fax']);
	}

	//se tuto e' corretto viene inviata la mail
	
	if(!isset($hasError)){
		$emailTo = 'info@admize.it'; 
		$subject = 'Richiesta di collaborazione dal sito Amize da ' . $email3;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		//$headers = 'Richiesta di contatto da: ' . $email3;
		$body = '<html>
				<head>
				  <title><b>Richiesta di collaborazione da: ' . $email3 . '</title>
				</head>
				<body>
				  <table width="400" border="0" cellspacing="6">
						<tr>
							<td colspan="2"><b>Richiesta di collaborazione da:' . $email3 . '</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="191">Tipo di contatto:</td>
							<td width="196">' . $utente . '</td>
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
							<td>Ruolo in azienda:</td>
							<td>' . $ruolo . '</td>
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
							<td>Partita IVA:</td>
							<td>' . $piva . '</td>
						</tr>
						<tr>
							<td>Regione:</td>
							<td>' . $regione . '</td>
						</tr>
						<tr>
							<td>Provincia:</td>
							<td>' . $provincia . '</td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td>' . $tel . '</td>
						</tr>
						<tr>
							<td>Sito web:</td>
							<td>' . $website . '</td>
						</tr>
						<tr>
							<td>Email aziendale:</td>
							<td>' . $emailaz . '</td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td>' . $tel . '</td>
						</tr>
						<tr>
							<td>Fax:</td>
							<td>' . $fax . '</td>
						</tr>
					</table>
				</body>
				</html>
				';
		//$body = "Tipo di contatto: $utente \nNome: $nome \nCognome: $cognome \nRuolo in azienda: $ruolo \nEmail: $email3 \nRagione Sociale: $ragsoc \nPartita IVA: $piva \nRegione: $regione \nProvincia: $provincia \nSito Web: $website \nEmail Aziendale: $emailaz \nTelefono Aziendale: $tel \nFax Aziendale: $fax";
		
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
			echo '<span class="state4">C\'&egrave; stato un problema nell\'invio al server.<br />Ritenta.</span>';
		}
	}
	else
	{
		echo '<span class="state4"><strong>Attenzione!</strong><br>Ricontrolla i dati inseriti</span>';
	}
	
?>