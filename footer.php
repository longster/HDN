<footer id="colophon">
	<div class="container">
		<div class="row">

			<?php/* if (function_exists('adrotate_group') && !is_page() ) { ?>
	        <div class="adblock">
	        	<?php echo adrotate_ad(2); ?>
	        </div>
			<?php } */?>

			<div class="col-md-12 text-center">
				<h2>Make connection, not war.</h2>
			</div>
		</div>
	</div>
	<div class="aside-footer">
		<div class="container">
			<div class="row">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-Company')) : ?>
				<div class="col-md-4">
					<p>Configure at Dashboard > Appearance > Widget > Footer-Company</p>
					<?php /* 
					<div class="col-md-4">
						<a href="http://echode.com"><img src="http://localhost/wp-content/themes/hdn/assets/img/echode-logo.png" class="logo-foot"/></a>
						<p>Houston Deaf Network is created by <a href="http://echode.com">Echode</a> (formely known as BE7A, LLC), based in Houston, TX. Echode focuses on building web products, services, and websites. To learn more, visit us.</p>
					</div>
					*/ ?>
				</div>
		    <?php endif; ?>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
				<div class="col-md-8">
					<p>Configure at Dashboard > Appearance > Widget > Footer</p>
					<p>Archives, Categories, Tags, Forums List, Partners, Network, Authors, etc...</p>
					<?php /*
					<div class="col-md-2">
						<h5>Archives</h5>
						<ul class="list-unstyled">
							<li><a href="#">Month</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Categories</h5>
						<ul class="list-unstyled">
							<li><a href="#">Category</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Tags</h5>
						<ul class="list-unstyled">
							<li><a href="#">Tag</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>About</h5>
						<ul class="list-unstyled">
							<li><a href="#">About</a></li>
							<li><a href="#">Contribute/a></li>
							<li><a href="#">Advertisements</a></li>
							<li><a href="#">Disclaimer &amp; Policy</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					*/ ?>
				</div>
		    <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container credit">
		<div class="row">
			<div class="col-md-6">
		            <?php wp_nav_menu( array(
						'theme_location'	=>	'footer',
						'menu_class'		=>	'list-inline',
						'depth'				=>	2,
						'fallback_cb'		=>	'hdn_menu_fallback',
						'walker'			=>	new hdn_Nav_Walker,
					) );  ?>
					<div class="copyright"><?php hdn_credits(); ?></div>
			</div>
			<div class="col-md-6 text-right">
				<ul class="list-inline">
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-fb.png" alt="Facebook" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-twitter.png" alt="Twitter" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-linkedin.png" alt="LinkedIn" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-fb.png" alt="RSS" /></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>