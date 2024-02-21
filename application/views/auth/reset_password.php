<body class=" ">
	<div class="col-xl-12">
		<section class="box nobox">
			<div class="content-body">    
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="col-lg-4 offset-lg-4">
							<div class="login-box-body">
								<!-- <p class="login-box-msg text-center"><?php echo lang('reset_password_heading');?></p> -->
								<div id="infoMessage" class="text-danger"><?php echo $message;?></div>
								<?php echo form_open('auth/reset_password/' . $code);?>
									<div class="form-group has-feedback">
										<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
										<?php echo form_input($new_password);?>
										<span class="glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback">
										<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
										<?php echo form_input($new_password_confirm);?>
										<span class="glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
									<?php echo form_input($user_id);?>
									<?php echo form_hidden($csrf); ?>
									<?php $data = array('type'  =>'submit', 'class' =>'btn btn-primary btn-block btn-flat', 'content'=>'Reset Password')?>
									<?php echo form_button($data);?>
								<?php echo form_close();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
