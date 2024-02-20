<body class=" login_page">
	<div class="register-wrapper">
		<div id="register" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
			<h1><a href="<?php echo site_url();?>" title="Login Page" tabindex="-1">Ultra Admin</a></h1>
			<div id="infoMessage" class="text-danger"><?php echo $message;?></div>
			<?php echo form_open("auth/create_user");?>
				<label><?php echo lang('create_user_fname_label', 'first_name');?> <br /><?php echo form_input($first_name);?></label>
				<label><?php echo lang('create_user_lname_label', 'last_name');?> <br /><?php echo form_input($last_name);?></label>
				<label><?php echo lang('create_user_company_label', 'company');?> <br /><?php echo form_input($company);?></label>
				<label><?php echo lang('create_user_email_label', 'email');?> <br /><?php echo form_input($email);?></label>
				<label><?php echo lang('create_user_phone_label', 'phone');?> <br /><?php echo form_input($phone);?></label>
				<label><?php echo lang('create_user_password_label', 'password');?> <br /><?php echo form_input($password);?></label>
				<label><?php echo lang('create_user_password_confirm_label', 'password');?> <br /><?php echo form_input($password_confirm);?></label>
			
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
				</p>
			<?php echo form_close();?>

			<div class="space-between">
			
					<p class="login-icheck icheck-label float-left" for="showpassword"><?php echo form_checkbox('showpassword', '1', FALSE, 'id="showpassword"');?> Show Password</p>
				
				<p><a class="float-right" href="<?php echo site_url('auth/login');?>" title="Sign Up">Sign In</a></p>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-12 text-center register-social">

				<a href="#" class="btn btn-primary btn-lg facebook"><i class="fa fa-facebook icon-sm"></i></a>
				<a href="#" class="btn btn-primary btn-lg twitter"><i class="fa fa-twitter icon-sm"></i></a>
				<a href="#" class="btn btn-primary btn-lg google-plus"><i class="fa fa-google-plus icon-sm"></i></a>
				<a href="#" class="btn btn-primary btn-lg dribbble"><i class="fa fa-dribbble icon-sm"></i></a>

			</div>

		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#showpassword').on('change', function() {
				var pass1 = $('#password');
				var pass2 = $('#password_confirm');
				if($(this).is(':checked')) {
					pass1.attr('type', 'text');
					pass2.attr('type', 'text');
				}else{
					pass1.attr('type', 'password');
					pass2.attr('type', 'password');
				}
			});
		});
	</script>


