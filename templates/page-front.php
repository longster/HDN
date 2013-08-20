<?php
/**
 * Template Name: Front Page
 *
 * @author		Long Duong
 * @package 	hdn
 * @since 		1.0 - 03-12-2013
 */
get_header(); ?>

    <section id="identity">
        <div class="row">
            <div class="large-12 columns">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="brand logo">
                    <h1 class="logo">Houston Deaf Network</h1>
                    <h3></h3>
                </a>
            </div>
        </div>
    </section>

	<?php while ( have_posts() ) : the_post(); ?>
        <section id="primary"> 
		      <?php the_content(); ?>
        </section>
	<?php endwhile; // end of the loop. ?>
			

<?php get_footer(); ?>