<?php
	$menu['web-design']='class="active"';
	$menu_sec['voce3']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Display advertising e banner design, sviluppo e ideazione di banner pubblicitari per il web e i nuovi media">
<meta name="keywords" content="advertising banner,display banner,crea banner,advertising network,creare banner,display marketing,banner designer,banner pubblicitari,creazione banner,scambio banner,banner google,banner flash,banner online,display ad,web banner advertising,digital advertising,banner template,display advertising,banner,banner creator,banner web,banner advertising,advertising display,banner display,banner animati,come creare un banner,google banner,editor banner,creare banner online,
ad network,flash banner creator,creare banner flash,banner in flash,banner rotator,bannermaker,">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Display advertising e banner design, sviluppo e ideazione di banner pubblicitari per il web e i nuovi media</title>
<?php @include($server_pth."inc_web/header-util.php"); ?></head>
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
                <h2>Display Advertising e Banner Design</h2>
                <h3>Sviluppo di banner pubblicitori per il web e per i nuovi media  in adobe flash e altre tecnologie</h3>
                <p>Il Display advertising utilizza spazi a pagamento all'interno di un contenuto di interesse dell'utente in cui promuovere un prodotto/servizio. I formati rientrano in 4 grandi categorie: Banners e buttons, Pop-up e pop Under, Rich Media, Interstitial e Superstitial. </p>
                <p>Non sempre le campagne display sono efficaci; un modo per cercare di aumentarne l'efficacia è quello di fare una buona pianificazione degli spazi in modo da intercettare il target. Per questo risulta importante il ruolo del centro media. </p>
                <p>Nella fase di implementazione del piano, si apre una negoziazione/collaborazione con le concessionarie per acquistare degli spazi pubblicitari. Importante in questo caso avere una conoscenza dei siti dei portali e del tipo di audiance che raccolgono, al fine di investire il budget in modo mirato. </p>
                <p>Le concessionarie vendono gli spazi in concessione: siti, portali, social network, community. </p>
                <p>La campagna viene costantemente monitorata attraverso strumenti di tracking specifici. </p>
                <p>La misurazione e vendita degli spazi viene effettuata per impression o CPM (cost per mille impression), tale dato rappresenta la visualizzazione del banner da parte dell'utente. Il click through rate (CTR) rappresenta il numero di click da parte dei visitatori del sito sul banner o link in generale, ma solo se questi hanno poi realmente raggiunto il contenuto richiesto e linkato nella pubblicità. L'efficacia di una campagna si misura perciò con il click rate (CR), cioè il rapporto percentuale tra il numero di Impression erogate di un Ad e il numero di AdClick sullo stesso.</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
