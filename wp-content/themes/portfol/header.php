<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canyon Themes
 * @subpackage Quality Construction
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="shortcut icon" href="http://it-dev-sup.ru/favicon.ico" type="image/x-icon">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
   <script>(function(){var script = document.createElement('script');script.type = 'text/javascript';script.async = true;script.charset = 'utf-8';script.src = 'https://152фз.рф/widget/981d39639bc7ef3980cf76a0fb6044d6';document.getElementsByTagName('head')[0].appendChild(script);})();</script><div id="fz_wrap"></div>
</head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46627665 = new Ya.Metrika({
                    id:46627665,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46627665" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e('Skip to content', 'quality-construction'); ?></a>
        <?php get_template_part('section-parts/section', 'top-header'); ?>
        <?php 
        // Custom image.
        global $header_imagem,$header_style;
        $header_image = get_header_image();
     
        if( $header_image ){
            $header_style = 'style="background-image: url('.esc_url( $header_image ).');background-size: cover;background-attachment: fixed;"';                 

        } else{

            $header_style = '';
        }

        ?>
   <header id="header" class="head" role="banner">
        <nav id="site-navigation" class="main-navigation navbar navbar-default navbar-menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"><?php esc_html_e('Toggle navigation', 'quality-construction'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="site-branding">
                        <?php
                        if (has_custom_logo()) { ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                <?php the_custom_logo(); ?>
                            </a>
                        <?php } else {
                            if (is_front_page() && is_home()) : ?>
                                <h1 class="site-title">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                            <?php else : ?>
                                <p class="site-title">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                </p>
                                <?php
                            endif;
                            $description = get_bloginfo('description', 'display');
                            if ($description || is_customize_preview()) : ?>
                                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                <?php
                            endif;
                        } ?>
                    </div><!-- .site-branding -->

                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'depth' => 4,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
      <?php wp_enqueue_script('button_handle', get_stylesheet_directory_uri() . '/js/button.js'); 
   

	
