<?php
	$menu['web-design']='class="active"';
	$menu_sec['voce4']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Web content development, servizi, studi e consulenze per migliorare e gestire i tuoi contenuti online">
<meta name="keywords" content="web content development,ecommerce web development,web content,business web development,e commerce web development,
internet development,web design development,web development design,
webdeveloper,web design studio,web design agency,web development site,website development,web developer,web designer,
developer web,design development,development web">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Web content development, servizi, studi e consulenze per migliorare e gestire i tuoi contenuti online</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
</head>
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
    <h2 class="title web_design">Web Design</h2>
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
                <h2>Web content development</h2>
                <h3>Sviluppiamo contentui e strutture web altamente performanti ed ottimizzate per i motori di ricerca ed il web marketing</h3>
                <p>Una foto vale più di mille parole, ma nel mondo dei motori di ricerca e web marketing, la corretta parola chiave è più importante di mille canali di vendita. Il <strong>Web Content Development è di vitale importanza </strong>quando si tratta di SEO o ottimizzazione dei motori di ricerca (SEM). </p>
                <p>Oggi puoi utilizzare la tua piattaforma online per attirare – in modo passivo ed organico – molti più utenti dai principali motori di ricerca.</p>
                <p> Lavorare "tecnicamente" sulla semantica, la qualità e sul contenuto del vostro sito web, può generare traffico e molti visitatori in modo gratuito sul vostro sito web direttamente dai principali motori di ricerca. </p>
                <h3>Senza alterare la leggibilità e la facilità di comprensione, possiamo produrre contenuti web ad altissimo rendimento.</h3>
                <ul class="dot">
                    <li>Parole chiave (Keywords) ottimizzate per i motori di ricerca e le campagne di marketing.</li>
                    <li>Keyword density: Utilizziamo le Keyword di segmento in titoli, descrizioni, nomi di pagina. </li>
                    <li>Elaboriamo testi e descrizioni concisi con ridondanza delle keywords</li>
                </ul>
                <h3>Architettura dell'informazione </h3>
                <p>L' identificazione di un obiettivo ad hoc, la navigazione e il codice visivo <strong>possano trasformare un sito web in un negozio dove  proliferano le vendite e gli ordini anziché visite vuoto! </strong>Attraverso la nostra continua ricerca <strong>progettiamo siti web con criteri di canalizzazione ed informazione (tipici del web)</strong> che soddisfano le esigenze dei visitatori.</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
