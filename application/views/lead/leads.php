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
						<h1 class="title">Leads</h1>                            
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
								<strong>All Leads</strong>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-12">
				<section class="box ">
					<header class="panel_header">
						<h2 class="title float-left">All Leads</h2>
						<div class="actions panel_actions float-right">
							<a href="<?php echo site_url('lead/add');?>" class="btn btn-primary">Add</a>
							<i class="box_toggle fa fa-chevron-down"></i>
							<i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
							<i class="box_close fa fa-times"></i>
						</div>
					</header>
					<div class="content-body">    
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="lead_table" class="display table table-hover table-condensed" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Birthday</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Brief</th>                    
											<th>Address</th>                    
											<th>Edit</th>                    
										</tr>
									</thead>
									<tbody>
										<?php foreach ($leads as $lead): ?>
											<tr>
												<td><?php echo $lead['id']; ?></td>
												<td><?php echo $lead['name']; ?></td>
												<td><?php echo $lead['birthday']; ?></td>
												<td><?php echo $lead['gender']; ?></td>
												<td><?php echo $lead['email']; ?></td>
												<td><?php echo $lead['phone']; ?></td>
												<td><?php echo $lead['brief']; ?></td>
												<td><?php echo $lead['address']; ?></td>
												<td>
													<a href="<?php echo site_url('lead/edit/'.$lead['id']); ?>" class="btn btn-warning">Edit</a>
													<a href="<?php echo site_url('lead/delete/'.$lead['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this lead?');">Delete</a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
			</div>






		</section>
	</section>
	<!-- END CONTENT -->

	<!-- CHATAPI - START -->
	<?php $this->load->view('chatapi'); ?>
	<!--  CHATAPI - END -->  
</div>
<!-- END CONTAINER -->
<script>
	$(document).ready(function() {
		var tableexcsv = $("#lead_table").dataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	});
</script>

