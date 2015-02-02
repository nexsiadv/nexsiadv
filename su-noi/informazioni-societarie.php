<?php
	$menu['su-noi']='class="active"';
	$menu_sec['voce5']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Informazioni societarie e bancarie di admize srl">
<meta name="keywords" content="informazioni, societa, societarie, admize, srl">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Informazioni societarie e bancarie</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
<style>
table {
	padding: 10px 0;
}
table td{
	padding: 4px 0;
}
</style>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title noi">Su di noi</h2>
</div>
<div id="content" class="clearfix">
    <div class="tab_container">
        <div class="tab_content"> </div>
        <div class="tab_content">
            <div class="sx">
                <div class="box standard">
                    <?php @include("inc_web/menu.php"); ?>
                </div>
            </div>
            <div class="dx">
                <div class="clearer thirty"></div>
                <h2>Informazioni societarie e bancarie</h2>
                <h3>Le informazioni relative alla nostra organizzazione</h3>
                <h3>Dati societari</h3>
                <table width="100%" border="0" cellspacing="0">
                    <tr>
                        <td width="30%" valign="top"><strong>Ragione sociale:</strong></td>
                        <td width="70%" valign="top"><strong>Admize SRL</strong></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Partita iva:</strong></td>
                        <td valign="top">01692830498</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Codice fiscale azienda:</strong></td>
                        <td valign="top">01692830498</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Iscrizione REA:</strong></td>
                        <td valign="top">LI-0149754</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Capitale sociale iv:</strong></td>
                        <td valign="top">10.000 euro</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Indirizzo:</strong></td>
                        <td valign="top">Via Aurelio Nicolodi 54, Livorno</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Cap:</strong></td>
                        <td valign="top">57121</td>
                    </tr>
                </table>
                <h3>Dati bancari </h3>
                <table width="100%" border="0" cellspacing="0">
                    <tr>
                        <td width="30%" valign="top"><strong>Banca:</strong></td>
                        <td width="70%" valign="top">Banca di Credito Cooperativo di Castagneto Carducci<strong> - </strong>FIliale di Livorno Ag.2.<br>
                            Via dell'Artigianato, 37/E cap. 57121 Livorno.  Tel +39 0586 426798.</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>BBAN:</strong></td>
                        <td valign="top">G0846113901000010341394</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>IBAN:</strong></td>
                        <td valign="top">IT 51 G 08461 13901 000010341394</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>SWIFT:</strong></td>
                        <td valign="top">BCCDIT3CXXX</td>
                    </tr>
                </table>
                <h3>PEC</h3>
                <table width="100%" border="0" cellspacing="0">
                    <tr>
                        <td width="30%" valign="top"><strong>Posta elettronica certificata:</strong></td>
                        <td width="70%" valign="top"><a href="mailto: admizesrl@cgn.legalmail.it">admizesrl@cgn.legalmail.it</a></td>
                    </tr>
                </table>
                
                    <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
