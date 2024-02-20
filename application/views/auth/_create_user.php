<body class=" login_page">


        <div class="register-wrapper">
            <div id="register" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
                <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

                <form name="loginform" id="loginform" action="index.html" method="post">
                    <p>
                        <label for="user_login">Full Name<br />
                            <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_login">Email<br />
                            <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_login">Username<br />
                            <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_pass">Password<br />
                            <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_pass">Confirm Password<br />
                            <input type="password" name="pwd1" id="user_pass1" class="input" value="" size="20" /></label>
                    </p>
                    <p class="forgetmenot">
                        <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> I agree to terms to conditions</label>
                    </p>



                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
                    </p>
                </form>

                <p id="nav">
                    <a class="float-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="float-right" href="ui-login.html" title="Sign Up">Sign In</a>
                </p>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center register-social">

                    <a href="#" class="btn btn-primary btn-lg facebook"><i class="fa fa-facebook icon-sm"></i></a>
                    <a href="#" class="btn btn-primary btn-lg twitter"><i class="fa fa-twitter icon-sm"></i></a>
                    <a href="#" class="btn btn-primary btn-lg google-plus"><i class="fa fa-google-plus icon-sm"></i></a>
                    <a href="#" class="btn btn-primary btn-lg dribbble"><i class="fa fa-dribbble icon-sm"></i></a>

                </div>

            </div>
        </div>
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
				<div class="" >
					<div class="col-xs-6">
						<input type="checkbox" id="showPassword">&nbsp;&nbsp;
						<span>Show Password</span>
					</div>
					<div class="col-xs-6"  style="text-align: right"><a href="<?php echo site_url();?>">Go to login page</a></div>
					
				</div><br /><br />				
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


