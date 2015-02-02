<?php
	$menu['web-design']='class="active"';
	$menu_sec['voce1']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Scopri i nostri servizi per il miglioramento delle performance di usabilit&agrave;, navigabilit&agrave; ed esperienza utente del tuo sito web e fai trovare subito ai tuoi clienti quello che stanno cercando">
<meta name="keywords" content="agenzia web design,grafica siti web,servizi web design,servizi web,web design agency,web design,agenzie web design,studio web design,
siti web design,italian web design,web design studio,3d web design,web design blog,web design magazine,preventivo siti web,creare web design,promozione siti web,agenzie web,realizzare un sito web,restyling siti web">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Introduzione ai nostri servizi di web design</title>
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
                <h2>Web Design</h2>
                <h3>Interpretiamo il design per il web per aumentare la profondità dell'esperienza dell'utente e l'efficacia della tua struttura online.</h3>
                <p>L' <strong>esperienza utente  e l'usabilità esprimono l'efficacia</strong>, l'efficienza e la soddisfazione con le quali un utente raggiunge i suoi obiettivi sul tuo sito web. La chiave per creare questa comprensione è una complessa scienza che deve essere applicata mentre al processo di sviluppo del tuo sito web, portale o e-commerce.</p><p>
                    <strong>Nell'utente soddisfatto si genera subito un parere  positivo e diffuso sulla tua attività online che si espande fino al concetto reale della tua azienda. </strong></p>
                <p> Un <strong>corretto equilibrio, tra forma, funzione, canalizzazione utente ed iterazione con il software </strong>è un compito difficile che noi ci sentiamo in grado di assolvere con la più assoluta sicurezza e serenità. </p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
