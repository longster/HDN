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

	<title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

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
	
	<?php if( is_user_logged_in() ) : ?><style>body {padding-top: 0;}</style><?php endif ;?>
	<nav class="navbar navbar-default<?php if( !is_user_logged_in() ) : ?> navbar-fixed-top<?php endif ;?>" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
		  	<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			      	<span class="sr-only">Toggle navigation</span>
			      	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
			      	<span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand <?php if (is_front_page()) : ?>active<?php endif; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="glyphicon glyphicon-home hidden-xs" title="<?php bloginfo( 'name' ); ?>"></span></a>
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
					<li><a href="<?php echo get_permalink(12658); ?>">Advertise</a></li>
				</ul>
		  	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav><!-- /.navbar -->
	<div class="beta alert alert-success">
		<div class="container text-center">
			<p><strong>HEADS UP!</strong> This site is still in the early stages of development. Please <a href="<?php echo get_permalink(20); ?>">contact us</a> if you encountered any problem.</p>
		</div>
	</div>

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
		            <h2><a href="<?php echo get_permalink(13133); ?>">Learn How You Can Share &amp; Contribute!</a></h2>
		            <h5>Articles | Opinions | Support | Resources | Directory | Activities | Events | Questions | and more!</h5>
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
						
					<?php elseif ( is_home() ) : 	// Blog ?>
						Blog
					<?php elseif ( function_exists('is_bbpress') && is_bbpress() ) :	// bbpress ?>
						<span class="glyphicon glyphicon-comment hidden-xs text-center"></span>Forums 
					<?php elseif ( is_single() ) : 	// Single ?>
						<span class="glyphicon glyphicon-file hidden-xs text-center"></span><?php the_category(', '); ?>
						<?php /* $cat = get_the_category($post->id); echo $cat[0]->cat_name; */?>
					<?php elseif ( is_page() ) : 	// Page ?>
						<span class="glyphicon glyphicon-info-sign hidden-xs text-center"></span><?php the_title(); ?>
					<?php elseif ( is_category() ): // Category ?>
						<span class="glyphicon glyphicon-th-large hidden-xs text-center"></span><?php single_cat_title(); ?>
					<?php elseif ( is_tag() ) : 	// Tag ?>
						<span class="glyphicon glyphicon-tag hidden-xs text-center"></span>Tag: <?php single_tag_title(); ?>
					<?php elseif ( is_author() ) : 	// Author ?>
						<span class="glyphicon glyphicon-user hidden-xs text-center"></span>Author: <?php printf( esc_attr__( '%s', 'hdn' ), get_the_author() ); ?>
					<?php elseif ( is_search() ) : 	// Search ?>
						<span class="glyphicon glyphicon-search hidden-xs text-center"></span><?php _e('Search Results for', 'hdn'); ?> "<?php echo get_search_query(); ?>"
					<?php elseif ( is_archive() ) : // Archive ?>
						Archives: <?php single_month_title(' '); ?>
					<?php else :  					// 404 ?>
						Error 404
					</h1>
				<?php endif;?>
				</div>
			</div>
		</div>
	</header>

<?php endif; ?>

	<?php /* show login form */ ?>
	<?php /* get_template_part( '/modules/access' ); */ ?>	

	<?php /* show submission buttons */ ?>
	<?php get_template_part( '/modules/submissions' ); ?>
