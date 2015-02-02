<?php 
	$menu['home']='class="active"'; 
	//echo "------".$_SERVER['SERVER_NAME']."----------";
	include("conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Collabora con Admize. Lavoriamo con associazioni, liberi professionisti, enti o associazioni">
<meta name="keywords" content="collaborazioni, collabora con noi, collabora con admize, collaborazioni, associazione, ente, libero profesionista, associazioni, enti, liberi professionisti">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>ADmize | Il primo E-Business System Provider in Italia</title>
<?php @include($server_pth."inc_web/header-util.php"); ?></head>
<link href="<?php echo $server_url; ?>css/form_2.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="content" class=" clearfix">
    <div class="clearer thirty"></div>
    <div class="mono">
        <h2 class="icon_intro">Collabora con <strong>Admize</strong>.<br>
        </h2>
    </div>
    <div class="mono">
        <div class="clearer ten"></div>
        <form class="formdiv fixed clearfix" id="form_collaborazioni" method="post" action="javascript: void(0);">
            <div class="fieldset">
                	<legend>
                    <div class="dati tipo">
                        <h2>Tipo di contatto</h2>
                    </div>
                    </legend>
                    <div class="radiobutton none" id="rb">
                        <label for="libpro" class="none"><span class="userspan">Libero professionista</span>
                            <input name="utente" type="radio" value="Libero professionista" id="libpro" class="user" checked />
                        </label>
                        <label for="azienda" class="none"> <span class="userspan">Azienda</span>
                            <input name="utente" type="radio" value="Azienda" id="azienda" class="user" />
                        </label>
                        <label for="ente" class="none"> <span class="userspan">Ente o associazione</span>
                            <input name="utente" type="radio" value="Ente o Associazione" id="ente" class="user" />
                        </label>
                        <?php /*?><span class="info">Scegli il tipo di organizzazione che rappresenti</span> <?php */?>
                    </div>
            </div>
            <div class="clearer thirty"></div>
            <div class="fieldset">
                	<legend>
                    <div class="dati contatto">
                        <h2>Dati contatto</h2>
                        <p>i dati inseriti verranno usati come riferimento per il contatto da parte di un nostro consulente e non verranno utilizzati per altro scopo</p>
                    </div>
                    </legend>
                    <label id="labelnome"><span>Nome:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="nome" type="text" id="nome" />
                        </span> </label>
                    <label id="labelcognome"><span>Cognome:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="cognome" type="text" id="cognome" />
                        </span> </label>
                    <label id="labelruolo"> <span>Ruolo occupato in azienda:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="ruolo" type="text" id="ruolo" />
                        </span> </label>
                    <label id="labelemail"><span>Email:<span class="asterisco">*</span> <br />
                        <small>(ti verr&agrave; inviata una mail di conferma!)</small></span> <span>
                        <input class="inputfield required email" name="email3" type="text" id="email3" />
                        </span> </label>
                    <label id="labelragsoc"><span>Ragione Sociale:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="ragsoc" type="text" id="ragsoc" />
                        </span> </label>
                    <label id="labelpiva"><span>Partita IVA:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="piva" type="text" id="piva" />
                        </span> </label>
                    <label id="labelregione"><span>Seleziona una regione</span> <span><span class="asterisco">*</span>
                        <select class="select required" name="regione" id="combo_0"  onChange="change(this);">
                            <option value="" selected="selected">- -</option>
                            <option value="Abruzzo">Abruzzo</option>
                            <option value="Basilicata">Basilicata</option>
                            <option value="Calabria">Calabria</option>
                            <option value="Campania">Campania</option>
                            <option value="Emilia-Romagna">Emilia-Romagna</option>
                            <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
                            <option value="Lazio">Lazio</option>
                            <option value="Liguria">Liguria</option>
                            <option value="Lombardia">Lombardia</option>
                            <option value="Marche">Marche</option>
                            <option value="Molise">Molise</option>
                            <option value="Piemonte">Piemonte</option>
                            <option value="Puglia">Puglia</option>
                            <option value="Sardegna">Sardegna</option>
                            <option value="Sicilia">Sicilia</option>
                            <option value="Toscana">Toscana</option>
                            <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
                            <option value="Umbria">Umbria</option>
                            <option value="Valle d'Aosta">Valle d'Aosta</option>
                            <option value="Veneto">Veneto</option>
                        </select>
                        </span> </label>
                    <label id="labelprovincia"><span>Seleziona una provincia</span> <span><span class="asterisco">*</span>
                        <select class="select required" name="provincia" id="combo_1">
                            <option value="" selected="selected">- -</option>
                        </select>
                        </span> </label>
                    <label id="labelwebsite"><span>Sito Web:<br />
                        <small>(inserire http:// prima del sito)</small></span> <span>
                        <input class="inputfield url" name="website" type="text" id="website" />
                        </span> </label>
                    <label id="labelemailaz"><span>Email aziendale:</span> <span>
                        <input class="inputfield email" name="emailaz" type="text" id="emailaz" />
                        </span> </label>
                    <label id="labeltel"><span>Telefono:</span> <span><span class="asterisco">*</span>
                        <input class="inputfield required" name="tel" type="text" id="tel" />
                        </span> </label>
                    <label id="labelfax" class="none"><span>Fax:</span> <span>
                        <input class="inputfield" name="fax" type="text" id="fax" />
                        </span> </label>
            </div>
            <label class="none margin"><span id="state3"><span class="state2">campi obligatori</span></span>
                <input name="invia" type="submit" class="invia" value="Invia e ricevi" />
            </label>
        </form>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script src="<?php echo $server_url; ?>js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.defaultvalue.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.customSelect.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.activate.functions.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.j3ssw.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/concat.select.region.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#rb").j3ssw({off:"state3down-sort", on:"state3up-sort", def:"state3def-sort", callback:listener1, mode:1});
	function listener1(selection, status){
		$("div.trace").eq(0).empty().append(selection + " : " + (status?"Z-A":"A-Z"));
	}
	
	$("#labelragsoc").css("display","none");
	$("#labelruolo").css("display","none");
	$("#labelemailaz").css("display","none");
	
	$("#ruolo").removeClass("required");
	$("#ragsoc").removeClass("required");
			
	$(".user").click(function(){
		if ($('input[name=utente]:checked').val() == "Libero professionista" ) {
			$("#labelnome").slideDown("fast");
			$("#labelcognome").slideDown("fast");
			$("#labelruolo").slideUp("fast");
			$("#labelemail").slideDown("fast");
			$("#labelragsoc").slideUp("fast");
			$("#labelpiva").slideDown("fast");
			$("#labelwebsite").slideDown("fast");
			$("#labelemailaz").slideUp("fast");
			$("#labeltel").slideDown("fast");
			$("#labelfax").slideDown("fast"); 
			
			$("#ruolo").removeClass("required");
			$("#ragsoc").removeClass("required");
		}
		if ($('input[name=utente]:checked').val() == "Azienda" ){
			$("#labelnome").slideDown("fast");
			$("#labelcognome").slideDown("fast");
			$("#labelruolo").slideDown("fast");
			$("#labelemail").slideDown("fast");
			$("#labelragsoc").slideDown("fast");
			$("#labelpiva").slideDown("fast");
			$("#labelwebsite").slideDown("fast");
			$("#labelemailaz").slideDown("fast");
			$("#labeltel").slideDown("fast");
			$("#labelfax").slideDown("fast");
			
			$("#ruolo").addClass("required");
			$("#ragsoc").addClass("required");
		}
		if ($('input[name=utente]:checked').val() == "Ente o Associazione" ){
			$("#labelnome").slideDown("fast");
			$("#labelcognome").slideDown("fast");
			$("#labelruolo").slideDown("fast");
			$("#labelemail").slideDown("fast");
			$("#labelragsoc").slideDown("fast");
			$("#labelpiva").slideDown("fast");
			$("#labelwebsite").slideDown("fast");
			$("#labelemailaz").slideDown("fast");
			$("#labeltel").slideDown("fast");
			$("#labelfax").slideDown("fast");
			
			$("#ruolo").addClass("required");
			$("#ragsoc").addClass("required");
		}
	});     
});
</script>
</body>
</html>
