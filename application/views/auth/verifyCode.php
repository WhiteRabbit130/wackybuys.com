<body class=" ">
	<div class="col-xl-12">
		<section class="box nobox">
			<div class="content-body">    
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<a href="<?php echo site_url();?>"><h1 class="lockscreen_icon"><i class='fa fa-paper-plane'></i></h1></a>
						<h1 class="lockscreen_info">Dear User</h1>

						<div class="col-lg-4 col-md-6 col-8 offset-lg-4 offset-md-3 col-offset-2 lockscreen_search_area">
							<!-- <form action="<?php echo site_url('auth/verifyCode');?>" method="post" class="lockscreen_search"> -->
							<?php echo form_open('auth/verifyCode');?>
								<div class="input-group transparent">
									<!-- <span class="input-group-addon">
										<i class="fa fa-sign-in icon-primary"></i>
									</span> -->
									<input type="text" class="form-control" name="verifyCode" placeholder="Type & Enter">
									<input type="hidden" name="email" value="<?=$email?>" >
								</div>
								<!-- <input type='submit' class="btn btn-primary btn-block btn-flat" value="Verify" content="Veryfi"> -->
							<!-- </form> -->
							<?php echo form_close();?>
						</div>
						<div class="clearfix"></div>
						<h1 class="lockscreen_tagline">The verify code will be sent to your email: <b><?=$email?></b>.<br />Please enter your verify code for access</h1>
					</div>
				</div>
			</div>
		</section>
	</div>

