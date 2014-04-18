<?php if(is_page('submit-activities') || is_page("submit-news") || is_bbpress()) :?>
<header class="share-info">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<h3>Submissions are FREE! </h3>
					Register with us and have the options to share information, activities, and/or participate forums. If you don't want to register, take a few moments to fill out the form and submit to us. We will review your information as soon as possible.
					<?php
						if ( ! is_user_logged_in() ) { // Display WordPress login form:
						    $args = array(
						        'redirect' => admin_url(), 
						        'form_id' => 'loginform-custom',
						        'label_username' => __( 'Username' ),
						        'label_password' => __( 'Password' ),
						        'label_remember' => __( 'Remember Me' ),
						        'label_log_in' => __( 'Log In' ),
						        'remember' => true
						    );
						    wp_login_form( $args );
						} else { // If logged in:
						    wp_loginout( home_url() ); // Display "Log Out" link.
						    echo " | ";
						    wp_register('', ''); // Display "Site Admin" link.
						}
					?>
				</div>
			</div>
		</div>
	</div>
</header>
<?php endif; ?>

<?php if(is_home() || is_category() || is_page('events') || is_page('directory')) : ?>
<header class="share-info">
	<div class="container">		
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<a class="btn btn-primary btn-block" href="http://localhost/share-your-information-with-us/submit-news/">Submit News, Jobs, or Business</a>
			</div>
			<div class="col-md-5">
				<a class="btn btn-primary btn-block" href="http://localhost/share-your-information-with-us/submit-activities/">Submit Activities or Events</a>
			</div>
		</div>
	</div>
</header>
<?php endif; ?>

			