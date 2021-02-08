
	<div id="sidebar">

	<?php if (function_exists('wp_theme_switcher')) { ?>

    <ul>
        <li>
            <h2><?php _e('Themes'); ?></h2>
            <?php wp_theme_switcher(); ?>
        </li>
    </ul>

    <?php } ?>
		<ul>
            <li><?php wp_register(» ); ?>
            <li>» <?php wp_loginout(); ?></li>

            <li class="dateInfo"><h2>
            <script type="text/JavaScript" language="JavaScript">
<!--
//
// format date as dd-mmm-yy
// example: 12-Jan-99
//
function date_ddmmmyy(date)
{
  var d = date.getDate();
  var m = date.getMonth() + 1;
  var y = date.getYear();

  // handle different year values
  // returned by IE and NS in
  // the year 2000.
  if(y >= 2000)
  {
    y -= 2000;
  }

  if(y >= 100)
  {
    y -= 100;
  }

  // could use splitString() here
  // but the following method is
  // more compatible
  var mmm =
    ( 1==m)?'Jan':( 2==m)?'Feb':(3==m)?'Mar':
    ( 4==m)?'Apr':( 5==m)?'May':(6==m)?'Jun':
    ( 7==m)?'Jul':( 8==m)?'Aug':(9==m)?'Sep':
    (10==m)?'Oct':(11==m)?'Nov':'Dec';

//    ( 1==m)?'Ene':( 2==m)?'Feb':(3==m)?'Mar':
//    ( 4==m)?'Abr':( 5==m)?'May':(6==m)?'Jun':
//    ( 7==m)?'Jul':( 8==m)?'Ago':(9==m)?'Sep':
//    (10==m)?'Oct':(11==m)?'Nov':'Dic';

  return "" +
     mmm + "&nbsp;" +
    (d<10?"0"+d:d) + ",&nbsp;" +
    (y<10?"200"+y:y);
}


//
// get last modified date of the
// current document.
//
function date_lastmodified()
{
  var lmd = document.lastModified;
  var s   = "Unknown";
  var d1;

  // check if we have a valid date
  // before proceeding
  if(0 != (d1=Date.parse(lmd)))
  {
    s = "" + date_ddmmmyy(new Date(d1));
  }

  return s;
}

//
// finally display the last modified date
// as DD-MMM-YY
//
document.write(
  "Last update: " +
//  "Ultima actualización: " +
  date_lastmodified() );

// -->
</script>
             </h2></li>

			<li class="buscador">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			<li><h2><?php _e('Publicaciones'); ?></h2>
				<ul>
				    <li>Interface - An Approach to Design </li>
                    <li>Dall'Oggetto all'Interfaccia</li>
                    <li>Teoria e Prática do Design Industrial</li>
                    <li>
                        <a href="http://www.amazon.com/Industrial-Elementos-manualistica-Coleccion-Comunicacion/dp/8425206979/ref=sr_1_7?ie=UTF8&qid=1263659546&sr=8-7-spell">Teoria e pratica del disegno industriale</a> <br />
                        1975, Milano: <a href="http://www.feltrinelli.it/">Feltrinelli Editore.</a>
                    </li>
				</ul>
			</li>

			<li><h2><?php _e('Archivos'); ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<li><h2><?php _e('Categorías'); ?></h2>
				<ul>
				<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
				</ul>
			</li>

				<?php get_links_list(); ?>
				

				<li><h2>Suscripciones</h2>
				<ul>
					<li><a href="http://www.guibonsiepe.com.ar/guiblog/wp-rss2.php" onclick="window.open(this.href); return false;">RSS 2.0</a></li>
					<li><a href="http://www.guibonsiepe.com.ar/guiblog/wp-commentsrss2.php" onclick="window.open(this.href); return false;">RSS 2.0 de los comentarios</a></li>
					<li><a href="http://www.guibonsiepe.com.ar/guiblog/wp-rss.php" onclick="window.open(this.href); return false;">RSS 0.92</a></li>
					<li><a href="http://www.guibonsiepe.com.ar/guiblog/wp-atom.php" onclick="window.open(this.href); return false;">Atom 0.3</a></li>
				</ul>
				</li>
				
				<li><h2>Validaci&oacute;n</h2>
				<ul class="generic">
					<li><a href="http://feedvalidator.org/check.cgi?url=http://www.guibonsiepe.com.ar/guiblog/wp-rss.php" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/rss091.png" alt="[Valid RSS]" title="Validate my RSS feed" width="80" height="15" /></a></li>
					<li><a href="http://feedvalidator.org/check.cgi?url=http://www.guibonsiepe.com.ar/guiblog/wp-rss2.php" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/rrsicono.gif" alt="[Valid RSS]" title="Validate my RSS feed" width="80" height="15" /></a></li>
					<li><a href="http://feedvalidator.org/check.cgi?url=http://www.guibonsiepe.com.ar/guiblog/wp-atom.php" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/atom.gif" alt="[Valid Atom]" title="Validate my Atom feed" width="80" height="15" /></a></li>
					<li><a href="http://jigsaw.w3.org/css-validator/" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/css.png" alt="[Valid CSS]" title="Validate my CSS" width="80" height="15" /></a></li>
					<li><a href="http://validator.w3.org/check?uri=referer" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/xhtml10.png" alt="[Valid XHTML]" title="Validate my XHTML" width="80" height="15" /></a></li>
				</ul>
				</li>
				
				<li><h2>Recomendaci&oacute;n</h2>
				<ul class="generic">
					<li><a href="http://gmpg.org/xfn/" title="XHTML Friends Network"><img src="../../articles/files/wp-images/xfn.png" alt="XHTML Friends Network" title="XHTML Friends Network" width="80" height="15" /> </a></li>
					<li><a href="http://www.wordpress.org" title="Powered by WordPress" onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/wp.png" alt="Powered by WordPress" /></a></li>
					<li><a href="http://ecto.kung-foo.tv" title="Get ECTO Editor Post offline"><img src="../../articles/files/wp-images/ecto.png" alt="ECTO" title="Get ECTO Editor Post offline" width="80" height="15" /></a></li>	
					<li><a href="http://getfirefox.com/" title="Get Firefox - The Browser, Reloaded." onclick="window.open(this.href); return false;"><img src="../../articles/files/wp-images/firefox.png" width="80" height="15" alt="Get Firefox" /></a></li>
				</ul>
				</li>

				<li><h2>Enlazado</h2>

				<ul>

                    <li><a href="http://www.technorati.com/cosmos/search.html?rank=&amp;url=http%3A%2F%2Fwww.guibonsiepe.com.ar%2Fguiblog" onclick="window.open(this.href); return false;" >Technorati</a></li>

                    <li><a href="http://www.google.com/search?num=100&amp;hl=en&amp;lr=&amp;q=link%3Awww.guibonsiepe.com.ar%2Fguiblog&amp;btnG=Search" onclick="window.open(this.href); return false;">Google</a></li>

                    <li><a href="http://search.yahoo.com/search?p=link%3Ahttp%3A%2F%2Fwww.guibonsiepe.com.ar%2Fguiblog&amp;prssweb=Search&amp;ei=UTF-8&amp;fr=sfp&amp;n=20&amp;fl=0&amp;x=wrt" onclick="window.open(this.href); return false;">Yahoo</a></li>

                    <li><a href="http://search.msn.com/results.aspx?q=link%3Awww.guibonsiepe.com.ar%2Fguiblog&amp;FORM=QBNO" onclick="window.open(this.href); return false;">MSN</a></li>

				</ul>

<!-- Licencia de Creative Commons -->
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.1/es/"><img alt="Licencia de Creative Commons" border="0" src="http://creativecommons.org/images/public/somerights20.gif" /></a><br />
Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.1/es/">licencia de Creative Commons</a>.
<!-- /Licencia de Creative Commons -->

<!--

<rdf:RDF xmlns="http://web.resource.org/cc/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
<Work rdf:about="">
   <dc:type rdf:resource="http://purl.org/dc/dcmitype/Text" />
   <license rdf:resource="http://creativecommons.org/licenses/by-nc-nd/2.1/es/" />
</Work>

<License rdf:about="http://creativecommons.org/licenses/by-nc-nd/2.1/es/">
   <permits rdf:resource="http://web.resource.org/cc/Reproduction" />
   <permits rdf:resource="http://web.resource.org/cc/Distribution" />
   <requires rdf:resource="http://web.resource.org/cc/Notice" />
   <requires rdf:resource="http://web.resource.org/cc/Attribution" />
   <prohibits rdf:resource="http://web.resource.org/cc/CommercialUse" />
</License>
</rdf:RDF>

-->

<script type="text/javascript" src="http://technorati.com/embed/42yzbynv4m.js"> </script>   
<a href="http://clustrmaps.com/counter/maps.php?url=http://www.guibonsiepe.com.ar/guiblog" id="clustrMapsLink"> <img src="http://clustrmaps.com/counter/index2.php?url=http://www.guibonsiepe.com.ar/guiblog" border=1 alt="Locations of visitors to this page" onError="this.onError=null; this.src='http://www.meetomatic.com/images/clustrmaps-back-soon.jpg'; document.getElementById('clustrMapsLink').href='http://clustrmaps.com/'" /></a>
<!-- <a href="http://clustrmaps.com/counter/maps.php?url=http://www.guibonsiepe.com.ar/guiblog" id="clustrMapsLink"> <img src="http://clustrmaps.com/counter/index2.php?url=http://www.guibonsiepe.com.ar/guiblog" border=1 alt="Locations of visitors to this page" /></a> -->

</li>

</ul>

<!-- google analitycs -->

<!--
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12123264-1");
pageTracker._trackPageview();
} catch(err) {}</script>
-->

	</div>

