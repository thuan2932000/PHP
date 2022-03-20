<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/src/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/style.css">
    <link rel="stylesheet"
        href="<?php bloginfo( 'stylesheet_directory' );?>/template/css/quality-verification.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/template/css/san-pham-noi-bat.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/src/css/footer.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/template/css/form-contacts.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <!-- Add link boostrap -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/bootstrap/css/bootstrap.css">
    <?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
    <header>

        <!-- Menu ở header -->
        <?php 
    wp_nav_menu( array(
      'theme_location'  => 'menu-header',
      'container'       => 'false',
      'menu_class'      => 'menu-header',
    ) );
    ?>

        <!-- Chúc năng chọn ngôn ngữ dịch -->
        <div class="gtranslate">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>

        <!-- Search Bar -->
        <div class="search-box">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('search') ) : ?><?php endif; ?>
        </div>

        <!-- Logo header -->
        <div class="logo-header">
            <img src="<?php bloginfo( 'stylesheet_directory' );?>/src/image/Logo-01 1.png" alt="logo">
        </div>

    </header>