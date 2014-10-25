<!DOCTYPE html>
	
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />-->
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (is_search()) {
		         echo 'Wyniki wyszukiwania dla &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Nie znaleziono - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - strona '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/MyFontsWebfontsOrderM3156695.css" type="text/css" /> 
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" /> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menustyle.css" type="text/css" /> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bottommenustyle.css" type="text/css" /> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/orbit-1.2.3.css">
	
	
	<?php //wp_enqueue_script('jquery'); ?>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/grid-salvattore.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/salvattore.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cookies.js"></script>
	
</head>

<body <?php body_class(); ?>>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=230700646982128";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>


<div class="container">
	<div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                <a href="<?= site_url(); ?>" class="navbar-brand">
                    <img src="<? bloginfo('template_url'); ?>/img/tb_logo.png" alt="Teatr Baza">
                </a>
            </div>
<!--		<div>	<?php get_search_form(); ?></div>-->
<!--
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
-->
            <div class="collapse navbar-collapse" id="menu-collapse">
                <?php			
                    wp_nav_menu( array( 'theme_location' => 'glowne',
                                        //'menu_id' => 'nav',
                                        'menu_class' => 'nav navbar-nav',
                                        'container' => false,
                                        'depth' => '2',
                                        'walker' => new wp_bootstrap_navwalker())
                                        //'walker' => new My_Main_Menu() 
                                    ); //  klasa jest w functions.php
                ?>
<!--         </ul>-->
            </div>
        </div>
    </div>
	<div class="clear"></div>
