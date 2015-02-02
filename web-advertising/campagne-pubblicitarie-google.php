<?php
	$menu['web-advertising']='class="active"';
	$menu_sec['voce1']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Sviluppo e gestione di campagne pubblicitarie su google adwords e piani di investimento per la pubblicit&agrave; in internet e nei nuovi media">
<meta name="keywords" content="campagne pubblicitarie online,campagne advertising google,adwords,campagne adwords,pubblicità online,googleadwords,adword,campagne google,campagne pubblicitarie,adwords specialist,pubblicità su internet,pubblicità,campagne google adwords,pubblicità web,pubblicità sito,pubblicità sito web,pubblicità sul web,pubblicizzare sito web, pubblicità siti web,promozione siti web,pubblicità web,promozione sito web,agenzia web">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Campagne pubblicitarie online per la promozione dei siti web con google adword</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
</head>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script> 
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$(".tabs ul").tabs("div.tab_content", {effect: 'fade'});
});
</script>
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title web_advertising">Web Advertising</h2>
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
                <h2>Raggiungi nuovi clienti con la pubblicità su Google Adwords</h2>
                <h3>Sviluppo, monitoraggio e gestione di campagne pubblicitarie online per la promozione dei siti web con Google Adwords e altri network pay per click</h3>
                <p>Sviluppando una <strong>campagna pubblicitaria online</strong> con il servizio di Google Adwords puoi <strong>entrare in contatto con milioni di potenziali clienti proprio nel momento in cui sono alla ricerca dei tuoi prodotti o servizi,</strong> mostrando annunci testuali sul lato destro della pagina dei risultati.</p>
                <p>Con Google AdWords <strong>possiamo creare e pubblicare annunci per la tua attività in modo rapido e semplice</strong>. Possiamo pubblicare i tuoi annunci su Google e nella  rete pubblicitaria dei siti partners e, indipendentemente dall'entità del budget stanziato,<strong> pagherai soltanto se gli utenti fanno clic sui tuoi annunci.</strong></p>
                <h3>Cosa possiamo fare per te? <br>
                    Gestiamo tutte le fasi strategiche e attuative della tua campagna pubblicitaria su Google</h3>
                <p>Gestiamo tutto il processo di <strong>pianificazione strategica e le procedure di attivazione della tua campagna pubblicitaria</strong> <strong>su Google e ne controlliamo costantemente i risultati.</strong></p>
                <ul class="dot">
                    <li>Individuiamo insime gli obiettivi e studiamo la concorrenza</li>
                    <li>Quantifichiamo i  budget mensili minimi</li>
                    <li>Pianifichiamo integralemente la tua campagna selezionando i siti dove dovranno comparire i tuoi annunci oltre all'indice di ricerca di Google</li>
                    <li>Selezioniamo le Keywords più adatte ai tuoi prodotti o servizi</li>
                    <li>Sviluppiamo un piano di azione ed una linea di budgeting dove evidenziamo il volume di utenti che arriveranno dalla campagna, il rapporto tra utenti e conversioni <em>(vista/acquisto)</em> e predeterminiamo i ricavi, monitorando costantemente il ROI <em>(ritorno dall'investimento)</em>.</li>
                    <li>Sviluppiamo le creatività e modifichiamo il tuo sito web <em>(annunci testuali, banner grafici o visuali)</em></li>
                    <li>Attiviamo i tuoi canali pubblicitari</li>
                    <li>Ottimizziamo costantemente la tua campagna in funzione dei risultati</li>
                </ul>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
                <h3>Dove vengono visutalizzati gli annunci?</h3>
                <p>Gli annunci AdWords <strong>vengono visualizzati insieme ai risultati di ricerca</strong> quando un utente esegue una ricerca su Google <strong>con una delle parole chiave che abbiamo specificato </strong>per i tuoi prodotti o servizi. </p>
                <p>Gli annunci <strong>vengono visualizzati sotto il titolo "Link sponsorizzati" nella colonna laterale di una pagina</strong> di ricerca e possono essere visualizzati anche in altre posizioni sopra i risultati di ricerca gratuiti.</p>
                <p> <strong>Pertanto, la tua pubblicità viene indirizzata a un pubblico già interessato alla tua attività.</strong> Possiamo anche pianificare di pubblicare i tuoi annunci su siti della Rete Display all'interno della sempre più grande Rete Google. Inoltre, possiamo prevedere di <strong>scegliere gli esatti posizionamenti sulla Rete Display in cui desideri pubblicare gli annunci oppure utilizzare il targeting contestuale per abbinare le parole chiave ai contenuti. </strong></p>
                <h3>Che formati di annunci possiamo pubblicare?</h3>
                <p><strong>Possiamo  scegliere tra diversi formati di annunci,</strong> tra cui annunci di testo, annunci illustrati e annunci video; inoltre, potrai monitorare facilmente il rendimento degli annunci tramite i rapporti che ti renderemo disponibili.</p>
                <div class="clearer twenty"></div>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
