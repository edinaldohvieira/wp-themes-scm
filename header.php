<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( ! get_option( 'site_icon' ) ) : ?>
            <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
        <?php endif; ?>
        <?php wp_head(); ?>
        <style>
            h2, .h2 {
                font-size: 20px;
            }
            #footer {
                height: 100px;
            }
            body {
                margin-top: 30px;
                margin-bottom: 120px;
            }
        
      </style>
    </head>

    <body <?php body_class(); ?>>
        <div id="wrapper_" class="container" >
            <div style="min-height:80px;border:1px solid #95a5a6;margin: 5px; padding: 10px; border-radius:10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                <div class="row">
                    <?php dynamic_sidebar( 'header-sidebar' ) ?>
                </div>
            </div>
        </div>
        <div class="container" >
           <div style="min-height: 300px; border:1px solid #95a5a6;margin: 5px; padding: 10px; border-radius:10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                <div class="row">
