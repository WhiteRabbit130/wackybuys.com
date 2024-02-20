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
						<h1 class="title"><?php echo isset($id) && !empty($id) ? "EDIT LEAD" : "ADD A LEAD"; ?></h1>                            
					</div>
					<div class="float-right d-none">
						<ol class="breadcrumb">
							<li>
								<a href="index.html"><i class="fa fa-home"></i>Home</a>
							</li>
							<li>
								<a href="crm-leads.html">Leads</a>
							</li>
							<li class="active">
								<strong>Add Lead</strong>
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
							<?php echo isset($id) && !empty($id) ? form_open('lead/update/'.$id) : form_open('lead/store') ?>
								<div class="col-xl-8 col-lg-8 col-md-9 col-12">
									<div class="form-group">
										<label class="form-label" for="field-1">Name</label>
										<span class="desc"></span>
										<div class="controls">
											<input type="text" value="<?php echo isset($name) && !empty($name) ? $name : ""; ?>" class="form-control" name="name" id="name" required>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="field-5">Date of Birth</label>
										<span class="desc">e.g. "04/03/2015"</span>
										<div class="controls">
											<input type="text" value="<?php echo isset($birthday) && !empty($birthday) ? $birthday : ""; ?>" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="field-5">Gender</label>
										<span class="desc"></span>
										<select class="form-control">
											<option></option>
											<option >Male</option>
											<option >Female</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label" for="field-1">Profile Image</label>
										<span class="desc"></span>
										<div class="controls">
											<input type="file" class="form-control" id="field-5">
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="field-6">Brief</label>
										<span class="desc">e.g. "Enter any size of text description here"</span>
										<div class="controls">
											<textarea class="form-control autogrow" cols="5" id="field-6" name="brief" ><?php echo isset($brief) && !empty($brief) ? $brief : ""; ?></textarea>
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
									<div class="text-left">
										<button type="submit"  class="btn btn-primary">Save</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</section>
			</div>
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
											<input type="text" value="" class="form-control" id="field-3">
										</div>
									</div>

									<div class="form-group">
										<label class="form-label" for="field-2">Phone</label>
										<span class="desc">e.g. "(534) 253-5353"</span>
										<div class="controls">
											<input type="text" value="" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
										</div>
									</div>

									<div class="form-group">
										<label class="form-label" for="field-2">FAX</label>
										<span class="desc">e.g. "(534) 253-5353"</span>
										<div class="controls">
											<input type="text" value="" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
										</div>
									</div>

									<div class="form-group">
										<label class="form-label" for="field-6">Address</label>
										<span class="desc"></span>
										<div class="controls">
											<textarea class="form-control autogrow" cols="5" id="field-6"></textarea>
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
											<input type="text" class="form-control"  value="" id="field-31">
										</div>
									</div>

									<div class="form-group">
										<label class="form-label" for="field-1">Twitter URL</label>
										<span class="desc"></span>
										<div class="controls">
											<input type="text" class="form-control"  value="" id="field-41">
										</div>
									</div>

									<div class="form-group">
										<label class="form-label" for="field-1">Google Plus URL</label>
										<span class="desc"></span>
										<div class="controls">
											<input type="text" class="form-control"  value="" id="field-51">
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

	<!-- CHATAPI - START -->
	<?php $this->load->view('chatapi'); ?>
	<!--  CHATAPI - END -->  
</div>
<!-- END CONTAINER -->

