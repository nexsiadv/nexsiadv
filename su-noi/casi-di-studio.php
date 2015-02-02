<?php 
	$menu['su-noi']='class="active"';
	$menu_sec['voce3']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Casi di studio admize srl, soluzioni e-business web 2.0">
<meta name="keywords" content="casi di studio, piattaforme, web 2.0, e-business, e-marketing, consulente, consulenza">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Casi di studio e-business, e-marketing, piattaforme web 2.0 evolute</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=it&amp;key=ABQIAAAAzqsavBJCgG867oSmqSeLyBTtth_er7mFMtpWXhZZPzvbi9Ka7RR80ELa7nUGZVq6bHYsFkjcKXaDJw"></script>
<?php @include($server_pth."inc_web/header-util.php"); ?>
<link href="<?php echo $server_url; ?>css/tabs-slideshow.css" rel="stylesheet" type="text/css">
<style>
.gallery {
	position: relative;
	height: 253px;
	width: 332px;
	display: block;
	margin: 0 20px 0 0;
}
.left {
	margin: 0 20px 0 0;
}
.right {
	margin: 0 0 0 20px;
}
.gallery img {
	position: absolute;
	height: 203px;
	width: 332px;
	display: none;
	top: 10px;
	left: 0;
	z-index: 1000;
}
.slidetabs {
	background: url(<?php echo $server_url; ?>images/bg_bridge.png) no-repeat center center; padding: 11px 60px; position: absolute; bottom: 0;
}
</style>
</head>
<body onLoad="initialize()">
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title noi">Su di noi</h2>
</div>
<div id="content" class="clearfix">
    <div class="sx">
        <div class="box standard">
            <?php @include("inc_web/menu.php"); ?>
        </div>
    </div>
    <div class="dx case" id="triggers">
        <div class="clearer forty"></div>
        <div class="gallery left" id="gallery1"> <img src="<?php echo $server_url; ?>images/case-study/ce_1_thumb.png" width="332" height="203" rel="#ce_1"> <img src="<?php echo $server_url; ?>images/case-study/ce_2_thumb.png" width="332" height="203" rel="#ce_2"> <img src="<?php echo $server_url; ?>images/case-study/ce_3_thumb.png" width="332" height="203" rel="#ce_3"> <img src="<?php echo $server_url; ?>images/case-study/ce_4_thumb.png" width="332" height="203" rel="#ce_4"> <img src="<?php echo $server_url; ?>images/case-study/ce_5_thumb.png" width="332" height="203" rel="#ce_5"> <img src="<?php echo $server_url; ?>images/case-study/ce_6_thumb.png" width="332" height="203" rel="#ce_6">
            <div class="slidetabs" id="slidetabs1" style="margin: 0 0 0 58px;"><a href="#"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a></div>
        </div>
        <h2>Conto-energia.biz</h2>
        <h3>Portale  informativo e  sistema di configurazione e vendita di impianti fotovoltaici</h3>
        <p>Conto-energia.biz (2006), è stato uno tra i primi siti web in Italia di presentazione dei programmi di incentivazione per l’installazione di impianti fotovoltaici.<br>
            L’ azzeccata identificazione fra la denominazione del sito e quella del programma statale di incentivazione ed il puntuale lavoro di comunicazione e web marketing, unitamente alla diffusione di diversi servizi integrati offerti gratuitamente nel “vortale” (configurazione impiantistica; call center; corsi di formazione, ecc.) hanno determinato un enorme successo online dell’iniziativa che, nel biennio 2006 -2008, è stato uno dei principali punti di riferimento per le aziende ed i professionisti del settore e per chiunque intendesse installare un impianto fotovoltaico in Italia.</p>
        <p>Qualche numero: Da <strong>48.000 a 64.000 visitatori unici per mese</strong>;<strong> 27.000 preventivi online per mese</strong>; <strong>1.600 partecipanti ai corsi di formazione</strong> nei primi 6 mesi; <strong>1000 richieste di collaborazione</strong> da agenti, progettisti e fornitori/installatori 5000 utenti registrati (tra consulenti, progettisti, installatori, fornitori e potenziali clienti). </p>
        <!--<p>La bontà dell’idea e la giusta strategia commerciale che mirava alla fidelizzazione degli installatori e progettisti per la conquista del mercato retail, nel 2007 ebbero a suscitare il forte interesse della multinazionale spagnola GUASCOR GROUP (leader mondiale nella produzione di motori diesel &amp; gas, tecnologie ed impianti per la riduzione dell’impatto ambientale e per la produzione di energia elettrica pulita). A fine 2007 la Guascor ha acquisito il marchio ed il sito, costituendo la CONTOENERGIA SpA ed entrando nel mercato italiano del fotovoltaico. Della predetta società lo scrivente è stato Presidente fino alla metà del 2008 e successivamente, con l’allargamento degli obbiettivi aziendali, Direttore marketing e commerciale (carica che ho ricoperto sino al novembre 2009).</p>-->
        <div class="clearer forty"></div>
        <div class="gallery right" id="gallery2"> <img src="<?php echo $server_url; ?>images/case-study/es_1_thumb.png" width="332" height="203" rel="#es_1"> <img src="<?php echo $server_url; ?>images/case-study/es_2_thumb.png" width="332" height="203" rel="#es_2"> <img src="<?php echo $server_url; ?>images/case-study/es_3_thumb.png" width="332" height="203" rel="#es_3">
            <div class="slidetabs" id="slidetabs2" style="margin: 0 0 0 82px;"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a></div>
        </div>
        <h2>EcoSeekr.eu</h2>
        <h3><strong>EcoSeekr</strong> è la prima <strong>marketplace business community</strong> verticale Italiana ed Europea nel settore dell’ambiente con particolare focus al settore “dell’ecoproduzione”.</h3>
        <p> EcoSeekr è una <strong>Fiera Virtuale Permanente</strong>, in cui oltre alla mera negoziazione dei prodotti, i soggetti possono aumentare i propri contatti, le capacità commerciali, approfondire le conoscenze, discutere delle problematiche, creare gruppi di lavoro, interagire ed identificarsi nel settore.</p>
        <p>In <strong>EcoSeekr</strong> è integrato il primo marketplace (basato sul modello di e-business infomediario) appositamente concepito per la negoziazione delle (MPS) materie prime secondarie e materie prime (MP) derivanti dalle attività di trasformazione legate alle diverse filiere  dell’ecoproduzione</p>
        <div class="clearer forty"></div>
        <!-- 
        <div class="gallery left" id="gallery3"> <img src="<?php echo $server_url; ?>images/case-study/hp_1_thumb.png" width="332" height="203" rel="#hp_1"> <img src="<?php echo $server_url; ?>images/case-study/hp_2_thumb.png" width="332" height="203" rel="#hp_2"> <img src="<?php echo $server_url; ?>images/case-study/hp_3_thumb.png" width="332" height="203" rel="#hp_3">
            <div class="slidetabs" id="slidetabs3" style="margin: 0 0 0 82px;"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a><a href="javascript:void(0);"></a></div>
        </div>
        <h2>HostessPRO.it</h2>
        <h3>Portale per corsi e workshop in tutta italia per Hostess congressuali, eventi o promoter.</h3>
		-->
        <p>&nbsp;</p>
        <div class="clearer twenty"></div>
    </div>
    <!-- Conto-energia.biz -->
    <div class="apple_overlay" id="ce_1"> <img src="<?php echo $server_url; ?>images/case-study/ce_1.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Conto-energia.biz raccoglie in un'interfaccia semplice e vivace tutti gli strumenti necessari per conoscere gli impianti fotovaltici.</p>
        </div>
    </div>
    <div class="apple_overlay" id="ce_2"> <img src="<?php echo $server_url; ?>images/case-study/ce_2.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Conto-energia.biz raccoglie in un'interfaccia semplice e vivace tutti gli strumenti necessari per conoscere gli impianti fotovaltici.</p>
        </div>
    </div>
    <div class="apple_overlay" id="ce_3"> <img src="<?php echo $server_url; ?>images/case-study/ce_3.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Con il configuratore d'impianto Conto-energia, estremamente intuitivo e flessibile,  puoi avere in pochi minuti un'analisi costi-benefici da poter stampare, scaricare o inviare via email!.</p>
        </div>
    </div>
    <div class="apple_overlay" id="ce_4"> <img src="<?php echo $server_url; ?>images/case-study/ce_4.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Con il configuratore d'impianto Conto-energia, estremamente intuitivo e flessibile,  puoi avere in pochi minuti un'analisi costi-benefici da poter stampare, scaricare o inviare via email!.</p>
        </div>
    </div>
    <div class="apple_overlay" id="ce_5"> <img src="<?php echo $server_url; ?>images/case-study/ce_5.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Con il configuratore d'impianto Conto-energia, estremamente intuitivo e flessibile,  puoi avere in pochi minuti un'analisi costi-benefici da poter stampare, scaricare o inviare via email!.</p>
        </div>
    </div>
    <div class="apple_overlay" id="ce_6"> <img src="<?php echo $server_url; ?>images/case-study/ce_6.jpg" />
        <div class="details">
            <h2>Conto-energia.biz</h2>
            <p>Con il configuratore d'impianto Conto-energia, estremamente intuitivo e flessibile,  puoi avere in pochi minuti un'analisi costi-benefici da poter stampare, scaricare o inviare via email!.</p>
        </div>
    </div>
    
    <!-- EcoSeekr gallery -->
    
    <div class="apple_overlay" id="es_1"> <img src="<?php echo $server_url; ?>images/case-study/es_1.jpg" />
        <div class="details">
            <h2>EcoSeekr.com</h2>
            <p>EcoSeekr racchiude in una semplice e gradevole interfaccia, uno strumento potente e scalabile al servizio di tutti gli operatori del settore dei rifiuti ed energie alternative</p>
        </div>
    </div>
    <div class="apple_overlay" id="es_2"> <img src="<?php echo $server_url; ?>images/case-study/es_2.jpg" />
        <div class="details">
            <h2>EcoSeekr.com</h2>
            <p>EcoSeekr racchiude in una semplice e gradevole interfaccia, uno strumento potente e scalabile al servizio di tutti gli operatori del settore dei rifiuti ed energie alternative</p>
        </div>
    </div>
    <div class="apple_overlay" id="es_3"> <img src="<?php echo $server_url; ?>images/case-study/es_3.jpg" />
        <div class="details">
            <h2>EcoSeekr.com</h2>
            <p>EcoSeekr racchiude in una semplice e gradevole interfaccia, uno strumento potente e scalabile al servizio di tutti gli operatori del settore dei rifiuti ed energie alternative</p>
        </div>
    </div>
    
    <!-- HostessPRO gallery -->
    
    <div class="apple_overlay" id="hp_1"> <img src="<?php echo $server_url; ?>images/case-study/hp_1.jpg" />
        <div class="details">
            <h2>HostessPRO</h2>
            <p></p>
        </div>
    </div>
    <!--
    <div class="apple_overlay" id="hp_2"> <img src="<?php echo $server_url; ?>images/case-study/hp_2.jpg" />
        <div class="details">
            <h2>HostessPRO</h2>
            <p></p>
        </div>
    </div>
    -->
    <div class="apple_overlay" id="hp_3"> <img src="<?php echo $server_url; ?>images/case-study/hp_3.jpg" />
        <div class="details">
            <h2>Conto-energia</h2>
            <p></p>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
    <script> 
$(function() {
	$("#triggers img[rel]").overlay({
		effect: 'apple',
		mask: {
			color: '#000',
			loadSpeed: 1200,
			opacity: 0.7
		}/*,
		closeOnClick: false*/
	});
	$("#slidetabs1").tabs("#gallery1 > img", {
		effect: 'fade',
		fadeOutSpeed: "slow",
		rotate: true
	}).slideshow({interval: 2800, autoplay: true});	
	$("#slidetabs2").tabs("#gallery2 > img", {
		effect: 'fade',
		fadeOutSpeed: "slow",
		rotate: true
	}).slideshow({interval: 3000, autoplay: true});	
	//$("#slidetabs3").tabs("#gallery3 > img", {
	//	effect: 'fade',
	//	fadeOutSpeed: "slow",
	//	rotate: true
	//}).slideshow({interval: 3300, autoplay: true});	
});
</script>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
