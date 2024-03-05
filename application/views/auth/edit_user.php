<body class="skin-red sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url();?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>designs</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Creative</b>designs</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>

              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo ucwords($SessionUser->last_name.' '.$SessionUser->first_name);?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo ucwords($SessionUser->last_name.' '.$SessionUser->first_name);?> - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('auth/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>


      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ucwords($SessionUser->last_name.' '.$SessionUser->first_name);?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo site_url('auth/users');?>"><i class="fa fa-users text-red"></i> <span>Users</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->

        <section class="content">
          <div class="row">

            <!--user table start-->
            <div class="col-md-8">              
              <div class="box">

                <div class="box-header">
                  <h3 class="box-title"><?php echo lang('index_subheading');?></h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                      <table id="SearchTable" class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th><?php echo lang('index_fname_th');?></th>
                            <th><?php echo lang('index_lname_th');?></th>
                            <th><?php echo lang('index_email_th');?></th>

                            <?php if($this->ion_auth->is_admin()){?>
                            <th><?php echo lang('index_groups_th');?></th>
                            <?php }?>

                            <th><?php echo lang('index_status_th');?></th>

                            <?php if($this->ion_auth->is_admin()){?>
                            <th><?php echo lang('index_action_th');?></th>
                            <?php }?>

                          </tr>
                        </thead>

                        <tbody>
													<?php foreach ($users as $user):?>
														<tr>
															<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
															<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
															<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
															
															<?php if($this->ion_auth->is_admin()){?>
															<td>
																<?php foreach ($user->groups as $group):?>
																	<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
																				<?php endforeach?>
															</td>
															<?php }?>

															<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),'class="btn btn-xs btn-success"') : anchor("auth/activate/". $user->id, lang('index_inactive_link'),'class="btn btn-xs btn-danger"');?></td>
															
															<?php if($this->ion_auth->is_admin()){?>
															<td><?php echo anchor("auth/edit_user/".$user->id, '<i class="glyphicon glyphicon-pencil"></i>'.' Edit','class="btn btn-xs btn-warning"') ;?></td>
															<?php }?>
														</tr>
													<?php endforeach;?>
                        </tbody>
                      </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <!--user table end-->
            <div class="col-md-4">              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?php echo lang('edit_user_heading');?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p><?php echo lang('create_user_subheading');?></p>
                  <div id="infoMessage" class="text-danger"><?php echo $message;?></div>

                  <?php echo form_open(uri_string());?>

                  <div class='form-group'>
                  <?php echo form_input($first_name);?>
                  </div>
                  
                  <div class='form-group'>  
                  <?php echo form_input($last_name);?>
                  </div>

                  <div class='form-group'>
                  <?php echo form_input($company);?>
                  </div>

                  <div class='form-group'>
                  <?php echo form_input($phone);?>
                  </div>

                  <div class='form-group'>  
                  <?php echo form_input($password);?>
                  </div>

                  <div class='form-group'>
                  <?php echo form_input($password_confirm);?>
                  </div>

                  <div class="form-group">

                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                  <?php foreach ($groups as $group):?>
                    <label class="checkbox">
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= 'checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                    </label>
                  <?php endforeach?>

                  </div>

                  <div class='row'>

                  <div class="col-xs-7">
        
                  </div>  
                    
                  <div class="col-xs-5">
                  <?php $data = array('type'  =>'submit',
                                      'class' =>'btn btn-primary btn-block btn-flat',
                                    'content' => "<i class='glyphicon glyphicon-pencil'></i> ".lang('edit_user_submit_btn'))?>
                   
                  <?php echo form_button($data);?>
                  </div><!-- /.col -->

                  </div>    

                  <?php echo form_hidden('id', $editUser->id);?>
                  <?php echo form_hidden($csrf); ?>

                  <?php echo form_close();?>
                    
                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </div><!-- /.col-md-4 -->

            
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2024 <a href="<?php echo site_url();?>">Mike Dash</a>.</strong> All rights reserved.
      </footer>
 
    </div><!-- ./wrapper -->
  </body>            
