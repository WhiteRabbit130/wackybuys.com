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

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo ucwords($user->last_name.' '.$user->first_name);?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo ucwords($user->last_name.' '.$user->first_name);?> - Web Developer
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
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo site_url();?>"><i class="fa fa-home text-red"></i> <span>Home</span></a></li>
            <li class="active"><a href="<?php echo site_url('auth/users');?>"><i class="fa fa-users text-red"></i> <span>Users</span></a></li>
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
            <div class="col-md-9">
             	
             	<div class="box">

                <div class="box-header">
                  <h3 class="box-title"><?php echo lang('index_subheading');?></h3>
                   <?php if($this->ion_auth->is_admin() || $this->ion_auth->in_group(4)){?>
                            <span class="pull-right btn-group">
                              <?php 
                                $attr = array(
                                      'class' => 'btn btn-xs btn-primary',
                                      'data-toggle' => 'modal',
                                      'data-target' => '#myModal'
                                      );
                                echo anchor('#','<i class="fa fa-user-md fa-fw"></i>'.lang('users_create_department'), $attr);
                              ?>
                            </span>
                    <?php }?>
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

                  										<td><?php 

                                      $DeactivateAttribute = array(
                                      'class' => 'btn btn-xs btn-success',
                                      'data-toggle' => 'modal',
                                      'data-target' => '#modelDeactivate'.$user->id
                                      );  

                                      echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),$DeactivateAttribute) : anchor("auth/activate/". $user->id, lang('index_inactive_link'),'class="btn btn-xs btn-danger"');?></td>
                  										
                                      <?php if($this->ion_auth->is_admin()){?>
                                      <td><?php echo anchor("auth/edit_user/".$user->id, '<i class="glyphicon glyphicon-pencil"></i>'.' Edit','class="btn btn-xs btn-warning"') ;?></td>
          									          <?php }?>
                                   </tr>

                                <!--modal deactivation--> 
                                <div class="modal fade" id="modelDeactivate<?php echo $user->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">

                                      </div>
                                  </div>
                                </div>
                                <!--modal end--> 

								                <?php endforeach;?>

		                    </tbody>

		                  </table>
    				    </div><!-- /.box-body -->

				      </div><!-- /.box -->

            </div><!-- /.col -->
            <!--user table end-->


            <div class="col-md-3">
              
              <div class="box">

                <div class="box-header">
                  <h3 class="box-title"><?php echo lang('create_user_heading');?></h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <p><?php echo lang('create_user_subheading');?></p>
                  <div id="infoMessage" class="text-danger"><?php echo $message;?></div>

                  <?php echo form_open("auth/users" , $usersformattributes);?>

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
                  <?php echo form_input($email);?>
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

                  <?php if ($this->ion_auth->is_admin()): ?>

                        <?php foreach ($groups as $details):?>
                            <label class="checkbox">
                            <input type="checkbox" name="groups[]" value="<?php echo $details->id;?>">
                            <?php echo ucwords(htmlspecialchars($details->name,ENT_QUOTES,'UTF-8'));?>
                            </label>
                        <?php endforeach?>

                  <?php endif ?>

                  </div>

                  <div class='row'>

                  <div class="col-xs-6">
        
                  </div>  
                    
                  <div class="col-xs-6">
                  <?php $data = array('type'  =>'submit',
                                      'class' =>'btn btn-primary btn-block btn-flat saveuser',
                                      'data-loading-text' =>'Please wait...',
                                    'content' => "<i class='glyphicon glyphicon-saved'></i> ".lang('create_user_submit_btn'))?>
                   
                  <?php echo form_button($data);?>
                  </div><!-- /.col -->

                  </div>    

                  <?php echo form_close();?>

                  <script type="text/javascript">
                        $(document).ready(function() {
                            $('#usersform')
                                .formValidation({
                                    message: 'This value is not valid',
                                    live: 'submitted',
                                    icon: {
                                        valid: 'glyphicon glyphicon-ok',
                                        invalid: 'glyphicon glyphicon-remove',
                                        validating: 'glyphicon glyphicon-refresh'
                                    },
                                    fields: {
                                        first_name: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The first name is required and can\'t be empty'
                                                }
                                            }
                                        },
                                        last_name: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The last name is required and can\'t be empty'
                                                }
                                            }
                                        },
                                        company: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The address is required and can\'t be empty'
                                                }
                                            }
                                        },email: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The email address is required and can\'t be empty'
                                                },
                                                emailAddress: {
                                                    message: 'The input is not a valid email address'
                                                },
                                                remote: {
                                                    type: 'POST',
                                                    url: "<?php echo site_url('auth/remote');?>",
                                                    message: 'The email is not available',
                                                    delay: 2000
                                                }
                                            }
                                        },phone: {
                                              validators: {
                                                  notEmpty: {
                                                    message: 'The contact no is required and can\'t be empty'
                                                  },
                                                  digits: {
                                                      message: 'The value can contain only digits'
                                                  }
                                              }
                                        },password: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The password is required and can\'t be empty'
                                                },
                                                different: {
                                                    field: 'first_name',
                                                    message: 'The password can\'t be the same as username'
                                                }
                                            }
                                        },
                                        password_confirm: {
                                            validators: {
                                                notEmpty: {
                                                    message: 'The confirm password is required and can\'t be empty'
                                                },
                                                identical: {
                                                    field: 'password',
                                                    message: 'The password and its confirm are not the same'
                                                }
                                            }
                                        },'groups[]': {
                                              validators: {
                                                  choice: {
                                                      min: 1,
                                                      max: 3,
                                                      message: 'Please choose %s - %s department'
                                                  }
                                              }
                                        }
                                    }
                                })
                                .on('success.form.fv', function(e) {
                                    // Prevent submit form
                                    e.preventDefault();

                                                    var form = document.usersformdata;
                                                    var dataString = $(form).serialize();
                                                    var url = "<?php echo site_url('auth/users'); ?>"
                                                    var $btn = $('.saveuser');
                                                    $.ajax({
                                                        type: "POST",
                                                        url : url,
                                                        dataType: 'html',
                                                        data: dataString,
                                                        success:function(){

                                                                $btn.button('loading');  
                                                                  
                                                                setTimeout(function () {

                                                                    $btn.button('reset');  

                                                                    var $form   = $(e.target),
                                                                    validator   = $form.data('formValidation');

                                                                    $form
                                                                    .formValidation('disableSubmitButtons', false)  // Enable the submit buttons
                                                                    .formValidation('resetForm', true); 

                                                                    $('.alert').fadeOut(); 
                    
                                                                }, 1000)

                                                                var $form     = $(e.target),
                                                                validator = $form.data('formValidation');
                                                                $form.find('.alert').html(validator.getFieldElements('group_name').val() + ' was successfully created').show();

                                                                $('#myModal').on('hidden.bs.modal', function (e) {
                                                                        window.location = "<?php echo site_url('auth/users');?>"
                                                                })

                                                                                     
                                                        },
                                                        error:function (xhr, ajaxOptions, thrownError){
                                                                                        
                                                        alert(thrownError);
                                                                                        
                                                        }
                                                    });
                                                    return false;

                                });
                        });
                    </script>
                    
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <?php echo form_open("auth/create_group", $groupformattributes);?>
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel"><?php echo lang('create_group_subheading');?></h4>
                </div>
                <div class="modal-body">
                            <div class="alert alert-success" style="display: none;"></div>    
                            <div class='form-group'>
                            <?php echo form_input($group_name);?>
                            </div>
                            
                            <div class='form-group'>
                            <?php echo form_input($description);?>
                            </div>

                </div>
                <div class="modal-footer">

                  <div class='row'>

                  <div class="col-xs-8">
        
                  </div>  

                  <div class="col-xs-4">

                  <?php $data = array('type'  =>'submit',
                                      'class' =>'btn btn-primary btn-block btn-flat savegroup',
                                      'data-loading-text' =>'Please wait...',
                                      'content' => "<i class='glyphicon glyphicon-saved'></i> ".lang('create_group_submit_btn'))?>
                   
                  <?php echo form_button($data);?>

                  </div>

                  </div>

                </div>
              </div>
        <?php echo form_close();?>
      </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#groupform')
                .formValidation({
                    message: 'This value is not valid',
                    live: 'submitted',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        group_name: {
                            validators: {
                                notEmpty: {
                                    message: 'The department is required and can\'t be empty'
                                },remote: {
                                    type: 'POST',
                                    url: "<?php echo site_url('auth/remote');?>",
                                    message: 'The department is not available',
                                    delay: 2000
                                }
                            }
                        },
                        description: {
                            validators: {
                                notEmpty: {
                                    message: 'The description is required and can\'t be empty'
                                }
                            }
                        }
                    }
                })
                .on('success.form.fv', function(e) {
                    // Prevent submit form
                    e.preventDefault();

                                    var form = document.groupformdata;
                                    var dataString = $(form).serialize();
                                    var url = "<?php echo site_url('auth/create_group'); ?>"
                                    var $btn = $('.savegroup');
                                    $.ajax({
                                        type: "POST",
                                        url : url,
                                        dataType: 'html',
                                        data: dataString,
                                        success:function(){

                                                $btn.button('loading');  
                                                  
                                                setTimeout(function () {

                                                    $btn.button('reset');  

                                                    var $form   = $(e.target),
                                                    validator   = $form.data('formValidation');

                                                    $form
                                                    .formValidation('disableSubmitButtons', false)  // Enable the submit buttons
                                                    .formValidation('resetForm', true); 

                                                    $('.alert').fadeOut(); 
    
                                                }, 1000)

                                                var $form     = $(e.target),
                                                validator = $form.data('formValidation');
                                                $form.find('.alert').html(validator.getFieldElements('group_name').val() + ' was successfully created').show();

                                                $('#myModal').on('hidden.bs.modal', function (e) {
                                                        window.location = "<?php echo site_url('auth/users');?>"
                                                })

                                                                     
                                        },
                                        error:function (xhr, ajaxOptions, thrownError){
                                                                        
                                        alert(thrownError);
                                                                        
                                        }
                                    });
                                    return false;

                });
        });
    </script>

    <!--modal end-->


  </body>
