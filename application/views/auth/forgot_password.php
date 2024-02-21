<body class=" ">
	<div class="col-xl-12">
		<section class="box nobox">
			<div class="content-body">    
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="col-lg-4 offset-lg-4">
							<p class="lockscreen_info">Change Password</p>
							<div class="lockscreen-name text-danger" id="infoMessage"><?php echo $message;?></div>

							<?php echo form_open('auth/forgot_password');?>
								<div class="input-group">
									<?php echo form_input($email);?>
									<!-- <input type="submit" value=""/> -->
								</div>
							<?php echo form_close();?>
							<div class="clearfix"></div>
							<h1 class="lockscreen_tagline">Enter your email address to retrieve your account</h1>
							<div class='text-center'>
								<a href="<?php echo site_url('auth/login');?>">Or sign in as a different user</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

