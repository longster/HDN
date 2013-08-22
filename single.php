<?php get_header(); ?>
    
    <section class="catTitle">
        <div class="row">
            <div class="large-12 columns">
                <h1><?php the_category(', '); ?></h1>
            </div>
        </div>
    </section>

	<section id="primary">
		<div class="row">
			<div class="large-8 push-1 columns ">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'loop/content', get_post_format() ); ?>
			<?php endwhile; // end of the loop. ?>

			<?php comments_template( '', true ); ?>
			
			</div>

			<aside id="sidebar" class="large-3 columns">
				<?php get_sidebar(); ?>
			</aside>

		</div>
	</section>


<?php get_footer(); ?>