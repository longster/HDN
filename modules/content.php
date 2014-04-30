<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	<?php if ( is_single() ) : ?>
		<h1><?php the_title(); ?></h1>
	<?php else : ?>
		<h3 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
	<?php endif; ?>

	<?php if (is_single() ) : ?>
		<footer class="entry-meta">
			<?php /*hdn_entry_meta();*/ ?>
			<span class="box-entry-meta-date">Published <?php echo get_the_date('F d Y'); ?></span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a> 
	            <?php edit_post_link( __( 'Edit', 'hdn' ), '<span class="edit-link pull-right">', '</span>' ); ?>
		</footer>
	<?php endif; ?>
	</header>

<?php if ( is_search() ) : ?>

	<div class="entry-summary hidden-xs">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<hr/>
	
<?php else : ?>

	<?php /* adrotate between title and content */ ?>
	<?php  if (function_exists('adrotate_group') && is_single() ) { ?>
	<div class="row">
		<div class="box-post text-center col-md-12">
			<div class="thumbnail">
			<?php echo adrotate_ad(1); ?>
			<?php echo adrotate_ad(2); ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<div class="entry-content">
			
		<?php 
		 if ( has_post_thumbnail()) {
		   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
		   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
		   the_post_thumbnail('small', array('class' => 'alignright'));
		   echo '</a>';
		 }
		 ?>	
		<?php /* if ( has_post_thumbnail() && !post_password_required() ) : ?>
		<?php the_post_thumbnail('medium', array('class' => 'alignright')); ?>
		<?php endif; */ ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hdn' ) ); ?>
		
		<?php if( get_post_meta($post->ID, 'Author Name', true) ) { ?>

		Contact <a href="mailto:<?php echo get_post_meta($post->ID, 'Author Email', true); ?>"><?php echo get_post_meta($post->ID, 'Author Name', true); ?></a><br/>
		<?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_1', true); ?> / <?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_2', true); ?> / <?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_3', true); ?>
	
		<?php } ?>


		<?php/* if (usp_is_public_submission()) : ?>
			<?php if (function_exists('is_submission')) is_submission(); ?>
			Contributed by: <?php if (function_exists('usp_author_link')) usp_author_link(); ?><br/>
			USP Images: <?php $images = usp_get_post_images(); foreach ($images as $image) { echo $image; } ?><br/>
			
			USP Attachment: <?php if (function_exists('usp_post_attachments')) usp_post_attachments(); ?><br/>
		<?php endif; */?>

	</div>

<?php endif; ?>

	<?php if (is_single() && !post_is_in_descendant_category(7)) : ?>
		<?php get_template_part( '/modules/author-bio' ); ?>
	<?php endif ; ?>
    
</article>