<?php
	$menu_sec['voce0']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Condizioni generali di uso dei servizi Admize">
<meta name="keywords" content="contratti, contratto, condizioni generali di utilizzo dei servizi, vendita, contratto admize">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Condizioni generali di uso dei servizi Admize</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
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
                <h2>Condizioni generali per l'erogazione dei servizi Admize</h2>
                <h3>Introduzione</h3>
                <p>testo normativa</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
