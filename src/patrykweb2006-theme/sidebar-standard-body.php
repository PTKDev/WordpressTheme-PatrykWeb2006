<body>
<div id="container">
	<div id="header">
		<div class="social_icon">
			<a href="http://it-it.facebook.com/group.php?gid=52380033057" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/menu_fb.png" width="20" height="20" alt="Seguimi Su FaceBook" title="Seguimi Su FaceBook" /></a> 
			<a href="http://twitter.com/ptkweb" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/menu_tw.png" width="20" height="20" alt="Seguimi Su Twitter" title="Seguimi Su Twitter" /></a>
			<a href="http://feeds.feedburner.com/ptkweb" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/menu_rss.png" width="20" height="20" alt="Seguimi Tramite Feed RSS" title="Seguimi Tramite Feed RSS" /></a>
		</div>
	</div>
	<div id="menu-sx">
		<div class="button"><div class="txt_menu"><a href="/">Home</a></div></div>
		<div class="button"><div class="txt_menu"><a href="http://community.ptkweb.it/">Forum</a></div></div>
		<div class="button"></div>
		<div class="button"><div class="txt_menu"><a href='javascript: apri_menu("menu1")'>Test1</a></div></div>
		<div id='menu1' class="menu" style="display: none;">
		- Test2<br />
		- Test2<br />
		- Test2<br />
		- Test2<br />
		- Test2<br />
		</div>
		<div class="button"></div>
	</div>
	<div id="menu-dx">
		<div class="button"><div class="txt_menu">Home</div></div>
		<div class="button"><div class="txt_menu"><a href="http://community.ptkweb.it/">Forum</a></div></div>	
		<div class="button"></div>
		<?php 
		/*$tag_cloud=wp_tag_cloud('smallest=11&number=15&order=rand&format=array');
		foreach($tag_cloud as $tags) :
		echo '<div class="button"><div class="txt_menu">'.$tags.'</a></div></div>';
		endforeach; 
		*/ ?>
		<div class="button"></div>
	</div>
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); global $post; $thePostID = $post->ID; ?>
			<a class="link-title-post" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
			<span class="txt_bold">Categorie:</span> <?php the_category(', ') ?>
			<div style="text-align: justify;"><?php the_content(); ?></div>
			<div class="comment-align"><span class="txt_bold">Scritto Da: </span><a href="<?php the_author_url(); ?>"><?php the_author_nickname(); ?></a></div><br />
			<span class="txt_bold">Tags: </span><?php the_tags("",", "," "); ?><br />
			<div style="float: left;"><?php comments_template(); ?> <div style="margin-bottom: -20px;"><?php if(function_exists('selfserv_sexy')) { selfserv_sexy(); } ?></div> </div>
			<?php if($adv == 2){ echo '<div style="clear: both;"><br /><hr /><br /></div>'; } $adv++; ?>
	<?php endwhile; else: ?>
	<?php if($_SERVER['REQUEST_URI'] == "/sitemap.html"){ ?>
		<a class="txt_title" href="<?php the_permalink() ?>">Mappa Del Sito</a><br />
		<span class="txt_bold">Categorie:</span> SiteMap
	<?php
	      /*$filename = "./sitemap.xml";
	      $handle = fopen($filename, "r");
	      $var = fread($handle, filesize($filename));
	      preg_match_all("/(<loc>)(.*)(<\/loc>)/", $var, $matches);

	      for ($i=0; $i < count($matches[0]); $i++){
	      $array[$i] = $matches[2][$i];}
	      for( $i=0; $i < count($array); ++$i)
	      {
	      echo('<a href="');
	      echo($array[$i]);
	      echo('">'); 
	      $array[$i] = eregi_replace($_SERVER['SERVER_NAME'], "", $array[$i]);
	      $array[$i] = eregi_replace("http://", " ", $array[$i]);
	      $array[$i] = eregi_replace("cat/", " ", $array[$i]);
	      $array[$i] = eregi_replace("tag/", " ", $array[$i]);
	      $array[$i] = eregi_replace("/", " ", $array[$i]);
	      $array[$i] = eregi_replace("_", " ", $array[$i]);
	      $array[$i] = eregi_replace("-", " ", $array[$i]);
	      echo($array[$i]);
	      echo('</a><br /><br />');
	      } */
	    }else{ ?>
			<a class="txt_title" href="">Errore 404</a><br />
			<span class="txt_bold">Questa Pagina Non Esiste o E' Stata Rimossa...</span><br />
			<span class="txt_bold">Tags: </span> Errore 404<br />
			<div class="comment-align"><span class="txt_bold">Scritto Da: </span><a href="http://www.ptkdev.it/">PTKTheBest</a>&nbsp;|&nbsp;Non Puoi Commentare&nbsp;|&nbsp;</div>
			<div style="float: left;"><div style="margin-bottom: -20px; margin-top: 260px;"><?php if(function_exists('selfserv_sexy')) { selfserv_sexy(); } ?></div> </div>
	<?php } endif; ?>
	</div>		
	<?php if(!is_single()) { ?>
	<div class="page-select"><?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> <br /></div>
	<?php }?>
	<div id="footer"><br />
		PatrykWeb v0.1 - Portale dedicato a guide, manuali, social network, web2.0 e tanto altro...<br />
		Un idea di <a href="http://www.ptkdev.it">Patryk Rzucidlo</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/sitemap.html"><img src="<?php bloginfo('template_url'); ?>/img/icon_sitemap.png" width="18" height="20" alt="Sitemap" title="Sitemap" /></a> 
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/sitemap.xml"><img src="<?php bloginfo('template_url'); ?>/img/icon_sitemap-xml.png" width="18" height="20" alt="Sitemap XML" title="Sitemap XML" /></a>
	<?php wp_footer(); ?>
	</div>
</div>

</body>
</html>
