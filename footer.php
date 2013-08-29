<?php
/**
 * Footer
 *
 * @author      Longster
 * @package     hdn
 * @since       1.0 - 03-12-2013
 */
?>
	<?php if( !is_page() || is_page('Events') ) : ?>
	<?php if (function_exists('adrotate_group')) { ?>
	<section class="ads bannerbottom">
		<div class="row">
            <div class="large-12 columns">
			<?php echo adrotate_ad(5); ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php endif ; ?>

	<footer id="colophon">
		<div class="aside-footer">
			<div class="row">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
						Configure at Dashboard > Appearance > Widget > Footer
		        <?php endif; ?>
			</div>
		</div>
		
		<div class="credit">
			<div class="row">
				<div class="large-12 columns">
					<small><?php hdn_credits(); ?></small>
	                <?php
	                    wp_nav_menu( array(
	                        'theme_location' => 'footer-menu',
	                        'container' => false,
	                        'depth' => 0,
	                        'items_wrap' => '<ul class="right inline-list">%3$s</ul>',
	                        'fallback_cb' => 'hdn_menu_fallback', // workaround to show a message to set up a menu
	                    	'walker' => new hdn_walker( array(
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
		('__proto__' in {} ? '<?php bloginfo( 'template_url' );?>/js/vendor/zepto' : '<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery') +
		'.js><\/script>')
	</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.abide.js"></script>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.alerts.js"></script>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.clearing.js"></script */ ?>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.cookie.js"></script>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.forms.js"></script>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.interchange.js"></script>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.joyride.js"></script */ ?>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.magellan.js"></script */ ?>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.orbit.js"></script */ ?>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.placeholder.js"></script>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.reveal.js"></script */ ?>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.section.js"></script>	
	<?php /* script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.tooltips.js"></script */ ?>	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>
	
	<script>
		$(document).foundation();
	</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/hdn.js"></script>
<?php if( !is_single() && !is_page() && !is_bbpress() ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/load-posts.js"></script>
<?php endif; ?>

	<?php wp_footer(); ?>

</body>
</html>