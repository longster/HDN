<li <?php post_class('col-sm-6 col-md-4 col-lg-3'); ?>>
	<article id="post-<?php the_ID(); ?>" class="thumbnail">

		<?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
			<div class="box-thumbnail hidden-xs">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			</div><!-- .box-thumbnail -->
		<?php else : ?>
			<div <?php post_class('empty-thumbnail hidden-xs'); ?>>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"></a>
			</div><!-- .empty-thumbnail -->
		<?php endif; ?>

		<header class="box-entry-header hidden-xs">
			<?php the_category(', ') ?>
		</header><!-- .box-entry-header -->

		<div class="box-entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</div><!-- .box-entry-title -->
		
		<footer class="box-entry-meta hidden-xs">		
			<span class="box-entry-meta-date pull-right"><?php echo get_the_date('m.d.y'); ?></span>
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
		</footer><!-- .box-entry-meta -->
		
	</article><!-- #post -->
</li>