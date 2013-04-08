<?php
/**
 * Header
 *
 * @author      Longster
 * @package     HDN
 * @since       7.0 - 04-30-2013
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>		   <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Favicon and Feed -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

    <!--  iPhone Web App Home Screen Icon -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon.png">
	
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 8]><p style="background-color: orange; color: #333;">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> to experience this site.</p><![endif]-->
    <section id="masthead" class="contain-to-grid sticky">
        <nav class="top-bar">
            <ul class="title-area">
                <li class="name <?php if ( is_front_page() ) : ?>active<?php endif; ?>">
                    <h1 class="logo-small"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><a href="#" class="toggle-nav"></a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'depth' => 0,
                        'items_wrap' => '<ul class="left">%3$s</ul>',
                        'fallback_cb' => 'wpzurb_menu_fallback', // workaround to show a message to set up a menu
                        'walker' => new wpzurb_walker( array(
                            'in_top_bar' => true,
                            'item_type' => 'li'
                        ) ),
                    ) );
                ?>

                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="has-form"><?php get_search_form(); ?></li>
                    <li class="divider show-for-small"></li>
                </ul>
            </section>
        </nav>
    </section>

    
    <section id="navdrop">
        <div class="row">
          <div class="large-4 columns">Lorem Ipsum</div>
          <div class="large-4 columns">Lorem Ipsum</div>
          <div class="large-4 columns">Lorem Ipsum</div>
        </div>
    </section>