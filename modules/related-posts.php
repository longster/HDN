<?php 	$orig_post = $post; 
		global $post; $categories = get_the_category($post->ID); 
		if ($categories) { 
			$category_ids = array(); ?>
			
<!---Related Posts http://www.bloggercent.com/536/related-posts-with-thumbnails-on-wordpress-without-plugin.html --> 
<div class="relatedposts row"> 
	<h3 class="col-md-12">Related Articles</h3>


<?php 	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; 
				$args=array( 	'category__in' => $category_ids, 
								'post__not_in' => array($post->ID), 
								'posts_per_page'=> 3, 
								'caller_get_posts'=>1 ); 
				$my_query = new wp_query( $args ); 


		while( 	$my_query->have_posts() ) { 
				$my_query->the_post(); ?> 

	<div class="relatedthumb box-post col-sm-4 col-md-4">
		<div class="thumbnail"> 
			<header class="box-entry-header hidden-xs">
				<?php the_category(', ') ?>
			</header><!-- .entry-header -->

			<a class="box-entry-title" rel="external" href="<?php the_permalink(); ?>"><?php/* the_post_thumbnail(array(100,100)); */?><?php the_title(); ?> </a> 

			<footer class="box-entry-meta hidden-xs">		
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
				<span class="box-entry-meta-date pull-right"><?php echo get_the_date('m.d.y'); ?></span>
			</footer><!-- .box-entry-meta -->

		</div>
	</div> 

		<? }  ?>

</div> <!---Related Posts -->

	<? }  ?>
	
<?php $post = $orig_post; 
wp_reset_query(); 
?> 
