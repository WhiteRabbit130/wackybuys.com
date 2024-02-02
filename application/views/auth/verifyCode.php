<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo site_url();?>"><b>Wackybuys</b></a>
	</div>

	<div class="login-box-body">
		<p class="login-box-msg">The verify code will be sent to your email: <b><?=$email?></b>.<br />
			Enter this verify code and click the verify button.
		</p>
		<?php echo form_open('auth/verifyCode');?>
		<div class="form-group has-feedback">
			<label for="verifyCode">Verify Code</label>
			<input type="text" class="form-control" name="verifyCode">
			<input type="hidden" name="email" value="<?=$email?>" >
			</div>
			
			<?php $data = array('type'  =>'submit', 'class' =>'btn btn-primary btn-block btn-flat', 'content' => 'Verify')?>
			<?php echo form_button($data);?>
		<?php echo form_close();?>
	</div>
</div>
