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
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
				<div class="col-md-12">
					<p>Configure at Dashboard > Appearance > Widget > Footer</p>
					<p>Archives, Categories, Tags, Forums List, Partners, Network, Authors, etc...</p>
				</div>
		    <?php endif; ?>
			</div>
			<div class="row">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-Company')) : ?>
				<div class="col-md-12 hide">
					<p>Configure at Dashboard > Appearance > Widget > Footer-Company</p>
				</div>
				<?php /* 
				<div class="col-md-8">
					<a href="#">ECHODE logo here...</a>
					<p>HDN is made by <a href="#">ECHODE</a> (formely known as BE7A, LLC), based in Houston, Texas. We've put more than 10 years in experience building web products, services and websites into this framework.</p>
				</div>
				<div class="col-md-2">
					<h5>Title</h5>
					<ul class="list-unstyled">
						<li><a href="#">About</a></li>
						<li><a href="#">Echode</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Advertisements</a></li>
						<li><a href="#">Disclaimer &amp; Policy</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h5>Title</h5>
					<ul class="list-unstyled">
						<li><a href="#">Contribute &amp; Submissions</a></li>
						<li><a href="#">Events &amp; Activities</a></li>
						<li><a href="#">Articles &amp; News</a></li>
						<li><a href="#">Job Listing</a></li>
						<li><a href="#">Directory</a></li>
					</ul>
				</div>
				*/ ?>
		    <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container credit">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
		            <?php wp_nav_menu( array(
						'theme_location'	=>	'footer',
						'menu_class'		=>	'list-inline',
						'depth'				=>	2,
						'fallback_cb'		=>	'hdn_menu_fallback',
						'walker'			=>	new hdn_Nav_Walker,
					) );  ?>
					</div>
					<div class="col-md-12">
						<?php hdn_credits(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6 text-right">
				<p>Social links</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>