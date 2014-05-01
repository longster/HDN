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

	<div class="entry-content">

		 <?php if ( has_post_thumbnail() && !post_password_required()) : ?>
		   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="featured-img alignright">
			<?php the_post_thumbnail('thumbnail'); echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
		   </a>
		 <?php endif; ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hdn' ) ); ?>
		
		<?php if( get_post_meta($post->ID, 'Author Name', true) ) { ?>

		Contact <a href="mailto:<?php echo get_post_meta($post->ID, 'Author Email', true); ?>"><?php echo get_post_meta($post->ID, 'Author Name', true); ?></a><br/>
		<?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_1', true); ?> / <?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_2', true); ?> / <?php echo get_post_meta($post->ID, 'TDOMF Form #2 Custom Field #_3', true); ?>
	
		<?php } ?>


		<?php if ( !is_front_page() && !is_home() ) : ?>
		<!-- Nav Post - Next/Previous -->
		<?php get_template_part( '/modules/nav-single' ); ?>
		<?php endif; ?>

	</div>

<?php endif; ?>

	<?php /* adrotate between title and content */ ?>
	<?php  if (function_exists('adrotate_group') && is_single() ) { ?>
	<div class="text-center" style="border-top: 1px dotted #eee; padding-top:15px;">
		<?php echo adrotate_ad(1); ?>
		<?php echo adrotate_ad(2); ?>
	</div>
	<?php } ?>

	<?php if (is_single() && !post_is_in_descendant_category(7)) : ?>
		<!-- Author Biography -->
		<?php get_template_part( '/modules/author-bio' ); ?>
	<?php endif ; ?>
    
</article>