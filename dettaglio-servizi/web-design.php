<?php
	$menu_sec['voce7']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Ti aiutiamo a costruire un design funzionale, accattivante ed in linea con i tuoi obiettivi di web marketing">
<meta name="keywords" content="web, design, web design, utente, canalizzazione utente, interfaccia utente, user experiance, user friendly design, esperienza utente, efficacia del web design, raggiungimento obiettivi web deisgn, studio della comunicazione, architettura dell'informazione, web design consulente, web design consulenza, canalizzazione utenti, obiettivi, obiettivo">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Admize, consulenze e progetti per il web Design, scopri i nostri servizi per il web design, l'interfaccia utente e la gestione della canalizzazione delle visite per il tuo sito web</title>
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
                <h2>Web Design</h2>
                <h3>Interpretiamo il design per il web per aumentare la profondità dell'esperienza dell'utente e l'efficacia della tua struttura online.</h3>
                <p>L' <strong>esperienza utente  e l'usabilità esprimono l'efficacia</strong>, l'efficienza e la soddisfazione con le quali un utente raggiunge i suoi obiettivi sul tuo sito web. La chiave per creare questa comprensione è una complessa scienza che deve essere applicata mentre al processo di sviluppo del tuo sito web, portale o e-commerce.</p>
                <p> <strong>Nell'utente soddisfatto si genera subito un parere  positivo e diffuso sulla tua attività online che si espande fino al concetto reale della tua azienda. </strong></p>
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
