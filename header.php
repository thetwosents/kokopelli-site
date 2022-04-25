<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" role="banner">
        <!-- A header with logo and nav menu items from wordpress -->
        <div class="container">
            <div class="row middle-xs">
                <div class="col-xs-12 col-md-3">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
                            alt="<?php bloginfo('name'); ?>" />
                    </a>
                </div>
                <div class="col-xs-12 col-md-9 end-md center-xs">
                    <!-- <nav id="nav" role="navigation">
                    <?php // wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
                </nav> -->
                    <div class="wp-block-buttons">
                        <div class="wp-block-button">
                            <a class="wp-block-button__link" href="<?php echo esc_url(home_url('/')); ?>">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>