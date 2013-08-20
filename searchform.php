<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row collapse">
    	<div class="small-12 columns">
    		<label for="s" class="assistive-text hide"><?php _e( 'Search', 'hdn' ); ?></label>
    		<input type="search" class="search-query expand" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'hdn' ); ?>" />
    	</div>
    	<div class="small-4 columns hide">
    		<button type="submit" class="button prefix" name="submit" id="searchsubmit"><?php _e( 'Go', 'hdn' ); ?></button>
    	</div>
    </div>	
</form>