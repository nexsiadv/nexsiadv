<?php 
	$menu['home']='class="active"'; 
	include("conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Nexsiadv, aiuta piccole e grandi aziende ad integrare con profitto il web nei propri processi di business per accrescerne la competitivit&agrave;, la produttivit&agrave; e definire nuovi scenari competitivi">
<meta name="keywords" content="e-business, e-marketing, strategie di marketing online, web marketing, internet business model, marketin mix, web, mix, media marketing, piano marketing, business plan, piano marketing, comunicazione integrata, analisi web, performance web, e-commerce, e-business, system provider">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Nexsiadv, Il primo E-Business System Provider in Italia</title>
<?php @include($server_pth."/inc_web/header-util.php"); ?>
<link href="<?php echo $server_url; ?>css/tabs-slideshow.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="content" class="clearfix">
    <div class="clearer thirty"></div>
    <div class="mono">
        <h2 class="icon_intro">Aiutiamo il tuo business e la tua azienda a crescere e prosperare online...</h2>
    </div>
    <div class="clearer ten"></div>
    <div class="mono path" >
        <p class="point1"><span><strong>1)</strong> </span>Iniziamo un <strong>percorso consulenziale </strong>per valutare insieme  a te le possibili soluzioni di <strong>E-Business</strong> da integrare nella tua catena del valore e il tuo business tradizionale.<br>
            <a href="e-business/e-business.php" class="button_arrow">scopri di pi&ugrave;</a></p>
        <p class="point2"><span><strong>2)</strong> </span>Rivediamo e sviluppiamo insieme, un nuovo <strong>Marketing Mix </strong>per i tuoi prodotti e servizi <strong>orientato al web</strong> ed al mercato digitale.<br>
            <a href="web-marketing/web-marketing.php" class="button_arrow">scopri di pi&ugrave;</a></p>
        <p class="point3"><span><strong>3)</strong> </span>Integriamo, trasferiamo e ti aiutiamo a <strong>gestire con successo </strong>e profitto <strong> il tuo Business online</strong>.<br>
            <a href="e-business/e-business.php" class="button_arrow">scopri di pi&ugrave;</a></p>
        <div class="slogan">
            <h2><strong>Nexsiadv</strong> &egrave; il tuo <strong>partner di riferimento</strong> per lo sviluppo di soluzioni<br>
                <strong>e-Business Integrate</strong><br>
                a misura di piccola e media impresa<br>
                <strong><small>... non chiamateci web agency!</small></strong></h2>
        </div>
    </div>
    <div class="clearer forty"></div>
    <!--<div class="clearer forty"></div>
    <div class="half">
        <h2 class="icon_case_study">Casi di studio</h2>
    </div>
    <div class="half">
        <div class="slidetabs" style="margin-top: 0px; background: url(images/bg_bridge.png) no-repeat 0 0; padding: 11px 60px; float: right;"><a href="#"></a><a href="#"></a></div>
    </div>
    <div class="clearer"></div>
    <div class="divider_shadow"></div>
    <div class="mono people">
        <ul class="case_study">
            <li><a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php"><img src="<?php echo $server_url; ?>images/case-study/ce_1_thumb.png" width="332" height="203" alt="Schermata home page Conto-energia.biz"></a>
                <h2>Conto-energia S.p.A.</h2>
                <h3>Portale  informativo e  sistema di configurazione e vendita di impianti fotovoltaici</h3>
                <p>Conto-energia.biz è un portale dedicato al mondo del fotovoltaico. Ricco di contenuti informativi, il suo punto di forza &egrave; l'esclusivo "configuratore d'impianto", che permette di valutare in tempo reale la realizzazione del proprio impianto...</p>
                <a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php" class="button_segui_reflex">scopri di pi&ugrave; &raquo;</a> </li>
				<li><a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php"><img src="<?php echo $server_url; ?>images/case-study/es_1_thumb.png" width="332" height="203" alt="Schermata home page EcoSeekr.eu"></a>
                <h2>EcoSeekr</h2>
                <h3>Fiera virtuale rivolta a tutti gli operatori direttamente e indirettamente operanti nel settore dell'ambiente, energia e rifiuti</h3>
                <p></p>
                <a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php" class="button_segui_reflex">scopri di pi&ugrave; &raquo;</a> </li>
				<li><a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php"><img src="<?php echo $server_url; ?>images/case-study/hp_1_thumb.png" width="332" height="203" alt="Schermata home page HostessPRO.it"></a>
                <h2>HostessPRO</h2>
                <h3>Portale per corsi e workshop in tutta italia per Hostess congressuali, eventi o promoter.</h3>
                <p></p>
                <a href="<?php echo $server_url; ?>su-noi/casi-di-studio.php" class="button_segui_reflex">scopri di pi&ugrave; &raquo;</a> </li>

        </ul>
    </div>-->
    <div class="half">
        <h2 class="icon_social_area">Social Area</h2>
    </div>
    <div class="clearer"></div>
    <div class="divider_shadow"></div>
    <div class="mono">
        <?php @include($server_pth."inc_web/social_box.php"); ?>
        <div class="clearer forty"></div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css">
<script> 
$(document).ready(function() {
	$(".slidetabs").tabs(".case_study > li", {
		effect: 'fade',
		fadeOutSpeed: "slow",
		rotate: true
	}).slideshow({interval: 4000, autoplay: true});	
});
</script>
</body>
</html>
