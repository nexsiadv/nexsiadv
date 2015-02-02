<?php
	$menu['voce0']='class="active"'; 
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Ti aiutiamo a configurare il tuo sito web per editare contenuti online senza conoscere la programmazione ed in modo autoamtico configurando un sistema CMS secondo le tue reali necessità, curando la parte tecnica e grafica.">
<meta name="keywords" content="sito web professionale,
realizzazione siti web, siti web pronti, cms,
content management system,learning content management system,cms content management system,content management system cms,content management web,management system,cms open source,opencms,content management portal,cms content management,portal content management,
content management site,web content manager,agenzia siti web, progettazione sito web,sito web aggiornabile,preventivo sito web,realizzare siti web,realizzazione sito web,creazione siti web,creare sito web,creazioni siti web,realizzare sito web,creazione sito web,siti web dinamici,sito web dinamico,progettazione siti web,sito web gratuito,sviluppo siti web,preventivo siti web,design siti web,creare sito web gratis,crea sito web,siti web professionali,realizzazione siti web dinamici,sito web fai da te,realizzazione di siti web,costo realizzazione sito web,come costruire un sito web,creare un sito web,programmi per creare siti web,">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Ti aiutiamo a personalizzare in funzione delle necessità della tua organizzazione qualsiasi tipo di software CMS per editare e gestire il tuo piccolo sito aziendale in modo autonomo</title>
<?php @include($server_pth."inc_web/header-util.php"); ?>
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
    <h2 class="title cms">Content Management System</h2>
</div>
<div id="content" class="clearfix">
    <div class="tabs">
        <ul>
            <li><a href="#tab1" class="what_is">a cosa serve</a></li>
            <li><a href="#tab2" class="read_more">approfondimenti</a></li>
        </ul>
    </div>
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
                <h2>La gestione dei contenuti tramite il content management system</h2>
                <h3>Che cosa &egrave; e come avviene</h3>
                <p>Un <strong>content management system</strong>, in acronimo CMS &egrave; uno contesto web ed uno strumento software che facilit&agrave; la gestione dei contenuti del sito web, liberando l’amministratore del sistema da conoscenze tecniche di programmazione web.</p>
                <p>Nel panorama tecnologico esistono CMS pi&ugrave; o meno specializzati per il trattamento di tipo specifico di contenuti (Blog, Forum, Ecc) oppure CMS generici, che tendono a essere pi&ugrave; flessibili e per la pubblicazione di diversi tipi di contenuti.</p>
                <p>Tecnicamente un CMS &egrave; un'applicazione lato server che si appoggia su un database preesistente per lo stoccaggio dei contenuti e suddivisa in due parti: la sezione di amministrazione (back end), che serve ad organizzare e supervisionare la produzione dei contenuti, e la sezione applicativa (front end), che l'utente web usa per fruire dei contenuti e delle applicazioni del sito. L'amministratore del CMS gestisce dal proprio terminale, tramite un pannello di interfaccia e controllo, i contenuti da inserire o modificare. </p>
                <h3>Gestione dei contenuti</h3>
                <p>Avviato un CMS in azienda si dovr&agrave; operare per organizzare la meglio tutte le fasi della gestione, produzione e pubblicazione dei contenuti. </p>
                <ul class="dot">
                    <li>Identificare  gli utenti di back-end (amministratori del sistema) ed i relativi ruoli di produzione o fruizione dell'informazione. </li>
                    <li>Assegnazione di responsabilit&agrave; e permessi a differenti categorie di utenti di back-end per distinti tipi di contenuti.</li>
                    <li>Formalizzazione un percorso per l'assemblaggio del prodotto finale (contenuto web) che, in quanto frutto di produzione frammentaria, deve acquisire la sua unitariet&agrave; sottostando a opportune procedure di supervisione.</li>
                    <li>Tracciamento e gestione delle versioni del contenuto.</li>
                    <li>Pubblicazione del contenuto.</li>
                    <li>Definizione del palinsesto editoriale</li>
                </ul>
                <h3>I principali vantaggi di un CMS</h3>
                <p><strong>Il CMS &egrave; un software pronto all’uso, semplice da usare, che non richiede competenze specifiche di programmazione. E’ uno strumento completo per editare e gestire autonomamente tutti i contenuti editoriali di un piccolo sito web aziendale.</strong></p>
                <p><strong>Tuttavia, per essere realmente funzionale  e performante, un CMS deve essere configurato in funzione delle reali necessit&agrave; dell’azienda e del web aziendale, </strong>motivo per il quale si devono apporre modifiche sostanziali, configurazioni e settaggi sul database, il server web e le interfacce grafiche ed al contempo garantire il corretto interfacciamento con  i software aziendali gi&agrave; esistenti.</p>
                <?php @include($server_pth."inc_web/request_button_short.php"); ?>
            </div>
        </div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
