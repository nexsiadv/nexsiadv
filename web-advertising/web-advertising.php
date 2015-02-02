<?php
	$menu['web-advertising']='class="active"';
	$menu_sec['voce0']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Sviluppo e gestione di campagne pubblicitarie e piani di investimento per la pubblicit&agrave; in internet e nei nuovi media">
<meta name="keywords" content="web, advertising, pubblicit&agrave; online, promozione sito web, e-web marketing, mail marketing, mail advertising, web business, advertising business, web advertising strategy, budget pubblicit&agrave; online, modelli di investimento budget pubblicitari, online, modello di investimento per la pubblicit&agrave; online, profitto, roi, ritorno dall'investimento, web advertising,web banner advertising,advertising online,banner advertising,
advertising web,sviluppo web advertising,web internet marketing,
pay per click,advertising network,web marketing services,internet online marketing,advertising internet,promozione siti web,
promozione siti internet,promozione sito web,web agency,business internet">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Web Advertising, sviluppo e gestione di campagne pubblicitarie integrate in internet e nei nuovi media</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
</head>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script> 
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$(".tabs ul").tabs("div.tab_content", {effect: 'fade'});
});
</script>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title web_advertising">Web Advertising</h2>
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
                <h2>Web advertisng</h2>
                <h3>Fare  pubblicità  in internet e nei nuovi media</h3>
                <p>I <strong>motori di ricerca e i social network sono lo strumento più utilizzato sul web</strong>, secondi solo alla posta elettronica nella lista delle attività più frequenti svolte dagli utenti internet. <strong>E' quindi evidente che siano uno dei mezzi più importanti per lo sviluppo della visibilità di un sito web</strong>.</p>
                <p>Il fatto che la <strong>funzione di ricerca sia la più diffusa tra le attività online</strong>, <strong>mette in evidenza come l'accesso ai siti web avvenga, nella maggior parte dei casi, attraverso i motori di ricerca.</strong> Naturalemente ci riferiamo alla <em>&quot;prima visita&quot; </em>, successivamente alla quale il navigatore interessato al sito potrà memorizzarlo tra i suoi <em>&quot;preferiti&quot;</em> o comunque tornarci digitandone il direttamente il nome o l'indirizzo esatto sul programma di navigazione.</p>
                <p><strong>Negli ultimi anni hanno acquisito particolare importanza nerl web marketing, anche i Social Network</strong>, <em>(come ad esempio: Facebook, Linkedin, Netlog, Twitter ecc)</em> e sono diventati strumenti per il posizionamento di particolari annunci pubblicitari studiati ad hoc in funzione del profilo a target dell'utente in cui appaiano. </p>
                <p><strong>Con il termine web advertising si individuano quindi tutte le azioni principali che devono essere attuate per progettare ed attuare una campagna pubblicitaria online per i tuoi servizi o prodotti.</strong></p>
                <h3>Cosa possiamo fare per te?</h3>
                <ul class="dot">
                    <li>Pianificare, attivare, gestire e monitorare le tue campagne pubblicitarie online in italia e all'estero</li>
                    <li>Aumentare il numero di utenti sul tuo sito</li>
                    <li>Modificare il tuo sito web per renderlo più performante aumentandone il tasso di conversione <em><br>
                        (numero di utenti/numero di vendite generate)</em></li>
                    <li>Sviluppare campagne pubblicitarie basate su concorsi a premi e landing page</li>
                    <li>Gestire il full-maneinance i tuoi canali pubblicitari </li>
                    <li>Massimizzare il ROI (ritorno dall'investimento)</li>
                    <li>Consulenze specifiche </li>
                </ul>
                <div class="clearer twenty"></div>
                <div class="tips yellow">
                    <div class="ribbon_tips"></div>
                    <p> <em>Smettere di fare pubblicità per risparmiare soldi è come fermare l'orologio per risparmiare il tempo. <br>
                        H.Ford</em></p>
                </div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
