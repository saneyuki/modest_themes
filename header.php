<?php
/**
   * @package WordPress
   * @subpackage modest3
   */
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      <?php language_attributes(); ?>>
  
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type"
      content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?>
  <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
      type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<style type="text/css" media="screen">
</style>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('thema-js', get_bloginfo('template_directory').'/js/function.js', array('jquery')); ?>
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ga.js" async defer></script>
</head>

<body <?php body_class(); ?>>
<header>
  <h1><a href = "<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</header>
<div id="page">

