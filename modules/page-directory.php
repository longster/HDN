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
		<div class="col-md-8 col-md-9">
		<p>HDN directory is a web directory of Internet resources for those who needs certain access or information. Directory is something akin to a huge reference library arranged by subject – from broad to specific. (ex: Deaf, Hearing Impaired, Cochlear Implant, Visual Impaired, etc…).</p>
		<p>We care a great deal about the quality of the directory. Not all submissions will be accepted. If your site is one of them, please do not take it personally. Our goal is to make the directory as useful as possible for our users.</p>
		<p>We welcome comments and feedback about the directory generally. In the meantime, feel free to take a few moments to fill out the form and submit to us. We will review your information as soon as possible.</p>
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
				<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=737&title_li='); ?></ul></h4>
				<p>Doctors, Clinic, Psychology, Chirapractice, Physical Therapist, etc.</p>
			</div>
			<div class="col-md-4"><!-- Religous Organizations -->
				<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=69&title_li='); ?></ul></h4>
				<p>Non profit religous organization - non denomitation, baptists, catholic, lutherian, etc...</p>
			</div>
			<div class="col-md-4"><!-- Education -->
				<h4><ul class="list-unstyled"><?php wp_list_categories('depth=1&include=736&title_li='); ?></ul></h4>
				<p>From kindergarden to highschool, vocational rehabilitation, career development and more.</p>
			</div>
		</div>
		<?php/* while ( have_posts() ) : the_post(); ?>

			<?php if(is_page('events')) : ?>
            <?php get_template_part( '/modules/content', 'block' ); ?>
        	<?php else : ?>
        	<?php get_template_part( '/modules/content', 'page' ); ?>
        	<?php endif; ?>

        <?php endwhile; // end of the loop. */?>
	    </div><!-- .col-md-8 .col-md-9 -->
	    <?php get_sidebar(); ?>
	</div><!-- .row -->
	</div>
</section><!-- #content .container -->



<?php get_footer();?>