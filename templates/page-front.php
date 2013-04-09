<?php
/**
 * Template Name: Front Page
 *
 * @author		Long Duong
 * @package 	WPZurb
 * @since 		1.0 - 03-12-2013
 */
get_header(); ?>

    <section class="">
	    <div class="row">
			<div class="large-12 columns">
			</div>
		</div>
    </section>

    <section class="">            
        <div class="full-width">
            <div class="row">
            	<div class="large-12 columns">
                
                </div>
            </div>
            <div class="row">
            	<div class="large-4 columns">
            		<a class="small button large-4 expand radius"> WP Foundation</a>
            	</div>
            	<div class="large-4 columns">
            		<a class="small button large-4 expand radius">View Project on Github</a>
            	</div>
            	<div class="large-4 columns">
            		<a class="small button large-4 expand radius">Fork Me</a>
            	</div>
            </div>
        </div>
    </section>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
			

<?php get_footer(); ?>