<?php get_header(); ?>

<section id="content">
	<div class="container">	
		<div class="row">
			<div class="col-md-8 col-lg-9">
		
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( '/modules/content', get_post_format() ); ?>
				<?php endwhile; ?>
		
			<?php else : ?>
			
				<?php get_template_part( '/modules/content', 'none' ); ?>
		
			<?php endif; // end have_posts() check ?>
	
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( function_exists('hdn_pagination') ) { hdn_pagination(); } elseif ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="previous"><?php next_posts_link( __( '&larr; Older posts', 'hdn' ) ); ?></div>
				<div class="next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'hdn' ) ); ?></div>
			</nav>
			<?php } ?>
		
			</div><!-- .col-md-8 -->

			<?php get_sidebar(); ?>
			
		</div><!-- .row -->
	</div>
</section><!-- #content .container -->

<?php get_footer(); ?>