<?php
/**
 * header.php
 *
 * @author		Long Duong
 * @package 	HDN
 * @since 		0.1 - 07.15.2012
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-icon-57x57-ipad.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-icon-72x72-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-icon-114x114-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-icon-144x144-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/ico/hdn-load.png" media="screen and (max-device-width: 320px)" />

	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
		  	<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			      	<span class="sr-only">Toggle navigation</span>
			      	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand <?php if (is_front_page()) : ?>active<?php endif; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		  	</div><!-- /.navbar-header -->

		  	<!-- Collect the nav links, forms, and other content for toggling -->
		  	<div class="navbar-collapse collapse">
		    	<?php wp_nav_menu( array(
					'theme_location'	=>	'primary',
					'menu_class'		=>	'nav navbar-nav',
					/*'depth'				=>	2,*/ //Bootstrap only support one level drop down for best practice.
					'fallback_cb'		=>	'hdn_menu_fallback',
					'walker'			=>	new hdn_Nav_Walker,
				) );  ?>
				<?php get_search_form(); ?>
				<ul class="nav navbar-nav navbar-right sharepost">
					<li><a href="<?php echo get_permalink(13133); ?>">Share Articles!</a></li>
				</ul>
		  	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav><!-- /.navbar -->

<?php if(is_front_page() && is_home()) : ?>
    
	<section id="identity">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12 hdn">
		            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-hdn-full.png" class="logo" alt="Houston Deaf Network" /></a></h1>
		            <h5><span>///</span> Your one source information where both Hearing and Deaf Community contribute, share, and network all within Houston area!</h5>
		        </div>
		    </div>
	   	</div>
	</section>

	<section id="submission">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12 text-center">
		            <h2><a href="<?php echo get_permalink(13133); ?>">Submit Your Articles With Us!</a></h2>
		            <h5>Announcements | News | Opinion | Support | Resources | Questions | Activities | Events | and more!</h5>
		            <div class="row submit">
		            	<div class="col-md-2 col-md-offset-3">
		            		<a class="btn btn-primary btn-block" href="http://localhost/share-your-posts-with-us/submit-news/">Share News</a>
		            	</div>
		            	<div class="col-md-2">
		            		<a class="btn btn-primary btn-block" href="http://localhost/share-your-posts-with-us/submit-activities/">Share Events</a>
		            	</div>
		            	<div class="col-md-2">
		            		<a class="btn btn-primary btn-block" href="http://localhost/directory/?action=submitlisting">Add Directory</a>
		            	</div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>

<?php else : ?>

	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="entry-title">
					<?php if ( is_front_page() ) : 	// FrontPage ?>
						Front Page
					<?php elseif ( is_home() ) : 	// Blog ?>
						Blog
					<?php elseif ( is_single() ) : 	// Single ?>
						<?php the_category(', '); ?>
					<?php elseif ( is_page() ) : 	// Page ?>
						<?php the_title(); ?>
					<?php elseif ( is_category() ): // Category ?>
						<?php single_cat_title(); ?>
					<?php elseif ( is_tag() ) : 	// Tag ?>
						Tag: <?php single_tag_title(); ?>
					<?php elseif ( is_author() ) : 	// Author ?>
						Author: <?php printf( esc_attr__( '%s', 'hdn' ), get_the_author() ); ?>
					<?php elseif ( is_search() ) : 	// Search ?>
						<?php _e('Search Results for', 'hdn'); ?> "<?php echo get_search_query(); ?>"
					<?php elseif ( is_bbpress() ) :	// bbpress ?>
						Forums
					<?php elseif ( is_archive() ) : // Archive ?>
						Archives: <?php single_month_title(' '); ?>
					<?php else :  					// 404 ?>
						Error 404</h1>
					</h1>
				<?php endif;?>
				</div>
			</div>
		</div>
	</header>

<?php endif; ?>
