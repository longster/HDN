	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="large-12 columns">

			<header class="entry-header">
			<?php if ( is_single() ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
				<h1 class="entry-title">
						<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>Featured post:<?php endif; ?> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			<?php endif; // is_single() ?>
				<p class="entry-meta-date"><?php echo get_the_date(); ?></p>
				<?php the_post_thumbnail(); ?>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->		
			
			<?php else : ?>
			
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hdn' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hdn' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->

			<footer class="entry-meta">		
				<p>by <a href="mailto:<?php the_author_email(); ?>"><?php the_author(); ?></a> | Filed in: <?php the_category(', ') ?></p>
			</footer><!-- .box-entry-meta -->
			
			<?php /*
			<div class="entry-meta">
				<?php hdn_entry_meta(); ?>
				<?php if ( comments_open() ) : ?>
					<div class="comments-link right">
						<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'hdn' ) . '</span>', __( '1 Reply', 'hdn' ), __( '% Replies', 'hdn' ) ); ?>
					</div><!-- .comments-link -->
				<?php endif; // comments_open() ?>
			</div> 
			*/ ?>
			
			<?php endif; ?>



			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
			<footer class="entry-meta">		
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'hdn' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'hdn' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			</footer><!-- .entry-meta -->
			<?php endif; ?>

			
			</div>
		</div>

	</article><!-- #post -->