<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <!-- container -->
    <div class="container">

        <!-- Site-header -->
        <header class="site-header">
            <h3 class="tagline">Har du svårigheter</h3>
            <h3 class="tagline">att använda dator?</h3>
            <h1 class="main-title">
                <?php
                $attachment_id = 64; // attachment ID

                $image_attributes = wp_get_attachment_image_src( $attachment_id, 'full' ); // returns an array
                if( $image_attributes ) {
                    ?>
                    <a href="<?php echo home_url(); ?>">
                        <img id="logo" src="<?php echo $image_attributes[0]; ?>">
                    </a>
                <?php } ?>
                <a href="<?php echo home_url(); ?>"> <?php bloginfo('name') ?></a>
            </h1>
            <h3 class="tagline">kan hjälpa dig!</h3>

            <!-- Site-Navigation -->
            <nav class="site-nav">
                <?php
                    $args = array('theme_location' => 'main_menu');
                ?>

                <?php wp_nav_menu($args); ?>
            </nav>

        </header>

