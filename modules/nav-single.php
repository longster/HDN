<nav id="nav-single" class="pager">
    <?php previous_post_link( '%link', sprintf( '<button class="btn btn-primary btn-sm pull-right">%1$s <span class="meta-nav">&rarr;</span></button>', __( 'Older Post', 'hdn' ) ) ); ?>
    <?php next_post_link( '%link', sprintf( '<button class="btn btn-primary btn-sm pull-left"><span class="meta-nav">&larr;</span> %1$s</button>', __( 'Newer Post', 'hdn' ) ) ); ?>
</nav><!-- #nav-single -->