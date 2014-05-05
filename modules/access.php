<?php if(function_exists('is_bbpress') && is_bbpress()) :?> 
<header class="share-info">
	<div class="container">		
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="login clearfix">
			    	<?php dynamic_sidebar("Sidebar-Forums"); ?> <?php if( !is_user_logged_in() ) : ?><span class="register"><?php wp_register('', ''); ?></span><?php endif ;?>
			    </div>
			</div>
		</div>
		
		<?php /*
		<div class="well clearfix">
			<div class="col-md-8">
			
			<?php if(is_page('submit-activities')) :?>
			
				<h3>Submit Your Activities/Events!</h3>
				Houston Deaf Network does not list every post that is published. We're always looking for good content to share with readers. For more information, check <a href="#">HDN informative Guidelines</a>. By registering with us, you'll have the options to share information, activities, and be able to update/modify your own post. 
				<hr/>
				<p>You are NOT required to log in to submit form, BUT loging in or registering will allow you to edit/update your information. Your submission will be notified and we will review your information as soon as possible.</p>

			<?php elseif( is_page("submit-news") ): ?>	
				<h3>Submit Your Articles or Directory List</h3>
				Houston Deaf Network does not list every post that is published. We're always looking for good content to share with readers. For more information, check <a href="#">HDN informative Guidelines</a>. By registering with us, you'll have the options to share information, activities, and be able to update/modify your own post. 
				<hr/>
				<p>You are NOT required to log in to submit form, BUT loging in or registering will allow you to edit/update your information. Your submission will be notified and we will review your information as soon as possible.</p>

			<?php elseif( is_bbpress() ): ?>
				<h3>Join Forums!</h3>
				Got something to say or want to ask certain information? Register or simply ask away.

			<?php endif; ?>
			</div>
			<div class="col-md-4">
				<h3>Login</h3>
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

				<?php /* wp_loginout();  ?>
			</div>
		</div>
		<p class="alert alert-warning"><strong>Please Note:</strong> This form is still a working progress. If you're having trouble filling out the information, please let us know using the <a href="<?php echo get_permalink(20); ?>">contact form</a>. Thanks.</p>
		<?php */ ?>
	</div><!-- /.container -->
</header>
<?php endif; ?>