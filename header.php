<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1" />
    <title>
        <?php bloginfo('name'); ?>
        <?php if (is_single()) { ?>
            &roquo;
        <?php } ?>
        <?php wp_title(); ?>
    </title>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="<?php echo get_option('home'); ?>">
                <img class="logo" src="<?= get_template_directory_uri() . '/images/logo.png'; ?>" alt="">
            </a>
        </div>
        <div class="col-md-6">
            <input class="side-menu" type="checkbox" id="side-menu"/>
            <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
            <nav id="main-nav" class="top-menu" role="navigation">
<!--                <button class="menu-toggle">-->
<!--                    <i class="fa-solid fa-bars"></i>-->
<!--                </button>-->
		        <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav-menu' ) ); ?>
            </nav>
        </div>
        <div class="col-md-3">
	        <?php if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?>
            <a class="top-phone" href="tel:+380987654321">+38(098)765-43-21</a>
        </div>
    </div>
</div>
</header>

<main class="container">