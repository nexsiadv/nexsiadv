<footer>
    <div id="footer_content" class="clearfix">
        <ul class="menu">
            <li>
                <h3>I tuoi obiettivi</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $server_url; ?>obiettivi-correlati/programmare-lancio-sito-web.php#tab2" title="Soluzioni per programmare il lancio del tuo sito web online e cogliere subito il successo che desideri" <?php echo $menu_sec['voce6']?> >Programmare il lancio del sito</a></li>
                    <li><a href="<?php echo $server_url; ?>obiettivi-correlati/aumentare-il-numero-degli-utenti.php#tab2" title="Servizi e soluzioni pubblicitarie online per aumentare il numero di visitatori sul tuo sito web" <?php echo $menu_sec['voce7']?> >Aumentare il numero di utenti</a></li>
                    <li><a href="<?php echo $server_url; ?>obiettivi-correlati/aumentare-le-vendite-online-rapporto-di-conversione.php#tab2" title="Migliora il rapporto tra numero di visitatori e la quantit� di acquisti generati sul tuo sito web" <?php echo $menu_sec['voce8']?> >Aumentare il rapporto di conversione</a></li>
                    <li><a href="<?php echo $server_url; ?>obiettivi-correlati/posizionare-sito-web-motori-ricerca.php#tab2" title="Essere primi senza pubblicit� in Google e nei motodi di ricerca" <?php echo $menu_sec['voce9']?> >Posizionare il sito web nei motori di ricerca</a></li>
                    <li><a href="<?php echo $server_url; ?>obiettivi-correlati/superare-la-concorrenza-online.php#tab2" title="Superare la concorrenza online attraverso l'utilizzo di operazioni di e-business intelligence" <?php echo $menu_sec['voce10']?> >Primeggiare sulla concorrenza</a></li>
                </ul>
            </li>
            <li style="width: 130px;">
                <h3>Sistemi</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $server_url; ?>e-business/e-business.php">E-Business</a></li>
                    <li><a href="<?php echo $server_url; ?>e-commerce/e-commerce.php">E-Commerce</a></li>
                    <li><a href="<?php echo $server_url; ?>cms/cms.php">CMS</a></li>
                </ul>
            </li>
            <li style="width: 130px;">
                <h3>Servizi</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $server_url; ?>web-design/web-design.php">Web Design</a></li>
                    <li><a href="<?php echo $server_url; ?>web-marketing/web-marketing.php">Web Marketing</a></li>
                    <li><a href="<?php echo $server_url; ?>web-advertising/web-advertising.php">Web Advertising</a></li>
                    <?php /* <li><a href="<?php echo $server_url; ?>web-management/web-management.php">Web Management</a></li> */?>
                </ul>
            </li>
            <li>
                <h3>Servizi in dettaglio</h3>
                <ul class="submenu menu_servizi">
                    <li>
                        <ul>
                            <?php @include($server_pth."/inc_web/voci-dettaglio-servizi-ebusiness.php"); ?>
                        
                            <?php @include($server_pth."/inc_web/voci-dettaglio-servizi-web-design.php"); ?>
                        </ul>
                        <ul>
                            <?php @include($server_pth."/inc_web/voci-dettaglio-servizi-web-marketing.php"); ?>
                        
                            <?php @include($server_pth."/inc_web/voci-dettaglio-servizi-web-advertising.php"); ?>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="su_noi">
            <li class="logo">
                <h3>Nexsiadv </h3>
                <p><strong>Noa LTD</strong>.<br>
                    34, Isolamare Flats N. 6 Sir Henry Bouverie Street Gzira GZR 1220.<br>
                    Operational office 109, William Reid Street, Gzira, GZR 1033 Malta.<br>
                    Per informazioni: <a href="mailto:&#105;&#110;&#102;&#111;&#64;&#110;&#101;&#120;&#115;&#105;&#97;&#100;&#118;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#110;&#101;&#120;&#115;&#105;&#97;&#100;&#118;&#46;&#99;&#111;&#109;</a>.<br>
                    Telefono: +356 77006768</p>
            </li>
            <li>
                <h3>Su di noi</h3>
                <ul class="submenu">
                    <?php @include($server_pth."/inc_web/su-noi.php"); ?>
                    <li><a href="<?php echo $server_url; ?>lavora-con-noi.php">Lavora con noi</a></li>
                </ul>
            </li>
            <li>
                <h3>Info &amp; Docs</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $server_url; ?>info-docs/glossario.php">Glossario</a></li>
                    <?php /* <li><a href="<?php echo $server_url; ?>info-docs/condizioni-generali.php">Condizioni Generali</a></li> */?>
                </ul>
            </li>
            <li>
                <h3>Seguici su:</h3>
                <ul class="submenu">
                    <li></span>
                        <?php /*?><a href="#" class="icon linkedin">LinkedIn</a><?php */?>
                        <a href="http://www.facebook.com/pages/Admize-Your-e-Business-System-Provider/215104145188122" target="_blank" class="icon facebook">Facebook</a> <a href="http://www.twitter.com/admizesrl" class="icon twitter">Twitter</a>
                        <?php /*<a href="#" class="icon rssfeed">RSS Feed</a> */ ?>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="clearer ten"></div>
        <!--<div id="footer_close"></div>-->
    </div>
</footer>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23970247-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>