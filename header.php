<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php 
	wp_enqueue_script('jquery');
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <header>
    <hgroup class="container">
      <h1 id="page_title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </hgroup>

    <nav class="row">
      <ul class="container">
<?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>
