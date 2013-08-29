<?php get_header(); ?>

<?php if ( !is_bbpress() ) : //do not display in forums ?> 
    
    <header id="the-title">
        <div class="row">
            <div class="large-12 columns">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
        </div>
    </header>
	
<?php elseif (is_bbpress() || is_page('Events') ) : //display only in and within forums or event page ?>
	
	<?php if (function_exists('adrotate_group')) { ?>
    <section class="ads bannertop">
        <div class="row">
            <div class="large-12 columns">
            <?php echo adrotate_ad(2); ?>
            </div>
        </div>
    </section>
    <?php } ?>
    
<?php endif ?>

	<section id="primary">
		<div class="row">
			<div class="large-9 columns">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'loop/content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		
				<?php /* comments_template( '', true ); */ ?>
			</div>

			<aside id="sidebar" class="large-3 columns">
					<?php get_sidebar(); ?>
			</aside>	
		</div>
	</section>

<?php get_footer(); ?>