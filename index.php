<?php
/**
 * Index
 *
 * @author      Longster
 * @package     hdn
 * @since       1.0 - 03-12-2013
 */

get_header(); ?>

	<?php if(is_front_page() && is_home()) : ?>
    
    <section id="identity">
        <div class="row">
            <div class="large-12 columns">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="brand logo">
                    <h1 class="logo">Houston Deaf Network</h1>
                    <h3>/// Your one source information where Deaf Community share News, Activities, Information and more all within local Houston!</h3>
                </a>
            </div>
        </div>
    </section>

    <section id="submission">
        <div class="row">
            <div class="large-12 columns">
                <h2>Share Your Information With Us!</h2>
                <h4>Announcements | News | Opinion | Support | Resources | Questions | Activities | Events | and more!</h4>
            </div>
        </div>
    </section>
	<?php endif; ?>

	<section id="primary">

	<?php if ( have_posts() ) : ?>
		<ul class="row no-bullet">
		<?php while ( have_posts() ) : the_post(); ?>
			<li class="small-6 medium-4 large-3 columns">
			<?php get_template_part( 'loop/content', 'front' ); ?>
			</li>
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
		<?php } ?>	

	</section>
	

<?php get_footer(); ?>