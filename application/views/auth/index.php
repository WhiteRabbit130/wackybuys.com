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
            <li class="active"><a href="<?php echo site_url();?>"><i class="fa fa-home text-red"></i> <span>Home</span></a></li>
            <li><a href="<?php echo site_url('auth/users');?>"><i class="fa fa-users text-red"></i> <span>Users</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="loansBox" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Client ID</th>
                              <th>Client</th>
                              <th>Collector ID</th>
                              <th>Amount</th>
                              <th>Interest</th>
                              <th>Per Day</th>
                              <th>Date</th>
                              <th>Maturity</th>
                              <th>Total</th>
                              <th>Balance</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php for($i = 1; $i <= 25; $i++):?>
                                <tr>
                                  <td><?php echo $i ?></td>
                                  <td><?php echo "Sample $i" ?></td>
                                  <td><?php echo "Data $i" ?></td>
                                  <td><?php echo number_format($i * (mt_rand(1,999999)),2) ?></td>
                                  <td>X</td>
                                  <td>X</td>
                                  <td>X</td>
                                  <td>X</td>
                                  <td>X</td>
                                  <td>X</td>
                                  <td>X</td>
                                </tr>
                            <?php endfor;?>

                          </tbody>
                    </table>


                    <script type="text/javascript">
                      $(function () {
                        $('#loansBox').dataTable({
                          "bPaginate": true,
                          "bLengthChange": false,
                          "bFilter": false,
                          "bSort": true,
                          "bInfo": true,
                          "bAutoWidth": false
                        });
                      });
                    </script>




                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2024 <a href="http://almsaeedstudio.com">Mike Dash</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

</body>
