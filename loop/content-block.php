
<li class="block-post small-6 medium-4 large-3 columns">
	<article id="post-<?php the_ID(); ?>" <?php post_class('box-post'); ?>>
		<header class="box-entry-header">
			<span class=""><?php the_category(',') ?></span>
			<span class="right box-entry-meta-date"><?php echo get_the_date('m.d.y'); ?></span>
		</header><!-- .entry-header -->

		<h3 class="box-entry-title">
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>Featured post:<?php endif; ?> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
		
		<footer class="box-entry-meta">		
			by <a href="mailto:<?php the_author_email(); ?>"><?php the_author(); ?></a>
		</footer><!-- .box-entry-meta -->
	</article><!-- #post -->
</li>