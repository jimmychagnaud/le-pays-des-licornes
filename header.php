<?php
/**
 * @package Le pays des licornes
 * @since Le pays des licornes 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?> style="margin-top: 0 !important;">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
	<div class="headerDiv">
		<div class="container" id="headerPage">
	    <header>
				<nav class="navbar navbar-default">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top" aria-expanded="false">
			        <span class="sr-only">Afficher le menu</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="/">
			        <img alt="Brand" src="<?php echo get_template_directory_uri() ?>/img/logocircle.png">
			      </a>
			    </div>
			    <div class="collapse navbar-collapse" id="navbar-collapse-top">
		       	<?php wp_nav_menu([
									  'theme_location' => 'Top',
									  'menu_id'        => 'top-menu',
									  'menu_class'     => 'nav navbar-nav navbar-right',
									]);?>
			    </div>
				</nav>
			</header>
		</div>
	</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">