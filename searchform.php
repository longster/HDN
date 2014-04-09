<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<span class="glyphicon glyphicon-search hidden-xs"></span>
		<input type="search" class="form-control" name="s" id="s"  placeholder="<?php esc_attr_e( 'Search', 'hdn' ); ?>">
		<button type="submit" class="btn btn-default hidden" name="submit" id="searchsubmit"><?php _e( 'Submit', 'hdn' ); ?></button>
	</div>
</form>