<link href="<?php echo base_url('assets/dist/css/login-style.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/dist/css/login.css');?>" rel="stylesheet" type="text/css" />
<body class=" login_page">
        <div class="login-wrapper">
            <div id="login" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
                <h1><a href="#" title="Login Page" tabindex="-1">Wackybuys</a></h1>
                <form name="loginform" id="loginform" action="index.html" method="post">
					<div>
						 <p>
                        <label for="user_login">Email Address<br />
                            <input type="text" name="log" id="user_login" class="input" value="" size="20" placeholder="Email Address"/></label>
                    </p>
                    <p>
                        <label for="user_pass">Password<br />
                            <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" placeholder="Password"/></label>
                    </p>
					<p class="forgetmenot float-left">
						<label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me</label>
					</p>
					<p class="forgetmenot float-right">
						<label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Show Password</label>
					</p>
					</div>
                   
					<div class="g-recaptcha" data-sitekey="6LeNblspAAAAAAjE_Itbl4DkXIibaeuaWW7QMhvT"></div>
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
                </form>
                <p id="nav">
                    <a class="float-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="float-right" href="ui-register.html" title="Sign Up">Sign Up</a>
                </p>
            </div>
        </div>
<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo site_url();?>"><b>Wackybuys</b></a>
		</div><!-- /.login-logo -->

			<div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<div id="infoMessage" class="text-danger"><?php echo $message;?></div>

				<?php echo form_open("auth/login");?>

					<div class="form-group has-feedback">
						<?php echo form_input($identity);?>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<?php echo form_input($password);?>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<input type="checkbox" id="showPassword">&nbsp;&nbsp;
					<label>Show Password</label>
					<!-- <div class="g-recaptcha" data-sitekey="6LeNblspAAAAAAjE_Itbl4DkXIibaeuaWW7QMhvT"></div> -->

					<div class="row" style="padding-left: 20px; padding-top: 10px;">

						<div class="col-xs-8" style="padding: left 10px;">    
							<div class="checkbox icheck">
								<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  <?php echo lang('login_remember_label', 'remember');?>
							</div>                        
						</div><!-- /.col -->

						<div class="col-xs-4">
							<?php $data = array('type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat', 'content' => "<i class='glyphicon glyphicon-log-in'></i> ".lang('login_submit_btn'))?>
								
							<?php echo form_button($data);?>
						</div><!-- /.col -->

					</div><!-- /.row -->

				<?php echo form_close();?>

				<a href="forgot_password"><?php echo lang('login_forgot_password');?></a><br>
				<a href="<?php echo site_url('auth/create_user');?>" class="text-center">Register a new membership</a>

			</div><!-- /.login-box-body -->

</div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="<?php echo base_url('assets/dist/js/login.js');?>" type="text/javascript"></script> 
<script>
$(document).ready(function() {
  $('#showPassword').on('change', function() {
    var pass = $('#password');
    if($(this).is(':checked')) {
      pass.attr('type', 'text');
    }else{
      pass.attr('type', 'password');
    }
  });
});
</script>
