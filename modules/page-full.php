<?php
/** page-full.php
 *
 * Template Name: Full Width
 *
 * @author		Long Duong
 * @package 	HDN
  */
get_header(); ?>

<?php if (function_exists('adrotate_group') && is_page('events') ) { ?>
<section id="content">
    <div class="container">
        <div class="adblock hidden-xs">
        	<div class="row">
        		<div class="col-md-3 col-md-offset-3 advertisers">
        		<?php echo adrotate_ad(1); //Sorensons ?>
        		</div>
        		<div class="col-md-3 advertisers">
        		<?php echo adrotate_ad(2); //Howard Knight ?>
        		</div>
        	</div>
        </div>
    </div>
</section>
<?php }  ?>


<section id="content">
	<div class="container">	
	<div class="row">
		<div class="col-md-12">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if(is_page('events')) : ?>
            <?php get_template_part( '/modules/content', 'events' ); ?>
        	<?php else : ?>
        	<?php get_template_part( '/modules/content', 'page' ); ?>
        	<?php endif; ?>

        <?php endwhile; // end of the loop. ?>
	    </div><!-- .col-md-12 -->
	</div><!-- .row -->
	</div>
</section><!-- #content .container -->



<?php get_footer();?>