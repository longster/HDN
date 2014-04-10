<?php get_header(); ?>

<section id="content">
<div class="container">


		<?php if (function_exists('adrotate_group') && !is_page() ) { ?>
        <div class="adblock">
        	<?php echo adrotate_ad(2); ?>
        </div>
		<?php } ?>

		<?php get_template_part( 'modules/content', 'featured');  ?>


	<?php if ( have_posts() ) : ?>
	
    	<ul class="row list-unstyled">
    	<?php while ( have_posts() ) : the_post(); if( $post->ID == $do_not_duplicate ) continue;?>

			<?php get_template_part( 'modules/content', 'block' ); ?>

    		<?php if (function_exists('adrotate_group')) { ?>
			
				<?php if( $wp_query->current_post == 3 ) { ?>
				<li class="box-post col-sm-6 col-md-4 col-lg-3 hidden-xs">
					<article class="thumbnail text-center">
						<div class="ads">
							<?php echo adrotate_ad(1); ?>
							<a href="/advertise/">Advertise with us.</a>
						</div>
					</article>
				</li>
				<?php } ?>
			
				<?php if( $wp_query->current_post == 3 ) { ?>
					<li class="box-post col-sm-6 col-md-4 col-lg-3 hidden-xs">
						<article class="thumbnail text-center">
							<div class="ads">
								<?php echo adrotate_ad(3); ?>
								<a href="/advertise/">Advertise with us.</a>
							</div>
						</article>
					</li>
				<?php } ?>
			
				<?php if( $wp_query->current_post == 3 ) { ?>
					<li class="box-post col-sm-6 col-md-4 col-lg-3 hidden-xs">
						<article class="thumbnail text-center">
							<div class="ads">
								<?php echo adrotate_ad(4); ?>
								<a href="/advertise/">Advertise with us.</a>
							</div>
						</article>
					</li>
				<?php } ?>
			
				<?php if( $wp_query->current_post == 3 ) { ?>
					<li class="box-post col-sm-6 col-md-4 col-lg-3 hidden-xs">
						<article class="thumbnail text-center">
							<div class="ads">
								<?php echo adrotate_ad(4); ?>
								<a href="/advertise/">Advertise with us.</a>
							</div>
						</article>
					</li>
				<?php } ?>
			
			<?php } ?>

		<?php endwhile; ?>
		</ul>

	<?php else : ?>

		<div class="row">
			<?php get_template_part( 'modules/content', 'none' ); ?>
		</div>
	
	<?php endif; // end have_posts() check ?>
	
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('hdn_pagination') ) { hdn_pagination(); } elseif ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="previous"><?php next_posts_link( __( '&larr; Older posts', 'hdn' ) ); ?></div>
			<div class="next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'hdn' ) ); ?></div>
		</nav>
		<?php } ?>

</div><!-- .container -->
</section><!-- #content -->

<?php get_footer(); ?>