<?php
	$menu_sec['voce15']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Scopri quale soluzione &egrave; pi&ugrave; adatta alle tue esigenze. Admize sviluppa soluzioni E-BUSINESS ALL-IN-ONE e su misura per la piccola e media impresa">
<meta name="keywords" content="e-business, e-business full manteinance, assistenza tecnica, consulenza, e-business starter kit, contesto web, e-commerce, cms, web adv, web advertising, advertising, budget, servizi, costi e-business, costo progetto, costi e-business, dettagli dei servizi, soluzioni piccola e media impresa, soluzioni pmi">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Quanto investire nell'e-Business? Scopri le Soluzioni E-BUSINESS ALL-IN-ONE Admize e l'offerta su misura per la piccola e media impresa</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title servizi">Servizi in dettaglio</h2>
</div>
<div id="content" class="clearfix">
    <div class="tab_container">
        <div class="tab_content">
            <div class="sx">
                <div class="box standard">
                    <div class="clearer ten"></div>
                    <?php @include("inc_web/dettaglio-servizi.php"); ?>
                </div>
            </div>
            <div class="dx">
                <div class="clearer thirty"></div>
                <h2>Quanto investire nell'e-Business</h2>
                <h3>Sviluppiamo soluzioni E-BUSINESS ALL-IN-ONE a misura di piccola e media impresa!</h3>
                <table class="tavola_servizi" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <th width="260">Dettagli dei servizi</th>
                        <th width="310">Servizi compresi</th>
                        <th width="153">Budget</th>
                    </tr>
                </table>
                <?php /*<h3 class="left">Dettagli dei servizi</h3>
                <h3 class="left" style="padding-left: 200px;">Servizi compresi</h3>
                <h3 class="left" style="padding-left: 120px;">Budget</h3> */ ?>
                <div class="clearer twenty"></div>
                <div class="grafico_budget">
                    <ul>
                        <li><a href="#">Web producer management</a></li>
                        <li><a href="#">Web marketing management</a></li>
                        <li><a href="#">Monitoraggio ROI</a></li>
                        <li><a href="#">Web advertising management</a></li>
                        <li><a href="#">Tuning canalizzazione utenti </a></li>
                        <li><a href="#">Tuning e editing interfaccia user-fiendly</a></li>
                        <li><a href="#">Server Linux dedicato e gestione ambiente LAMP</a></li>
                        <li><a href="#">Firewall Zyxell Zywall 2 Plus</a></li>
                    </ul>
                    <ul>
                        <li>Web advertising management</li>
                        <li>Tuning canalizzazione utenti </li>
                        <li>Tuning e editing interfaccia user-fiendly</li>
                        <li>Server Linux dedicato e gestione ambiente LAMP</li>
                        <li>Firewall Zyxell Zywall 2 Plus</li>
                    </ul>
                    <ul>
                        <li>Web advertising management</li>
                        <li>Tuning canalizzazione utenti </li>
                        <li>Tuning e editing interfaccia user-fiendly</li>
                    </ul>
                    <ul>
                        <li>Setup Content Management System</li>
                        <li>Web advertising management</li>
                        <li>Tuning canalizzazione utenti</li>
                    </ul>
                </div>
                <div class="clearer twenty"></div>
                <?php @include("inc_web/tab_servizi.php"); ?>
                <div class="clearer"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
