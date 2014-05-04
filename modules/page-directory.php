<?php
/** page-directory.php
 *
 * Template Name: Directory Only
 *
 * @author		Long Duong
 * @package 	HDN
  */
get_header(); ?>

<?php if (function_exists('adrotate_group') && is_page('events') ) { ?>
<section id="content">
    <div class="container">
	    <div class="adblock">
	        <?php echo adrotate_ad(2); ?>
	    </div>
    </div>
</section>
<?php }  ?>


<section id="content">
	<div class="container">	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php while ( have_posts() ) : the_post(); ?>
		        <?php get_template_part( '/modules/content', 'page' ); ?>
		    <?php endwhile; // end of the loop. ?>
			<div class="row">
				<div class="col-md-4"><!-- Professional Services -->
					<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=38&title_li='); ?></ul></h4>
					<p>Business related to finances, tax, or any professional services</p>
				</div>
				<div class="col-md-4"><!-- General Services -->
					<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=23&title_li='); ?></ul></h4>
					<p>Haircut, plumbing, construction, builder, etc.</p>
				</div>
				<div class="col-md-4"><!-- Interpreter Services -->
					<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=68&title_li='); ?></ul></h4>
					<p>ASL Signer, Cues Speech, MSL, etc...</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"><!-- Health & Wellness -->
					<h4><ul class="list-unstyled"><?php echo wp_list_categories('depth=1&include=20&title_li='); ?></ul></h4>
					<p>Doctors, Clinic, Psychology, Chirapractice, Physical Therapist, etc.</p>
				</div>
				<div class="col-md-4"><!-- Religous Organizations -->
					<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=69&title_li='); ?></ul></h4>
					<p>Non profit religous organization - non denomitation, baptists, catholic, lutherian, etc...</p>
				</div>
				<div class="col-md-4"><!-- Education Services-->
					<h4><ul class="list-unstyled"><?php echo wp_list_categories('depth=1&include=8&title_li='); ?></ul></h4>
					<p>From kindergarden to highschool, vocational rehabilitation, career development and more.</p>
				</div>
			</div>
	    </div><!-- .col-md-10 .col-md-offset-1 -->
	    <?php /* get_sidebar(); */ ?>
	</div><!-- .row -->
	</div>
</section><!-- #content .container -->



<?php get_footer();?>