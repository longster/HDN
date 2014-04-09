<?php if(is_front_page()) : ?>
	<!-- display announcements in this area -->

	<?php $my_query = new WP_Query('category_name=announcements&posts_per_page=1');
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate = $post->ID; ?>

		<div class="featured row">
			<div class="col-md-12">
				<div class="thumbnail sticky-post">
					<?php get_template_part( 'modules/content', get_post_format() ); ?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

<?php /*
<?php elseif (is_category()) : ?>
	
	<div class="featured category row">
		<div class="col-md-12">
			<div class="thumbnail sticky-post">    			
				Category featured placement
			</div>
		</div>
	</div>

<?php else : ?>
	
	<div class="featured misc row">
		<div class="col-md-12">
			<div class="thumbnail sticky-post">    			
				Misc featured placement
			</div>
		</div>
	</div>
*/ ?>

<?php endif;  ?>