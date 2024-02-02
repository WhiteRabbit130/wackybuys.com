<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo site_url();?>"><b>Wackybuys</b></a>
	</div>

	<div class="login-box-body">
		<p class="login-box-msg"><?php echo lang('reset_password_heading');?></p>
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
			<?php $data = array('type'  =>'submit', 'class' =>'btn btn-primary btn-block btn-flat', 'content'   => lang('reset_password_submit_btn'))?>
			<?php echo form_button($data);?>
		<?php echo form_close();?>
	</div>
</div>
