<?php 
include 'config.php';
if(isset($_POST['btn-login'])){
  $email     = $_POST['email'];
  $pass      = $_POST['pass'];
  $sql = "select * from `admin` where `email` = '$email' AND `pass` = '$pass'";
  $sqlr = mysqli_query($con, $sql);
  if(mysqli_num_rows($sqlr)){
    $data = mysqli_fetch_array($sqlr);
    $_SESSION['admin'] = $data;
    header('location:index.php');

  }else{
    $msg = "<div class='alert alert-danger'>Email or password not matched.</div>";
  }
}
 ?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: Falcon - Admin Dashboard ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
             <form class="form" method="post">
                <div class="header header-primary text-center">
                  <h4>Sign in</h4>
                  <div class="social-line">
                   
                  </div>
                </div>
                <h3 class="mt-0">Falcon</h3>
                <p class="help-block">Or Be Classical</p>
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="email" required="" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password..." class="form-control underline-input" required="" name="pass">
                  </div>
                </div>
                <div class="footer text-center">
                  
                  <button class="btn btn-info btn-raised" type="submit" name="btn-login">Login</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
            
            <div class="copyright text-white mt-20"> &copy; 2026, made with
              <i class="fa fa-heart heart"></i> by
               Farhan
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 May 2018 15:21:54 GMT -->
</html>