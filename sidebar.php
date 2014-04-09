<aside id="sidebar" class="col-md-4 col-lg-3">
<?php if ( is_bbpress() ) : // bbpress ?>

    <h2>Sidebar BBPress</h2>
    <?php dynamic_sidebar("Sidebar-Forums"); ?>

<?php elseif ( is_page() ) : ?>

    <h2>Sidebar Page</h2>
    <?php dynamic_sidebar("Sidebar-Page"); ?>

<?php else : ?>

    <h2>Sidebar Single</h2>
    <?php dynamic_sidebar("Sidebar-Single"); ?>

<?php endif;?>
</aside><!-- /#sidebar -->  
