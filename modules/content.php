<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	<?php if ( is_single() ) : ?>
		<h1><?php the_title(); ?></h1>
	<?php elseif (is_search() ) : ?>
		<h3 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
	<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
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

	<div class="entry-content hidden-xs">
		<?php /* if (function_exists('adrotate_group') && is_single() ) { ?>
				<div class="adblock-single hidden-xs text-center">
					<?php echo adrotate_ad(1); ?>
				</div>
		<?php } */?>
		
		<?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hdn' ) ); ?>
		<?php/* if (usp_is_public_submission()) : ?>
			<?php if (function_exists('is_submission')) is_submission(); ?>
			Contributed by: <?php if (function_exists('usp_author_link')) usp_author_link(); ?><br/>
			USP Images: <?php $images = usp_get_post_images(); foreach ($images as $image) { echo $image; } ?><br/>
			
			USP Attachment: <?php if (function_exists('usp_post_attachments')) usp_post_attachments(); ?><br/>
		<?php endif; */?>
	</div>

<?php endif; ?>

	<?php get_template_part( '/modules/author-bio' ); ?>
    
</article>