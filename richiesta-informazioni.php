<?php 
	$menu['home']='class="active"'; 
	//echo "------".$_SERVER['SERVER_NAME']."----------";
	include("conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Richiedi oggi la tua consulenza sui servizi Admize.">
<meta name="keywords" content="">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Richiedi oggi la tua consulenza con Admize.</title>
<?php @include($server_pth."inc_web/header-util.php"); ?></head>
<link href="<?php echo $server_url; ?>css/form_2.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="content" class=" clearfix">
    <div class="clearer thirty"></div>
    <div class="mono">
        <h2 class="icon_intro">Richiedi oggi la tua consulenza Admize.<br>
            <small>Verrai ricontattato al pi&ugrave; presto da un nostro esperto.</small></h2>
    </div>
    <div class="mono">
        <div class="clearer ten"></div>
        <form class="formdiv fixed clearfix" id="form_richieste_informazioni" method="post" action="javascript: void(0);">
            <div class="fieldset">
                <legend>
                <div class="dati contatto">
                    <h2>Dati contatto</h2>
                    <p>i dati inseriti verranno usati come riferimento per il contatto da parte di un nostro consulente e non verranno utilizzati per altro scopo</p>
                </div>
                </legend>
                <label id="labelnome"> <span>Nome:</span> <span><span class="asterisco">*</span>
                    <input class="inputfield required" name="nome" type="text" id="nome" />
                    </span> </label>
                <label id="labelcognome"><span>Cognome:</span> <span><span class="asterisco">*</span>
                    <input class="inputfield required" name="cognome" type="text" id="cognome" />
                    </span> </label>
                <label id="labelemail" class="none"> <span>Email:<br />
                    <small><em>ti verr&agrave; inviata una mail di conferma a questo indirizzo!</em></small></span> <span><span class="asterisco">*</span>
                    <input class="inputfield required email" name="email3" type="text" id="email3" />
                    </span> </label>
            </div>
            <div class="clearer thirty"></div>
            <div class="fieldset">
                <legend>
                <div class="dati azienda">
                    <h2>Dati dell'azienda</h2>
                    <p>i dati inseriti verranno usati come riferimento per il contatto da parte di un nostro consulente e non verranno utilizzati per altro scopo</p>
                </div>
                </legend>
                <label id="labelragsoc"> <span>Azienda/Ragione sociale:</span> <span><span class="asterisco">*</span>
                    <input class="inputfield required" name="ragsoc" type="text" id="ragsoc" />
                    </span> </label>
                <label id="labelregione"><span>Fatturato annuo</span><span><span class="asterisco">*</span>
                    <select class="select required" name="fatturato" id="combo_0">
                        <option value="" selected="selected">seleziona</option>
                        <option value="da 5K &#8364;uro a 1Mio &#8364;uro">da 5K &#8364;uro a 1Mio &#8364;uro</option>
                        <option value="da 1Mio &#8364;uro a 3Mio &#8364;uro">da 1Mio &#8364;uro a 3Mio &#8364;uro</option>
                        <option value="da 3Mio &#8364;uro a 6Mio &#8364;uro">da 3Mio &#8364;uro a 6Mio &#8364;uro</option>
                        <option value="oltre 6Mio &#8364;uro">oltre 6Mio &#8364;uro</option>
                    </select>
                    </span> </label>
                <label id="labelbudget"><span>Budget ipotizzato per l'operazione<br />
                    <small><em>(indicativo)</em></small></span><span><span class="asterisco">*</span>
                    <select class="select required" name="budget" id="combo_1">
                        <option value="" selected="selected">seleziona</option>
                        <option value="da 5.000 &#8364;uro a 10.000 &#8364;uro">da 5.000 &#8364;uro a 10.000 &#8364;uro</option>
                        <option value="da 10.000 &#8364;uro a 15.000 &#8364;uro">da 10.000 &#8364;uro a 15.000 &#8364;uro</option>
                        <option value="da 15.000 &#8364;uro a 30.000 &#8364;uro">da 15.000 &#8364;uro a 30.000 &#8364;uro</option>
                        <option value="da 30.000 &#8364;uro a 70.000 &#8364;uro">da 30.000 &#8364;uro a 70.000 &#8364;uro</option>
                        <option value="oltre 70.000 &#8364;uro">oltre 70.000 &#8364;uro</option>
                        <?php /*<option value="oltre 70.000 &#8364;uro">oltre 70.000 &#8364;uro</option>
                        <option value="70.000 &#8364;uro">70.000 &#8364;uro</option>
                        <option value="30.000 &#8364;uro">30.000 &#8364;uro</option>
                        <option value="15.000 &#8364;uro">15.000 &#8364;uro</option>
                        <option value="10.000 &#8364;uro">10.000 &#8364;uro</option>
                        <option value="5.000 &#8364;uro">5.000 &#8364;uro</option> */ ?>
                    </select>
                    </span> </label>
                <label id="labeltel"><span>Telefono:</span> <span><span class="asterisco">*</span>
                    <input class="inputfield required" name="tel" type="text" id="tel" />
                    </span> </label>
                <label id="labelmessaggio" class="none"><span>Messaggio:</span> <span>
                    <textarea name="messaggio" rows="5" class="inputfield" id="fax"></textarea>
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
<script src="<?php echo $server_url; ?>js/jquery.customSelect.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.activate.functions.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $server_url; ?>js/jquery.j3ssw.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
