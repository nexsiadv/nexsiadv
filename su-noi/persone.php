<?php
	$menu_sec['voce1']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Persone e team di sviluppo">
<meta name="keywords" content="persone, team, collaboratori, collaboratrici, consulenti, web, marketing, e-business">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Persone e team di sviluppo</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title noi">Su di noi</h2>
</div>
<div id="content" class="clearfix">
    <div class="tab_container">
        <div class="tab_content">
            <div class="sx">
                <div class="box standard">
                    <?php @include("inc_web/menu.php"); ?>
                </div>
            </div>
            <div class="dx clearfix">
                <div class="spacer thirty"></div>
                <h2>Persone, collaboratori, consulenti e simpatizzanti di Admize per il tuo e-business </h2>
                <h3>La nostra risorsa più grande sono le persone e le loro competenze, l'assoluta condivisione degli obiettiviti, lo spirito di gruppo e la grande passione per il nostro lavoro. </h3>
                <div class="spacer twenty"></div>
                <h2 class="icon_intro">Core team</h2>
                <div class="spacer twenty"></div>
                <div class="people">
                    <div class="thumb"><img src="<?php echo $server_url; ?>images/people/gabriele_stampa.png" width="114" height="114" alt="Fabrizio Ciacchi"></div>
                    <h2>Gabriele Stampa</h2>
                    <h3>General Manager &amp; Business Developer</h3>
                    <p><a href="mailto:gabriele.stampa@admize.it" style="background: url(<?php echo $server_url; ?>images/icon_email.png) no-repeat 0 center; padding-left: 20px;">gabriele.stampa@admize.it</a><br>
                        <a href="http://www.linkedin.com/in/gabrielestampa" target="_blank" style="background: url(<?php echo $server_url; ?>images/icon_linkedin_small.png) no-repeat 0 center; padding-left: 20px;">profilo Linkedin</a></p>
                </div>
                <div class="people">
                    <div class="thumb"> <img src="<?php echo $server_url; ?>images/people/tazio_andrei.png" width="114" height="114" alt="Fabrizio Ciacchi"></div>
                    <h2>Tazio Andrei</h2>
                    <h3>Co-founder &amp; Business Developer</h3>
                    <p><a href="mailto:tazio.andrei@admize.it" style="background: url(<?php echo $server_url; ?>images/icon_email.png) no-repeat 0 center; padding-left: 20px;">tazio.andrei@admize.it</a><br>
                        <a href="#" target="_blank" style="background: url(<?php echo $server_url; ?>images/icon_linkedin_small.png) no-repeat 0 center; padding-left: 20px;">profilo Linkedin</a></p>
                </div>
                <div class="people">
                    <div class="thumb"> <img src="<?php echo $server_url; ?>images/people/gianluca_monti.png" width="114" height="114" alt="Fabrizio Ciacchi"></div>
                    <h2>Gianluca Monti</h2>
                    <h3>Web Designer Senior</h3>
                    <p><a href="mailto:gianluca.monti@admize.it" style="background: url(<?php echo $server_url; ?>images/icon_email.png) no-repeat 0 center; padding-left: 20px;">gianluca.monti@admize.it</a><br>
                        <a href="http://www.linkedin.com/in/gimoz" target="_blank" style="background: url(<?php echo $server_url; ?>images/icon_linkedin_small.png) no-repeat 0 center; padding-left: 20px;">profilo Linkedin</a></p>
                </div>
                <div class="people">
                    <div class="thumb"> <img src="<?php echo $server_url; ?>images/people/fabrizio_ciacchi.png" width="114" height="114" alt="Fabrizio Ciacchi"></div>
                    <h2>Fabrizio Ciacchi</h2>
                    <h3>Web Developer Senior</h3>
                    <p><a href="mailto:fabrizio.chiacchi@admize.it" style="background: url(<?php echo $server_url; ?>images/icon_email.png) no-repeat 0 center; padding-left: 20px;">fabrizio.ciacchi@admize.it</a><br>
                        <a href="http://www.linkedin.com/in/ciacchi" target="_blank" style="background: url(<?php echo $server_url; ?>images/icon_linkedin_small.png) no-repeat 0 center; padding-left: 20px;">profilo Linkedin</a></p>
                </div>
                <div class="clearer"></div>
                <h2 class="icon_intro">Consulenti</h2>
                <p>In costruzione</p>
                <div class="clearer twenty"></div>
                <div class="clearer"></div>
                <h2 class="icon_intro">Account commerciali</h2>
                <p>In costruzione</p>
                <div class="clearer twenty"></div>
                <div class="tips yellow">
                    <div class="ribbon_tips"></div>
                    <p><em>Trovarsi insieme è un inizio, restare insieme un progresso…lavorare insieme un successo.<br>
                        H.Ford</em></p>
                </div>
                <div class="clearer twenty"></div>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
