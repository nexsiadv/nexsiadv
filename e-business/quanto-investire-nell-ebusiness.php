<?php
	$menu['e-business']='class="active"';
	$menu_sec['voce1']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Quanto costa un sito web? Scopri quanto è necessario investire nel tuo e-business per incrementare le vendite o le attività della tua azienda">
<meta name="keywords" content="costo sito web,costi siti web,realizzazioni siti web,costo siti web,prezzo sito web,costi sito web, creazioni siti web,prezzi siti web,siti web,sito web dinamico,crea sito web,siti web dinamici,siti web professionali, prezzo siti web,costruzione sito web,creazione siti web,restyling siti web,costruire sito web,realizzare siti web, preventivi siti web,progettazione sito web,crea siti web">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Quanto costa un sito web o una soluzione e-business? Scopri quanto è necessario investire nel tuo e-business per incrementare le vendite o le attività della tua azienda</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script> 
	$(function() {
		$(".tabs ul").tabs(".tab_container > div", {effect: 'fade'});
	});
</script>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title ebusiness">E-Business</h2>
</div>
<div id="content" class="clearfix">
    <?php @include($server_pth."inc_web/tabs.php"); ?>
    <div class="tab_container">
        <div class="tab_content">
            <?php @include("inc_web/a-cosa-serve.php"); ?>
        </div>
        <div class="tab_content">
            <div class="sx">
                <div class="box standard">
                    <?php @include("inc_web/menu.php"); ?>
                </div>
            </div>
            <div class="dx">
                <div class="clearer thirty"></div>
                <h2>Tanti servizi in un unico interlocutore <br>
                per la tua soluzione web o e-business chiavi in mano</h2>
                <h3>Sviluppiamo soluzioni E-BUSINESS ALL-IN-ONE a misura di piccola e media impresa</h3>
                <table class="tavola_servizi" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <th width="260">Servizi e Operazioni</th>
                        <th width="310">Prodotti e Soluzioni</th>
                        <th width="153">Budget</th>
                    </tr>
                </table>
                <?php /*<h3 class="left">Dettagli dei servizi</h3>
                <h3 class="left" style="padding-left: 200px;">Servizi compresi</h3>
                <h3 class="left" style="padding-left: 120px;">Budget</h3> */ ?>
                <div class="clearer twenty"></div>
                <div class="grafico_budget">
                    <ul>
                        <li>Web producer management</li>
                        <li>Web marketing management</li>
                        <li>Web advertising management</li>
                        <li>Monitoraggio ROI e performance</li>
                        <li>Gestione infrastruttura IT </li>
                        <li>Gestione infrastruttura Web</li>
                        <li>Pianificazione  industriale e consulenze</li>
                        <li>Assistenza tecnica</li>
                    </ul>
                    <ul>
                        <li>Web marketing management</li>
                        <li>Web advertising management</li>
                        <li>Monitoraggio ROI e performance</li>
                        <li>Gestione infrastruttura IT</li>
                        <li>Gestione infrastruttura Web</li>
                        <li>Pianificazione industriale  e consulenze</li>
                        <li>Assistenza tecnica</li>
                    </ul>
                    <ul>
                        <li>Web advertising management</li>
                        <li>Monitoraggio ROI e performance</li>
                        <li>Gestione infrastruttura IT </li>
                        <li>Gestione infrastruttura Web</li>
                        <li>Assistenza tecnica</li>
                    </ul>
                    <ul>
                        <li>Web advertising management</li>
                        <li>Monitoraggio ROI e performance</li>
                        <li>Consulenza</li>
                        <li>Assistenza tecnica</li>
                    </ul>
                </div>
                <div class="clearer twenty"></div>
                <?php @include("inc_web/tab_servizi.php"); ?>
                <div class="clearer"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
