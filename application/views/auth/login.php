<link href="<?php echo base_url('assets/dist/css/login-style.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/dist/css/login.css');?>" rel="stylesheet" type="text/css" />
<body>
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
						<div class="g-recaptcha" data-sitekey="6LeNblspAAAAAAjE_Itbl4DkXIibaeuaWW7QMhvT"></div>

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
<!-- <div class="form-body">
	<div class="website-logo">
			<a href="index.html">
					<div class="logo">
							<img class="logo-size" src="" alt="">
					</div>
			</a>
	</div>
	<div class="row">
			<div class="img-holder">
					<div class="bg"></div>
					<div class="info-holder">
					</div>
			</div>
			<div class="form-holder">
					<div class="form-content">
							<div class="form-items">
									<h3>Wackybuys</h3>
									<p>Sign in to start your session</p>
									<div class="page-links">
											<a href="login3.html" class="active">Login</a><a href="register3.html">Register</a>
									</div>
									<div class="alert alert-warning alert-dismissible fade show with-icon" role="alert">
											Please fill the following form with your information
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
									</div>
									<form>
											<input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
											<input class="form-control" type="password" name="password" placeholder="Password" required>
											<div class="">    
												<div class="checkbox icheck">
													<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  <?php echo lang('login_remember_label', 'remember');?>
												</div>                        
											</div>
											<div class="form-button">
													<button id="submit" type="submit" class="ibtn">Login</button> <a href="forget3.html">Forget password?</a>
											</div>
									</form>
									<div class="other-links">
											<span>Or login with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
									</div>
							</div>
					</div>
			</div>
	</div>
</div>    -->
<!-- load recaptcha.js -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
