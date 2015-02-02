<?php
	$menu['web-marketing']='class="active"';
	$menu_sec['voce1']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Scopri come modificare il marketing mix per adottarlo al web ed attivare una soluzione e-business di successo">
<meta name="keywords" content="Web marketing mix, marketing mix, web marketing, marketing, e-web marketing, piani marketing, consulente marketing, consulenti web marketing, web marketing mix">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Modificare il marketing mix per adottarlo al web ed attivare una soluzione e-business di successo</title>
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
                <h2>Marketing mix e web marketing mix</h2>
                <h3>Modificare il marketing mix e le 4P per adottarle al web ed ai comportamenti internet web 2.0</h3>
                <p>Quando Neil Borden invento il termine MARKETING MIX e E. Jerome Mc Carthy propose la classificazione a 4P non avevano presenti i canali di marketing e advertising propri del contesto web. Di fatto si parla degli anni 50' e 60' dove non esistevano ne i motori di ricerca ed i social network.</p>
                <h3>Il prodotto</h3>
                <p><strong>Nel web,  prodotti o servizi sono reali e disponibili sul mercato</strong> direttamente ai consumatori come ad esempio nelle strutture B2C (Business to Consumer) o tra le aziende B2B (business to business). In internet <strong>è essenziale mostrare il proprio prodotto sul proprio sito</strong>,<strong> in modo preciso, attento, dettagliato ed evoluto. </strong></p>
                <p>Per questo motivo, il vostro <strong>sito web deve avere tutte le funzionalità necessarie per sostituirsi ad uno scaffale di un negozio reale</strong>. Di fatto, diventeranno importanti, dettagli ed informazioni, fotografie e commenti e altre informazioni utili sulla vostra azienda e la logistica.</p>
                <h3>Prezzo</h3>
                <p><strong>Non spaventatevi di mostrare il prezzo online nelle vostre pubblicità.</strong> Nella maggior parte dei casi, mostrare il prezzo su un banner o nei collegamenti pubblicizzati nelle Search Engine Result Pages (SERPs), vi farà ottenere più click e probabilmente più acquisti del vostro prodotto.</p>
                <p><strong>Non preoccupatevi se la concorrenza vede i vostri prezzi:</strong> se offrite un prodotto di alta qualità potete stare tranquilli, inoltre date subito un'informazione utile ai clienti che sono in grado di valutare fin da subito se possono permettersi o meno il vostro prodotto.</p>
                <h3>Posizione</h3>
                <p><strong>Raggiungere la migliore posizione nei risultati restituiti dai motori di ricerca è di primaria importanza:</strong> se non comparite nei primi risultati di una ricerca per termini correlati al vostro prodotto, è come se voi non esisteste.</p>
                <p>Altri fattori determinati sono:</p>
                <ul class="dot">
                    <li>comparire nelle versioni localizzate di un motore di ricerca: se effettuate una ricerca per un qualsiasi termine prima presso Google.com e poi per Google.it, noterete una differenza sostanzialmente rilevante nei risultati.</li>
                    <li>servirsi di affiliazioni ad altri siti per costruire una rete produttiva per tutti.</li>
                    <li>utilizzare un design studiato per il vostro sito e posizionare strategicamente la pubblicità dei vostri prodotti.</li>
                </ul>
                <h3>Promozione</h3>
                <p>Ovviamente è <strong>molto importante promuovere il proprio prodotto o servizio </strong>attraverso tutti i mezzi e canali disponibili:
                <ul class="dot">
                    <li>attraverso l'uso di tecniche di Search Engine Optimization;</li>
                    <li>utilizzando i social networks, le directory di siti web, ecc;</li>
                    <li>public relation e circuiti pubblicitari. </li>
                </ul>
                <h3>Cosa possiamo fare per te</h3>
                <p>Attraverso un approccio consulenziale, possiamo aiutarti a <strong>costruire la migliore strategia per l'implementazione</strong> <strong>di internet </strong>nel processo di <a href="#" title="Il termine marketing mix indica la combinazione (mix) di variabili controllabili (leve decisionali) di marketing">marketing mix </a>a supporto del tuo e-business.</p>
                <div class="clearer twenty"></div>
                <div class="tips yellow">
                    <div class="ribbon_tips"></div>
                    <p><em>Le anatre depongono le loro uova in silenzio. Le galline invece starnazzano come impazzite. Qual è la conseguenza? Tutto il mondo mangia uova di gallina.<br>
                        H.Ford</em></p>
                </div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
