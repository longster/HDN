<li <?php post_class('box-post col-sm-6 col-md-4 col-lg-3'); ?>>
	<article id="post-<?php the_ID(); ?>" class="thumbnail">

		<header class="box-entry-header hidden-xs">
			<?php the_category(', ') ?>
		</header><!-- .entry-header -->

		<a class="box-entry-title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		
		<footer class="box-entry-meta hidden-xs">		
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
			<span class="box-entry-meta-date pull-right"><?php echo get_the_date('m.d.y'); ?></span>
		</footer><!-- .box-entry-meta -->
		
	</article><!-- #post -->
</li>