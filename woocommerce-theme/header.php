<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>
<!doctype html>
<html >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="container d-flex align-items-center justify-content-between">
    <a href="<?php bloginfo('url')?>">
    <img src="<?php bloginfo('template_directory');?>/assets/images/logo.svg" class="img-fluid logo">
    </a>
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'top-menu'
        )
      );
    ?>
  </div>

</header>
