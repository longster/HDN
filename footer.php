<?php
/**
 * Footer
 *
 * @author      Longster
 * @package     HDN
 * @since       7.0 - 04-30-2013
 */
?>
	<footer id="colophon">

		<div class="aside-tweetr">
			<div class="row">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('twitter')) : ?>
	        	<?php endif; ?>
        	</div>
		</div>

		<div class="aside-footer">
			<div class="row">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Child Footer')) : ?>
			<?php endif; ?>
			</div>
		</div>
		
		<div class="credit">
			<div class="row">
				<div class="large-12 columns">
					<small><?php wpzurb_credits(); ?></small>
	                <?php
	                    wp_nav_menu( array(
	                        'theme_location' => 'footer-menu',
	                        'container' => false,
	                        'depth' => 0,
	                        'items_wrap' => '<ul class="right inline-list">%3$s</ul>',
	                        'fallback_cb' => 'wpzurb_menu_fallback', // workaround to show a message to set up a menu
	                    	'walker' => new wpzurb_walker( array(
	                            'in_top_bar' => false,
	                            'item_type' => 'li'
	                        ) ),
	                    ) );
	                ?>
				</div>
			</div>
		</div>
	</footer>


	<script>
		document.write('<script src=' +
		('__proto__' in {} ? '<?php bloginfo( 'template_url' );?>/js/vendor/zepto' : '<?php bloginfo( 'template_url' );?>/js/vendor/jquery') +
		'.js><\/script>')
	</script>

	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.js"></script>
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.abide.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.alerts.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.clearing.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.cookie.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.dropdown.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.forms.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.interchange.js"></script>	
	<?php /* script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.joyride.js"></script */ ?>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.magellan.js"></script>	
	<?php /* script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.orbit.js"></script */ ?>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.placeholder.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.reveal.js"></script>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.section.js"></script>	
	<?php /* script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.tooltips.js"></script */ ?>	
	<script src="<?php bloginfo( 'template_url' );?>/js/foundation/foundation.topbar.js"></script>
	
	<script>
	$(document).foundation();
	</script>

	<script src="<?php bloginfo( 'template_url' );?>/js/wpzurb.js"></script>

	<?php wp_footer(); ?>

</body>
</html>