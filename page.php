<?php get_header(); ?>

<section id="content">
	<div class="container">	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

			<?php while ( have_posts() ) : the_post(); ?>
		        <?php get_template_part( '/modules/content', 'page' ); ?>
		    <?php endwhile; // end of the loop. ?>
		    
		    </div><!-- .col-md-10 .col-md-offset-1-->

		    <?php /* get_sidebar(); */ ?>
		    
		</div><!-- .row -->
	</div>
</section><!-- #content .container -->
<?php get_footer();?>