<?php
	$menu['su-noi']='class="active"';
	$menu_sec['voce2']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Partners e fornitori tecnologici admize srl">
<meta name="keywords" content="partner, fornitori">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Partners e Fornitori tecnologici</title>
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
                <h2>Partners e Fornitori</h2>
                <h3>Lista dei nostri principali partners e fornitori tecnolgici</h3>
                <div class="spacer twenty"></div>
            	<h2 class="icon_intro"> Marketing &amp; Advertising</h2>
                <div class="spacer twenty"></div>
            </div>
            <div class="dx partners clearfix">
                <div class="clearer twenty"></div>
                <div class="partner_sheet">
                    <a href="https://www.google.com/intl/it/dfp/info/welcome.html" class="thumb google_dfp">Doubleclick for Publisher by Google</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.tradedoubler.com/it-it/" class="thumb tradedoubler">Tradedoubler</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://advertising.microsoft.com/italia/home" class="thumb microsoft_adv">Microsoft Advertising</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://advertising.yahoo.com/" class="thumb yahoo_adv">Yahoo Advertising Solutions</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.zanox.com/it/" class="thumb zanox">Zanox</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://adwords.google.it" class="thumb google_adwords">Google Adwords</a>
                </div>
                <div class="clearer twenty"></div>
            	<h2 class="icon_intro">Partners tecnologici</h2>
                <div class="clearer twenty"></div>
                <div class="partner_sheet">
                    <a href="http://www.aruba.it/" class="thumb aruba">Aruba</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.telecomitalia.it/" class="thumb telecom">Telecom</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.ubuntu.com/" class="thumb ubuntu">Ubuntu</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.skype.com/" class="thumb skype">Skype</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.paypal.it/" class="thumb paypal">Paypal</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.alfresco.com/" class="thumb alfresco">Alfresco</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://it.wordpress.com/" class="thumb wordpress">wordpress</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.joomla.org/" class="thumb joomla">Joomla</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.drupal.org/" class="thumb drupal">Drupal</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://framework.zend.com/" class="thumb zend">Zend Framework</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://www.symfony-project.org/" class="thumb symfony">Symfony Framework</a>
                </div>
                <div class="partner_sheet">
                    <a href="http://codeigniter.com/" class="thumb codeigniter">Codeigniter Framework</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
