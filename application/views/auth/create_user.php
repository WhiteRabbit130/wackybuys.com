<body>
	<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo site_url();?>"><b><?php echo lang('create_user_heading');?></b></a>
		</div>

		<div class="login-box-body">
			<p class="login-box-msg"><?php echo lang('create_user_subheading');?></p>
			<div id="infoMessage" class="text-danger"><?php echo $message;?></div>

			<?php echo form_open("auth/create_user");?>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_fname_label', 'first_name');?> <br />
					<?php echo form_input($first_name);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_lname_label', 'last_name');?> <br />
					<?php echo form_input($last_name);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_company_label', 'company');?> <br />
					<?php echo form_input($company);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_email_label', 'email');?> <br />
					<?php echo form_input($email);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_phone_label', 'phone');?> <br />
					<?php echo form_input($phone);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_password_label', 'password');?> <br />
					<?php echo form_input($password);?>
				</div>
				<div class="form-group has-feedback">
					<?php echo lang('create_user_password_confirm_label', 'password');?> <br />
					<?php echo form_input($password_confirm);?>
				</div>
				<input type="checkbox" id="showPassword">&nbsp;&nbsp;
					<label>Show Password</label>
				<?php $data = array('type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat', 'content' => 'Create User')?>
				<?php echo form_button($data);?>
			<?php echo form_close();?>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
			$('#showPassword').on('change', function() {
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


