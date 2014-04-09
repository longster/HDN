<?php if ( is_single() && get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
<div id="author-info" class="row">
    
    <?php /*
    <div id="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'hdn_author_bio_avatar_size', 60 ) ); ?>
    </div><!-- #author-avatar -->
    */?>
    
    <div id="author-description" class="col-md-12">
        <h3><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'hdn_author_bio_avatar_size', 35 ) ); ?><?php printf( esc_attr__( 'About %s', 'hdn' ), get_the_author() ); ?></h3>
        <?php the_author_meta( 'description' ); ?>
        <div id="author-link">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php printf( __( 'View posts by %s', 'hdn' ), get_the_author() ); ?></a>
            <?php if ( get_the_author_meta( 'user_url' ) ) : ?> | <a href="<?php echo get_the_author_meta( 'user_url' ); ?>">website</a> <?php endif; ?>
            <?php if ( get_the_author_meta( 'twitter' ) ) : ?> | <a href="https://twitter.com/<?php the_author_meta('twitter'); ?>"><?php the_author_meta('twitter'); ?></a> <?php endif; ?>
            <?php if ( get_the_author_meta( 'facebook' ) ) : ?> | <a href="https://facebook.com/<?php the_author_meta('facebook'); ?>"><?php the_author_meta('facebook'); ?></a><?php endif; ?>
        </div><!-- #author-link -->
    </div><!-- #author-description -->

</div><!-- #author-info -->
<?php endif; ?>
