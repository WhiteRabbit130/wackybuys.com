<body class="lockscreen">

    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="<?php echo site_url();?>"><b>Wackybuys</b></a>
      </div>

      <!-- User name -->
      <div class="lockscreen-name text-danger" id="infoMessage"><?php echo $message;?></div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <!-- <div class="lockscreen-image">
          <img src="<?php echo base_url('assets/dist/img/user1-128x128.jpg');?>" alt="user image"/>
        </div> -->
        <!-- /.lockscreen-image -->

        <?php echo form_open("auth/forgot_password");?>
          <div class="input-group">
            <?php echo form_input($email);?>
            <div class="input-group-btn"> 

               <?php $data = array('type'     =>'submit',
                                      'class' =>'btn',
                                  'content'   => '<i class="fa fa-arrow-right text-muted"></i>')?>
                   
               <?php echo form_button($data);?>

            </div>
          </div>
        <?php echo form_close();?>

      </div><!-- /.lockscreen-item -->

      <div class="help-block text-center">
        Enter your email address to retrieve your account
      </div>

      <div class='text-center'>
        <a href="<?php echo site_url('auth/login');?>">Or sign in as a different user</a>
      </div>
<!-- 
      <div class='lockscreen-footer text-center'>
        Copyright &copy; 2024 <b><a href="thesiblingssolutions.com" class='text-black'>Mike Dash</a></b><br>
        All rights reserved
      </div> -->

    </div><!-- /.center -->

</body>
