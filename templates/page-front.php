<?php
/**
 * Template Name: Front Page
 *
 * @author		Long Duong
 * @package 	WPZurb-HDN
 * @since 		1.0 - 03-12-2013
 */
get_header(); ?>

    <section id="identity">
        <div class="row">
            <div class="large-12 columns">
                <h1>Houston<span class="green">Deaf</span>Network</h1>
                <h5>Your one source information where Deaf Community can share and network all within Houston.</h5>
            </div>
        </div>
    </section>

    <section id="primary">   
        <div class="row">
            <div class="large-12 columns">
                <h2>/// Announcement  /  Important message here</h2>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <h2>///  Social Activities  /  Things You can do around Houston</h2>
            </div>
        </div>
        <div class="row">
            <article class="small-6 large-3 columns">
                <?php $my_query = new WP_Query('category_name=asl-social&showposts=4');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php wpzurb_entry_meta(); ?>
                <?php /*the_content('continue &raquo;'); */?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </article>

            <article class="small-6 large-3 columns">
                <?php $my_query = new WP_Query('category_name=dphhh-dno&showposts=4');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php wpzurb_entry_meta(); ?>
                <?php /* the_content('continue &raquo;'); */ ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </article>

            <article class="small-6 large-3 columns">
                <?php $my_query = new WP_Query('category_name=events&showposts=4');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php wpzurb_entry_meta(); ?>
                <?php /* the_content('continue &raquo;'); */ ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </article>

            <article class="small-6 large-3 columns">
                <?php $my_query = new WP_Query('category_name=shows&showposts=4');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php wpzurb_entry_meta(); ?>
                <?php /* the_content('continue &raquo;'); */ ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </article>

        </div>

        <div class="row">
            <div class="large-12 columns">
                <h2>///  Latest News  /  Collective articles from Houston community</h2>
            </div>
        </div> 
        <div class="row">
            <div class="small-6 large-3 columns">Block 1</div>
            <div class="small-6 large-3 columns">Block 2</div>
            <div class="small-6 large-3 columns">Block 3</div>
            <div class="small-6 large-3 columns">Block 4</div>
        </div>
        <div class="row">
            <div class="small-6 large-3 columns">Block 1</div>
            <div class="small-6 large-3 columns">Block 2</div>
            <div class="small-6 large-3 columns">Block 3</div>
            <div class="small-6 large-3 columns">Block 4</div>
        </div>

        <div class="row">
            <div class="small-2 large-2 columns">Block 1</div>
            <div class="small-2 large-2 columns">Block 2</div>
            <div class="small-2 large-2 columns">Block 3</div>
            <div class="small-2 large-2 columns">Block 4</div>
            <div class="small-2 large-2 columns">Block 5</div>
            <div class="small-2 large-2 columns">Block 6</div>
        </div> 
        <br/>
        <br/>

    </section> <!-- #primary -->
			

<?php get_footer(); ?>