<?php
session_start();
include_once 'Config.php';
if(isset($_POST['submit']))
{
  $name=addslashes(trim($_POST['userName']));
  $pass=trim($_POST['password']);
  //echo "select * from admin where adminUserName='$name' and adminPassword='$pass'";exit;
  $query =$mysqli->query("SELECT * FROM admin WHERE userName='$name' AND password='$pass'");
   if($query->num_rows > 0)
  {
    $queryres=$query->fetch_assoc();
    $_SESSION['adminUName']=$name;
    $_SESSION['adminId']=$queryres['idAdmin'];
    header('Location:index.php');
          if($queryres) {
            $_SESSION["adminId"]= $queryres["idAdmin"];
            
            if(!empty($_POST["remember"])) {
              setcookie ("userName",$_POST["userName"],time()+ (10 * 365 * 24 * 60 * 60));
              setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
            } else {
              if(isset($_COOKIE["userName"])) {
                setcookie ("userName","");
              }
              if(isset($_COOKIE["password"])) {
                setcookie ("password","");
              }
            }
        }
  }
  else
  {
    echo '<script>alert("wrong username or password");</script>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Active Baccha</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please login with your Username and Password.</p>

      <form  method="post" enctype="multipart/form-data">
        <div class="form-group has-feedback">
          <input type="text" name="userName" value="<?php if(isset($_COOKIE["userName"])) { echo $_COOKIE["userName"]; } ?>" class="form-control" placeholder="Username">
<!--           <span class="fa fa-envelope form-control-feedback"></span> -->
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Password">
<!--           <span class="fa fa-lock form-control-feedback"></span> -->
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
             
              <label> <input type="checkbox" class="checkbox icheck" name="remember" id="remember" <?php if(isset($_COOKIE["userName"])) { ?> checked <?php } ?> /> Remember Me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
