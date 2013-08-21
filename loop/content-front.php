	<article id="post-<?php the_ID(); ?>" <?php post_class('boxPost'); ?>>
		<div class="row">
			<div class="large-12 columns">

			<header class="entry-header">
				<?php echo get_the_category_list('list=0'); ?>
				<span class="entry-meta-date"><?php echo get_the_date(); ?></span>
			</header><!-- .entry-header -->

			<div>
				<h1 class="entry-title">
						<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>Featured post:<?php endif; ?> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			</div>

			<footer class="entry-meta">		
				<div class="author-info">
					<div class="author-avatar">
						by <a href="mailto:<?php the_author_email(); ?>"><?php the_author(); ?></a>
					</div><!-- .author-avatar -->
				</div><!-- .author-info -->
			</footer><!-- .entry-meta -->
			
			</div>
		</div>

	</article><!-- #post -->