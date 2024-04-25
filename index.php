<?php require_once('login_functions/functions.php') ?>
<?php require_once('pages/include/functions/branch.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aluta Brand Media</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="index.php" class="h5"><b style="color: #17A589" id="infoMessage">Aluta Brand Media
        <img src="dist/img/logo.png" width="80px" height="80px">
</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> </p>
           <?php
         md5('admin');
          if (isset($_POST['submit'])) {
             $email=$_POST['email'];
             $password=md5($_POST['password']);
             $login=login($email,$password);
              if($login=='success'){
              echo "alert('success') </script>";
              }elseif ($login=='failed') {
               echo "<script>alert('Invalid username or password') </script>";
              }else{
              echo "<script>alert('Oops! something went wrong.Please try again.') </script>";
              }
              
          }

          ?>
      <form action="index.php" method="POST">
        
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
             <p class="mb-1">
        <a href="#" style="color: #17A589;font-size:20px;font-family:'Open Sans', sans-serif;">Forgot Password?</a>
      </p>
            <button type="submit" name="submit" class="btn  btn-block" style="background-color: #EC7063;color:white">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
