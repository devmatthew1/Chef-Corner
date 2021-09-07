<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  
  
  <!-- Bootstrap <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>"> 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
 


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body >
     <nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
        <div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
            <div class="navbar-brand ">
                <a class="logo" href="#">ChefCorner</a>
            </div>

            <div>
                <ul class="navbar-nav ml-auto topnav">
                   
                </ul>
            </div>
        </div>
    </nav>
<div class="login-box">
  <div class="login-logo">
    <a href="" ><b class="p-3 mb-3 logo-sample">Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Make the best meals</p>

    <?php echo validation_errors(); ?>  

    <?php if(!empty($errors)) {
      echo $errors;
    } ?>

    <form action="<?php echo base_url('auth/login') ?>" method="post">
      <div class="form-group has-feedback">
        <label for="Email" style=" font-weight: 400;">Email :</label>
        <input type="email" class="form-control" name="email" id="email"  autocomplete="off" style="border-radius: .3rem;">
        
      </div>
      <div class="form-group has-feedback">
        <label for="Password" style=" font-weight: 400;">Password :</label>
        <input type="password" class="form-control" name="password" id="password"  autocomplete="off" style="border-radius: .3rem;">
        <button type="submit" class="btn custom-btn my-2">Sign In</button>
      </div>
      
          
     

    </form>

  </div>
  <!-- /.login-box-body -->

</div>
<!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
