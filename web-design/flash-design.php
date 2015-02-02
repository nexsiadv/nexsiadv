<?php
	$menu['web-design']='class="active"';
	$menu_sec['voce2']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Flash design, sviluppo applicazioni, animazioni e banner pubblicitari con tecnologia adobe flash">
<meta name="keywords" content="web flash design,flash banner,
banner, applicazioni flash,flash designer,flash banner designer,templates flash,flash design,web design flash,flash web page,web design agency,flash template,
template flash,design corporate,agenzia pubblicitaria,flash site,web design studio,web design inspiration,
flash builder,flash web designer,flash creator,flash editor,flash,flash web site design,
shockwave flash,web designer,flash xml">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Flash design, interattività, applicazioni e sviluppi ondemand su piattaforma adobe flash</title>
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
                <h2>Flash Design</h2>
                <h3>Flash design, sviluppo applicazioni, animazioni e banner pubblicitari con tecnologia adobe flash</h3>
                <p>Adobe Flash è un framework di sviluppo molto efficace per <strong>sviluppare applicazioni, banner pubblicitari o contentui grafici dinamici </strong><em>- anche intregrabili con fonti di dati provenienti dai database o xml -</em> per il web. <strong>E' una piattaforma molto versatile</strong> ed integrabile sia nel web che nelle device come palmari e smartphone (periferiche ultraportatili Apple escluse). </p>
                <h3>Cosa possiamo fare per te?</h3>
                <p>Possiamo <strong>sviluppare ed integrare nel tuo software o nel tuo contesto web qualsisi tipo di applicazione</strong> o interfaccia web in Adobe Flash, oppure fornirti di una <strong>semplice consulenza</strong>.</p>
                <ul class="dot">
                    <li>Applicativi</li>
                    <li>Video games</li>
                    <li>Concorsi a premi</li>
                    <li>Configuratori online</li>
                    <li>Banner pubblicitari flash (Display Advertising)</li>
                    <li>Altro on demand</li>
                </ul>
                <h3>Il nostro punto di vista</h3>
                <p>Riteniamo che la tecnologia Adobe Flash <strong>riteniamo opportuno che questa sia utilizzata solamente in alcuni casi</strong>, dove si rende opportuna, necessaria e dove altri tipi di programmazione non riescono ad eguagliarne le principali funzionalità. <br>
                    - <strong>L'abuso della tecnologia Adobe Flash a può infatti penalizzare moltissimo il tuo contesto web</strong>!</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
