<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
    <div id="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php if (get_theme_mod('logo')) : ?>
            <img src="<?php echo esc_url(get_theme_mod('logo')); ?>" alt="Logo du site">
        <?php else : ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo1.jpg" alt="Logo du site Planty" class="logo">
        <?php endif; ?>
        </a>
    </div>  
<div id="branding">
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '', 'link_after' => '' ) ); ?>

</nav>
</header>
<div id="container">
<main id="content" role="main">