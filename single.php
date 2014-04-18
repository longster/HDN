<?php get_header(); ?>

<section id="content">
	<div class="container">	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
		
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part( '/modules/content', get_post_format() ); ?>
			<?php endwhile; // End the loop ?>

		    <!-- Related articles and 2 block of ad placement -->
			<?php get_template_part( '/modules/related-posts' ); ?>

			<?php /* get_template_part( '/modules/nav-single' ); */ ?>
			
			<?php if (is_single() && !post_is_in_descendant_category(7)) : ?>
		    <?php comments_template( '', true ); ?>
			<?php endif; ?>
		
			</div><!-- .col-md-10 .col-md-offset-1 -->

			<?php /* get_sidebar(); */ ?>
			
		</div><!-- .row -->
	</div>
</section><!-- #content .container -->

<?php get_footer(); ?>