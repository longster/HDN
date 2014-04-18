<aside id="sidebar" class="col-md-10 col-md-offset-1">
<?php if ( is_bbpress() ) : // bbpress ?>

    <?php dynamic_sidebar("Sidebar-Forums"); ?>

<?php elseif ( is_page() ) : ?>

    <?php dynamic_sidebar("Sidebar-Page"); ?>

<?php else : ?>

    <?php dynamic_sidebar("Sidebar-Single"); ?>

<?php endif;?>
</aside><!-- /#sidebar -->  
