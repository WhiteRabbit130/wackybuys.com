<body class=" login_page">
	<div class="login-wrapper">
		<div id="login" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
			<h1><a href="<?php echo site_url();?>" title="Login Page" tabindex="-1">Wackybuys</a></h1>
			<div id="infoMessage" class="text-danger"><?php echo $message;?></div>
			<?php echo form_open("auth/login");?>
				<p>
					<label for="identity">Email Address<br />
						<?php echo form_input($identity);?>
					</label>
				</p>
				<p>
					<label for="password">Password<br />
						<?php echo form_input($password);?>	
					</label>
				</p>
				<div class="space-between">
					<p class="login-icheck" >
						<label class="icheck-label form-label" for="showpassword"><?php echo form_checkbox('showpassword', '1', FALSE, 'id="showpassword"');?> Show Password</label>
					</p>
					<p class="login-icheck" >
						<label class="icheck-label form-label" for="remember"><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember me</label>
					</p>						
				</div>
				
				<div class="g-recaptcha" data-sitekey="6LeNblspAAAAAAjE_Itbl4DkXIibaeuaWW7QMhvT"></div>
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
				</p>
			<?php echo form_close();?>
			<div class="space-between">
				<a href="<?php echo site_url('auth/forgot_password');?>" title="Password Lost and Found">Forgot password?</a>
				<a href="<?php echo site_url('auth/create_user');?>" title="Sign Up">Sign Up</a>
			</div>
		</div>
	</div>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="<?php echo base_url('assets/dist/js/login.js');?>" type="text/javascript"></script> 
	<script>
	$(document).ready(function() {
	$('#showpassword').on('change', function() {
		var pass = $('#password');
		if($(this).is(':checked')) {
		pass.attr('type', 'text');
		}else{
		pass.attr('type', 'password');
		}
	});
	});
	</script>
