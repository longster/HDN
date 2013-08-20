	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="large-8 columns push-2">
				
				<header class="">
				<?php if ( is_single() ) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hdn' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php endif; // is_single() ?>
				</header>

				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hdn' ) ); ?>
					<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'twentytwelve_status_avatar', '48' ) ); ?>
					<?php the_author(); ?>

					<div class="entry-meta">
						<span><?php echo get_the_date(); ?> / </span>
						<?php hdn_entry_meta(); ?>
					<?php if ( comments_open() ) : ?>
						<div class="comments-link right">
							<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'hdn' ) . '</span>', __( '1 Reply', 'hdn' ), __( '% Replies', 'hdn' ) ); ?>
						</div><!-- .comments-link -->
					<?php endif; // comments_open() ?>
					</div>

				</div><!-- .entry-content -->
		
			</div>
		</div>
	</article><!-- #post -->

