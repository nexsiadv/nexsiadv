// VALIDAZIONE DEL FORM CONTATTI
$(document).ready(function(){
	
	/* parametri aggiuntivi per la validazione della richiesta di collaborazione*/
	
	$("#form_collaborazioni").keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
	});
	
	$("#form_collaborazioni").validate({
		rules: {
			piva: {
				required: true,
				minlength: 11,
				maxlength: 11,
				number: true
			},
			tel: {
				number: true
			},
			fax: {
				number: true
			}
		},
		submitHandler: function(form){
			if(!this.wasSent){
				this.wasSent = true;
				$(':submit', form).val('inviato')
					  .attr('disabled', 'disabled')
					  .addClass('disabled');
				form.submit();
			} else {
				return false;
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("valid");
		}
		
	});
	
	
	$("#form_richieste_informazioni").keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
	});
	
	
	/* parametri aggiuntivi per la validazione della richiesta di informazioni*/
	
	
	$("#form_richieste_informazioni").validate({
		rules: {
			tel: {
				number: true
			}
		},
		submitHandler: function(form){
			if(!this.wasSent){
				this.wasSent = true;
				$(':submit', form).val('inviato')
					  .attr('disabled', 'disabled')
					  .addClass('disabled');
				form.submit();
			} else {
				return false;
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("valid");
		}
		
	});
	
});


/* funzione per il valore di default nei campi
/*jQuery(function($) {
	$("#email, #email2").defaultvalue("Inserisci la tua email", "Inserisci la tua email");
});*/


//--------------------------------------

// INVIO DEI DATI DAL FORM

//--------------------------------------

$(document).ready(function(){
	
	
	// Invio e controllo dal form di richiesta informazioni
	$("#form_richieste_informazioni").submit(function(){
		
		$('#state3').ajaxStart(function() {
			$(this).html('<span class="statewait"><img src="images/form/ajax-loader-rect.gif" width="160" height="10" /></span>');
		});
		
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		
		$.ajax({ 	
		type: "POST",
		url: "invio_richiesta_info.php",
		data: str,
		success: function(msg){
			$("#state3").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{
						result = '<span class="state3">Controlli la sua casella di posta,<br />verr&agrave; al pi&ugrave; presto contattato<br />da un nostro consulente</span>';
						pageTracker._trackPageview('/form_richieste_informazioni');
					}
					else
					{
						result = msg;
					}
						$(this).html(result);
					});
				}
		 	});
		return false;
	});
	
	// Invio e controllo dal form di richiesta collaborazioni
	$("#form_collaborazioni").submit(function(){
		
		$('#state3').ajaxStart(function() {
			$(this).html('<span class="statewait"><img src="images/form/ajax-loader-rect.gif" width="160" height="10" /></span>');
		});
		
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		
		$.ajax({ 	
		type: "POST",
		url: "invio_richiesta_collaborazione.php",
		data: str,
		success: function(msg){
			$("#state3").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{
						result = '<span class="state3">Controlla la tua casella di posta,<br />verrai al pi&ugrave; presto contattato<br />da un nostro consulente</span>';
						pageTracker._trackPageview('/form_collaborazioni');
					}
					else
					{
						result = msg;
					}
						$(this).html(result);
					});
				}
		 	});
		return false;
	});
});

