<?php
	$menu['web-design']='class="active"';
	$menu_sec['voce0']='class="active"';
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
                <h2>Come nasce ed evolve il tuo sito aziendale</h2>
                <h3>Admize &egrave; in grado di portarvi al successo nel web attraverso una rigorosa applicazione degli standard  e  tecnologie allo stato dell'arte.</h3>
                <p>La realizzazione di un sito web &egrave; <strong>un'operazione che coinvolge e fonde   diverse competenze</strong>. In Admize sappiamo come bene come deve essere svolto questo compito: Il prodotto finale deve essere gradevole, di facile   esplorazione, deve presentare in maniera chiara i propri contenuti ed essere   utilizzabile in sicurezza, fluidit&agrave; e massima semplicit&agrave;.</p>
                <p>Per raggiungere questo obiettivo &egrave; basilare, oltre alla tipica figura del web designer, una serie di  competenze multidisciplinari, che portano il tuo sito ben oltre il semplice concetto di  vetrina aziendale. </p>
                <p>Concetti come <strong>accessibilit&agrave;</strong>, <strong>usabilit&agrave;</strong>, <strong>conformit&agrave;</strong> a standard tecnici ben definiti e non ultimi concetti tipici del marketing come <strong>brand-awareness</strong> (percezione dell'immagine aziendale) e <strong>customer care</strong>, sono altrettanto importanti per raggiungere gli obiettivi sopra delineati ed in <strong>Admize sappiamo come renderli al massimo</strong>.</p>
                <p>Ma per avere un prodotto vincente &egrave; necessario fare una pianificazione efficiente.</p>
                <div class="clearer twenty"></div>
                <div class="tips yellow">
                    <div class="ribbon_tips"></div>
                    <p>Un sito dallo stile inconfondibile ed accattivante  da sicuramente valore alla vostra immagine ed attivit, ma sempre senza perdere di vista lo scopo ultimo di questo strumento: aumentare e consolidare il volume dei vostri affari!!</p>
                </div>
                <div class="clearer "></div>
                <h3>Punti chiave del processo di pianificazione e sviluppo di un sito web.</h3>
                <ul class="dot">
                    <li>La definizione del 'Concept'.</li>
                    <li>Produrre e organizzare i contenuti.</li>
                    <li>Controllo, valutazione e manutenzione del sito.</li>
                </ul>
                <p>Per quanto essenziali, <strong>questi punti sono solo l'inizio di un processo per sua natura in continuo perfezionamento</strong> ed adattamento della canalizzazione dell'utente verso l'obiettvo finale del sito: portare velocemente il cliente a voi e soprattutto <strong>creare una fidelizzazione sempre più solida e concreta</strong>.</p>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
