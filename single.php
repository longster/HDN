<?php get_header(); ?>

<section id="content">
	<div class="container">	
		<div class="row">
			<div class="col-md-8 col-lg-9">
		
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part( '/modules/content', get_post_format() ); ?>
			<?php endwhile; // End the loop ?>

		    <!-- Related articles and 2 block of ad placement -->
			<?php get_template_part( '/modules/related-posts' ); ?>

			<?php /*
		    <nav id="nav-single" class="pager">
	            <span class="next"><?php next_post_link( '%link', sprintf( '%1$s <span class="meta-nav">&rarr;</span>', __( 'Next Post', 'wpbootstrap' ) ) ); ?></span>
	            <span class="previous"><?php previous_post_link( '%link', sprintf( '<span class="meta-nav">&larr;</span> %1$s', __( 'Previous Post', 'wpbootstrap' ) ) ); ?></span>
		    </nav><!-- #nav-single -->
			*/ ?>
			
			<?php if (is_single() && !post_is_in_descendant_category(7)) : ?>
		    <?php comments_template( '', true ); ?>
			<?php endif; ?>
		
			</div><!-- .col-md-8 -->

			<?php get_sidebar(); ?>
			
		</div><!-- .row -->
	</div>
</section><!-- #content .container -->

<?php get_footer(); ?>