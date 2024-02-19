<!-- START TOPBAR -->
<?php $this->load->view('topbar'); ?>
<!-- END TOPBAR -->

<!-- START CONTAINER -->
<div class="page-container row-fluid">
	<!-- SIDEBAR - START -->
	<?php $this->load->view('sidebar'); ?>
	<!--  SIDEBAR - END -->
	<!-- START CONTENT -->
	<section id="main-content" class=" ">
		<section class="wrapper main-wrapper" style=''>

				<div class='col-xl-12 col-lg-12 col-md-12 col-12'>
					<div class="page-title">

						<div class="float-left">
							<h1 class="title">Edit Lead</h1>                            </div>

						<div class="float-right d-none">
							<ol class="breadcrumb">
								<li>
									<a href="index.html"><i class="fa fa-home"></i>Home</a>
								</li>
								<li>
									<a href="crm-leads.html">Leads</a>
								</li>
								<li class="active">
									<strong>Edit Lead</strong>
								</li>
							</ol>
						</div>

					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-xl-12 col-lg-12 col-12 col-md-12">
					<section class="box ">
						<header class="panel_header">
							<h2 class="title float-left">Basic Info</h2>
							<div class="actions panel_actions float-right">
								<i class="box_toggle fa fa-chevron-down"></i>
								<i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
								<i class="box_close fa fa-times"></i>
							</div>
						</header>
						<div class="content-body">
							<div class="row">
								<form action ="#" method="post">
									<div class="col-xl-8 col-lg-8 col-md-9 col-12">

										<div class="form-group">
											<label class="form-label" for="field-1">Name</label>
											<span class="desc"></span>
											<div class="controls">
												<input type="text" value="John Doe" class="form-control" id="field-1">
											</div>
										</div>


										<div class="form-group">
											<label class="form-label" for="field-5">Date of Birth</label>
											<span class="desc">e.g. "04/03/2015"</span>
											<div class="controls">
												<input type="text" value="05/02/1985" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-5">Gender</label>
											<span class="desc"></span>
											<select class="form-control">
												<option></option>
												<option selected='selected'>Male</option>
												<option >Female</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label" for="field-1">Profile Image</label>
											<span class="desc"></span>
											<img class="img-fluid" src="data/crm-leads/lead-1.jpg" alt="" style="max-width:120px;">
											<div class="controls">
												<input type="file" class="form-control" id="field-5">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-6">Brief</label>
											<span class="desc">e.g. "Enter any size of text description here"</span>
											<div class="controls">
												<textarea class="form-control autogrow" cols="5" id="field-6">Well known for deep knowledge and experience on the subject. His teachings and lectures are attended regularly.</textarea>
											</div>
										</div>


										<div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
											<div class="text-left">
												<button type="button" class="btn btn-primary">Save</button>
												<button type="button" class="btn">Cancel</button>
											</div>
										</div>
								</form>
							</div>


						</div>
					</section></div>


				<div class="col-xl-12 col-lg-12 col-12 col-md-12">
					<section class="box ">
						<header class="panel_header">
							<h2 class="title float-left">Lead Contact Info</h2>
							<div class="actions panel_actions float-right">
								<i class="box_toggle fa fa-chevron-down"></i>
								<i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
								<i class="box_close fa fa-times"></i>
							</div>
						</header>
						<div class="content-body">
							<div class="row">
								<form action="#" method="post">
									<div class="col-xl-8 col-lg-8 col-md-9 col-12">

										<div class="form-group">
											<label class="form-label" for="field-1">Email</label>
											<span class="desc"></span>
											<div class="controls">
												<input type="text" value="email@example.com" class="form-control" id="field-3">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-2">Phone</label>
											<span class="desc">e.g. "(534) 253-5353"</span>
											<div class="controls">
												<input type="text" value="(123) 456-7878" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-2">FAX</label>
											<span class="desc">e.g. "(534) 253-5353"</span>
											<div class="controls">
												<input type="text" value="(123) 456-7878" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-6">Address</label>
											<span class="desc"></span>
											<div class="controls">
												<textarea class="form-control autogrow" cols="5" id="field-6">A-2 Canon Appt, Near Ring Road, City Streets, NY 12435</textarea>
											</div>
										</div>
									</div>


									<div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
										<div class="text-left">
											<button type="button" class="btn btn-primary">Save</button>
											<button type="button" class="btn">Cancel</button>
										</div>
									</div>
								</form>
							</div>


						</div>
					</section></div>

				<div class="col-xl-12 col-lg-12 col-12 col-md-12">
					<section class="box ">
						<header class="panel_header">
							<h2 class="title float-left">Lead Social Media Info</h2>
							<div class="actions panel_actions float-right">
								<i class="box_toggle fa fa-chevron-down"></i>
								<i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
								<i class="box_close fa fa-times"></i>
							</div>
						</header>
						<div class="content-body">
							<div class="row">
								<form action="#" method="post">
									<div class="col-xl-8 col-lg-8 col-md-9 col-12">

										<div class="form-group">
											<label class="form-label" for="field-1">Facebook URL</label>
											<span class="desc"></span>
											<div class="controls">
												<input type="text" class="form-control"  value="http://www.facebook.com/userID" id="field-31">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-1">Twitter URL</label>
											<span class="desc"></span>
											<div class="controls">
												<input type="text" class="form-control"  value="http://www.twitter.com/userID" id="field-41">
											</div>
										</div>

										<div class="form-group">
											<label class="form-label" for="field-1">Google Plus URL</label>
											<span class="desc"></span>
											<div class="controls">
												<input type="text" class="form-control"  value="http://www.plus.google.com/userID" id="field-51">
											</div>
										</div>


									</div>
									<div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
										<div class="text-left">
											<button type="button" class="btn btn-primary">Save</button>
											<button type="button" class="btn">Cancel</button>
										</div>
									</div>

								</form>
							</div>


						</div>
					</section></div>

		</section>
	</section>
	<!-- END CONTENT -->
	<div class="page-chatapi hideit">

		<div class="search-bar">
			<input type="text" placeholder="Search" class="form-control">
		</div>

		<div class="chat-wrapper">
			<h4 class="group-head">Groups</h4>
			<ul class="group-list list-unstyled">
				<li class="group-row">
					<div class="group-status available">
						<i class="fa fa-circle"></i>
					</div>
					<div class="group-info">
						<h4><a href="#">Work</a></h4>
					</div>
				</li>
				<li class="group-row">
					<div class="group-status away">
						<i class="fa fa-circle"></i>
					</div>
					<div class="group-info">
						<h4><a href="#">Friends</a></h4>
					</div>
				</li>

			</ul>


			<h4 class="group-head">Favourites</h4>
			<ul class="contact-list">

				<li class="user-row" id='chat_user_1' data-user-id='1'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Clarine Vassar</a></h4>
						<span class="status available" data-status="available"> Available</span>
					</div>
					<div class="user-status available">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_2' data-user-id='2'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Brooks Latshaw</a></h4>
						<span class="status away" data-status="away"> Away</span>
					</div>
					<div class="user-status away">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_3' data-user-id='3'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Clementina Brodeur</a></h4>
						<span class="status busy" data-status="busy"> Busy</span>
					</div>
					<div class="user-status busy">
						<i class="fa fa-circle"></i>
					</div>
				</li>

			</ul>


			<h4 class="group-head">More Contacts</h4>
			<ul class="contact-list">

				<li class="user-row" id='chat_user_4' data-user-id='4'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Carri Busey</a></h4>
						<span class="status offline" data-status="offline"> Offline</span>
					</div>
					<div class="user-status offline">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_5' data-user-id='5'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Melissa Dock</a></h4>
						<span class="status offline" data-status="offline"> Offline</span>
					</div>
					<div class="user-status offline">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_6' data-user-id='6'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Verdell Rea</a></h4>
						<span class="status available" data-status="available"> Available</span>
					</div>
					<div class="user-status available">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_7' data-user-id='7'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Linette Lheureux</a></h4>
						<span class="status busy" data-status="busy"> Busy</span>
					</div>
					<div class="user-status busy">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_8' data-user-id='8'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Araceli Boatright</a></h4>
						<span class="status away" data-status="away"> Away</span>
					</div>
					<div class="user-status away">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_9' data-user-id='9'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Clay Peskin</a></h4>
						<span class="status busy" data-status="busy"> Busy</span>
					</div>
					<div class="user-status busy">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_10' data-user-id='10'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Loni Tindall</a></h4>
						<span class="status away" data-status="away"> Away</span>
					</div>
					<div class="user-status away">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_11' data-user-id='11'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Tanisha Kimbro</a></h4>
						<span class="status idle" data-status="idle"> Idle</span>
					</div>
					<div class="user-status idle">
						<i class="fa fa-circle"></i>
					</div>
				</li>
				<li class="user-row" id='chat_user_12' data-user-id='12'>
					<div class="user-img">
						<a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
					</div>
					<div class="user-info">
						<h4><a href="#">Jovita Tisdale</a></h4>
						<span class="status idle" data-status="idle"> Idle</span>
					</div>
					<div class="user-status idle">
						<i class="fa fa-circle"></i>
					</div>
				</li>

			</ul>
		</div>

	</div>

	<div class="chatapi-windows "></div>    
</div>
<!-- END CONTAINER -->
