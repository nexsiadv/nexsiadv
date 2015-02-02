<?php
	$menu['web-marketing']='class="active"';
	$menu_sec['voce4']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Scopri come modificare e gestire il web marketing per la tua impresa per massimizzare il tuo investimento online, Introduzione al web marketing, per comprendere come il web modifica il modo di fare azienda, per relazionarsi con i propri clienti e fornitori">
<meta name="keywords" content="web marketing, web marketing turistico, web marketing blog, web marketing agency, web marketing service, consulenza web marketing,web marketing, web marketing turistico, web marketing blog, web marketing agency, web marketing service, consulenza web marketing, web marketing, introduzione, marketing per il web, consulente web marketing, marketing non convenzionale, e-web marketing">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Web marketing, come il marketing per il web, trasforma il tuo investimento online in un successo</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
</head>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script> 
	$(function() {
		$(".tabs ul").tabs("div.tab_content", {effect: 'fade'});
	});
</script>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title web_marketing">Web Marketing</h2>
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
                <h2>Email Marketing</h2>
                <h3>sbranasti?</h3>
                <p>a voglia!</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
