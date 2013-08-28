<?php
/**
 * Index
 *
 * @author      Longster
 * @package     hdn
 * @since       1.0 - 03-12-2013
 */

get_header(); ?>



    <?php if (function_exists('adrotate_group')) { ?>
    <section class="ads bannertop">
        <div class="row">
            <div class="large-12 columns">
            <?php echo adrotate_ad(2); ?>
            </div>
        </div>
    </section>
    <?php } ?>

	<section id="primary">


	<?php if ( have_posts() ) : ?>
		<ul id="block-grid" class="row no-bullet">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop/content', 'block' ); ?>

			<?php if (function_exists('adrotate_group')) { ?>
			
				<?php if( $wp_query->current_post == 2 ) { ?>
				<li class="ads bannderside block-post small-12 medium-4 large-3 columns">
					<article class="box-post text-center">
						<div style="margin-top: 65px; cursor: pointer;"><?php echo adrotate_ad(1); ?></div>
						<a href="/advertise/" style="margin: 40px 0 0 0;">Advertise with us.</a>
					</article>
				</li>
				<?php } ?>
			
				<?php if( $wp_query->current_post == 6 ) { ?>
					<li class="ads bannderside block-post small-12 medium-4 large-3 columns">
						<article class="box-post text-center">
							<span class="" style="margin: 30px 0 20px 0; display: inline-block;"><?php echo adrotate_ad(3); ?></span>
							<span class="" style="margin: 0 0 15px 0; display: inline-block;"><?php echo adrotate_ad(4); ?></span><br/>
							<a href="/advertise/">Advertise with us.</a>
						</article>
					</li>
				<?php } ?>
			
			<?php } ?>
		
		<?php endwhile; ?>
		</ul>
	<?php else : ?>

		<article id="post-0" class="post no-results not-found">
			<div class="row">
				<div class="large-8 push-2 columns">

						<?php if ( current_user_can( 'edit_posts' ) ) :
							// Show a different message to a logged-in user who can add posts.
						?>
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'No posts to display', 'hdn' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'hdn' ), admin_url( 'post-new.php' ) ); ?></p>
							</div><!-- .entry-content -->

						<?php else :
							// Show the default message to everyone else.
						?>
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nothing Found', 'hdn' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'hdn' ); ?></p>
							</div><!-- .entry-content -->
						<?php endif; // end current_user_can() check ?>

				</div>
			</div>
		</article><!-- #post-0 -->

	<?php endif; // end have_posts() check ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('hdn_pagination') ) { hdn_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'hdn' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'hdn' ) ); ?></div>
			</nav>
		<?php }  ?>	

	</section><!-- #primary -->

<?php get_footer(); ?>