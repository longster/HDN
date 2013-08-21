<?php
/**
 * Template Name: Front Page
 *
 * @author		Long Duong
 * @package 	hdn
 * @since 		1.0 - 03-12-2013
 */
get_header(); ?>

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

    <section id="primary">
                <ul class="row no-bullet">

                <?php 
                    $recentPosts = new WP_Query(); 
                    $recentPosts->query('showposts=24');
                ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <li class="small-6 medium-4 large-3 columns">
                        <article class="boxPost">
                            <div class="">
                                <?php echo get_the_category_list('list=0'); ?>
                                <span class="right entry-meta-date"><?php echo get_the_date(); ?></span>                                
                            </div>
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            <div>by <?php the_author(); ?></div>
                        </article>
                    </li>
                    <?php endwhile; ?>
                </ul>
    </section>

	<?php while ( have_posts() ) : the_post(); ?>
        <section id="primary"> 
		      <?php the_content(); ?>
        </section>
	<?php endwhile; // end of the loop. ?>
			

<?php get_footer(); ?>