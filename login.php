<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.html');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
    	<p class="login-box-msg">ĐĂNG NHẬP TÀI KHOẢN</p>

    	<form action="verify.html" method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Địa chỉ Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary" name="login" style="width: 150px; margin: 0 auto; display: block;"><i class="fa fa-sign-in"></i> Đăng nhập</button>
            </div>
        </div>
    	</form>
      <a href="password_forgot.html">Bạn quên mật khẩu?</a><br>
      <a href="signup.html" class="text-center">Bạn chưa có tài khoản? Đăng kí</a><br>
      <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>