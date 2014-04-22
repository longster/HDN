<?php if(is_page('submit-activities') || is_page("submit-news") || is_bbpress()) :?>
<header class="share-info">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<div class="row">
					<?php if(is_page('submit-activities')) :?>
						<div class="col-md-8">
							<h3>Submit Your Activities/Events!</h3>
							Houston Deaf Network does not list every post that is published. We're always looking for good content to share with readers. For more information, check <a href="#">HDN informative Guidelines</a>. By registering with us, you'll have the options to share information, activities, and be able to update/modify your own post. 
							<hr/>
							You are NOT required to, take a few moments to fill out the form and submit to us. We will review your information as soon as possible.
						</div>
						<div class="col-md-4">
							<h3>Login</h3>
							<p>You are NOT required to log in to submit form, BUT loging in or registering will allow you to edit/update your information. Your submission will be notified and we will review your information as soon as possible.</p>
							<?php
								if ( ! is_user_logged_in() ) { // Display WordPress login form: http://codex.wordpress.org/Customizing_the_Login_Form
								    $args = array(
								        'redirect' => site_url( '/share-your-articles-with-us/submit-activities/ ' ), 
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
							<?php  if ( !is_user_logged_in() ): ?>
							<hr/>
							<?php wp_register('', ''); ?> | <a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Forgot Password">Forgot Password</a>
							<?endif;?>

							<?php /* wp_loginout(); */ ?>
						</div>
					<?php elseif( is_page("submit-news") ): ?>
						<div class="col-md-8">
							<h3>Submit Your Articles or Directory List</h3>
							Houston Deaf Network does not list every post that is published. We're always looking for good content to share with readers. For more information, check <a href="#">HDN informative Guidelines</a>. By registering with us, you'll have the options to share information, activities, and be able to update/modify your own post. 
							<hr/>
							
						</div>
						<div class="col-md-4">
							<h3>Login</h3>
							<?php
								if ( ! is_user_logged_in() ) { // Display WordPress login form: http://codex.wordpress.org/Customizing_the_Login_Form
								    $args = array(
								        'redirect' => site_url( '/share-your-articles-with-us/submit-news/ ' ), 
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
							<?php  if ( !is_user_logged_in() ): ?>
							<hr/>
							<?php wp_register('', ''); ?> | <a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Forgot Password">Forgot Password</a>
							<?endif;?>
						</div>

					<?php elseif( is_bbpress() ): ?>
						<div class="col-md-8">
							<h3>Join Forums!</h3>
							Got something to say or want to ask certain information? Register or simply ask away.
						</div>
						<div class="col-md-4">
							<h3>Login</h3>
							<?php
								if ( ! is_user_logged_in() ) { // Display WordPress login form: http://codex.wordpress.org/Customizing_the_Login_Form
								    $args = array(
								        'redirect' => site_url( '/forums/ ' ), 
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
							<?php  if ( !is_user_logged_in() ): ?>
							<hr/>
							<?php wp_register('', ''); ?> | <a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Forgot Password">Forgot Password</a>
							<?endif;?>
						</div>
					
					<?php endif; ?>
					</div>
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

			