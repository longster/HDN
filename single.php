<?php get_header(); ?>
    
    <section class="catTitle">
        <div class="row">
            <div class="large-12 columns">
                <h1><?php the_category(', '); ?></h1>
            </div>
        </div>
    </section>


    <?php if (function_exists('adrotate_group')) { ?>
    <section class="ads bannertop">
        <div class="row">
            <div class="large-12 columns">
            <?php echo adrotate_ad(2); ?>
            </div>
        </div>
    </section>
    <?php } ?>
    

	<section id="primary">
		<div class="row">
			<div class="large-1 columns">&nbsp;</div>
			<div class="large-8 columns">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop/content', get_post_format() ); ?>
				<?php endwhile; // end of the loop. ?>

				<div id="authorbox">  
					<h4>About <?php the_author_posts_link(); ?></h4>  
					<?php if (function_exists('get_avatar')) { echo get_avatar(get_the_author_email(), '85', 'http://www.houstondeafnetwork.com/wp-content/themes/HDN_v1/images/gravatar_contributors.png' ); }?><small class="hidden">Contact the <a href="mailto:<?php the_author_email(); ?>">Author</a></small>
					<div class="authortext">  
						<p><?php the_author_description(); ?></p>  
					</div>
				</div> 

				<?php comments_template( '', true ); ?>
			</div>

			<aside id="sidebar" class="large-3 columns">
				<?php get_sidebar(); ?>
			</aside>

		</div>
	</section>


<?php get_footer(); ?>