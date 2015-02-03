<?php
	$menu['e-business']='class="active"';
	$menu_sec['voce0']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Ti aiutiamo a sviluppare il tuo business online attraverso l'intergrazione di innovativi modelli di E-BUSINESS; semplicemente integrando comportamenti internet nel tuo modello di business tradizionale per aumentare le perfomarmance competitive e la produttivit&agrave; della tua azienda anche online">
<meta name="keywords" content="e-business, e-marketing, strategie di marketing online, web marketing, internet business model, marketing mix, web, mix, media marketing, web marketing mix, business plan web, piano marketing web, comunicazione integrata, analisi web, performance web, e-commerce, e-business, system provider, trovare nuovi clienti, trovare clienti nuovi, concorsi a premi, pubblicit&agrave; su interent, costo pubblicit&agrave; su internet, costo pubblicit&agrave;, marketing mix per il web, vendere prodotti online, business to business, piano industriale impresa internet ">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Admize &egrave; il tuo consulente e fornitore di soluzioni e-business evolute per aumentare la competivit&agrave; della tua azienda.</title>
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
                <h2>Servizi e consulenze per lo sviluppo del tuo business online</h2>
                <h3>Sviluppiamo soluzioni E-BUSINESS ALL-IN-ONE a misura di piccola e media impresa!</h3>
                <p>Crediamo profondamente che il business sia socialit&agrave; e che i migliori affari si basino su stima e fedelt&agrave; reciproca tra fornitore e consumatore. </p>
                <p>Per mezzo delle nuove tecnologie, <strong>si possono velocizzare, gestire  ed ampliare tutti i livelli di comunicazione integrata tra la vostra impresa, gli account, i fornitori ed i clienti </strong><strong>organizzando e supportando lo scambio reciproco di informazioni </strong><em>- premesse di fondamentale importanza per la conoscenza della vostra impresa e dei vostri prodotti </em>semplicemente, attraverso l'utilizzo comportamenti propri del web.</p>
                <p>Per questo ed altri principali motivi <strong>vi offriamo soluzioni evolute di E-Business, Marketing Intelligence, Web Markerting e Comunicazione integrata destinate ad operatori di mercato industriale o di consumo,</strong> in grado di far accrescere la fedelt&agrave; e la fiducia nelle relazioni.</p>
                <p> Admize <strong>&egrave; il partner ideale per la consulenza e lo sviluppo di nuove strategie per la connettivit&agrave; con il mercato e la loro attuazione operativa.</strong> Sviluppiamo innovativi modelli di E-Business per aumentare la tua competivitivit&agrave; integrando internet nel tuo modello di business.
                <div class="clearer twenty"></div>
                <div class="tips yellow">
                    <div class="ribbon_tips"></div>
                    <p>Internet, opportunamente integrato, aiuta lo sviluppo e il rafforzamento del valore delle relazioni con i propri clienti e fornitori, modificandone l'evoluzione, la facilit&agrave;, i tempi di attuazione e le modalit&agrave; costruttive. In altre parole ricostituisce le strategie di connettivit&agrave; con il mercato e la loro attuazione operativa.</p>
                </div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
