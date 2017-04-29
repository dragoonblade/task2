<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/sweetalert.js"></script>
  </head>
  <body style="background-color: rgb(100,0,155)">
  	<div class="container" >
  		<div class="jumbotron" style="background-color: white">
  			<h1 id="header" class="loginform">LOGIN FORM</h1>
  		</div>
  		<div class="row">  
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
  				<form name="loginform" action="verify_user.php" method="POST" onsubmit="">
  					<div class="form-group">
  						<label id=label1 class="form-group" for="email">Username</label>
  						<input id="input1" class="form-control" type="text" name="name" >
  					</div>
  					<div class="form-group">
  						<label id="passw1" class="form-group" for="password">Password</label>
  						<input id="input2" class="form-control" type="password" name="pass">
  					</div>
  					<div class="form-group">
              <button id="button1" class="btn btn-success">Login</button>
  						<button id="button2" class="btn btn-danger" formaction="forgot.php">Forgot Password</button>
  					</div>
  					<div class="form-group">
  						<label id="input3" class="form-group" for="password">New User?</label>
  						<a href="signup.php" class="btn btn-primary">Sign Up</a>
  					</div>
  				</form>
  			</div>
  			<div class="col-md-4"></div>
  		</div>
  	</div>
      <?php
        if(isset($_SESSION['message'])){
          echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
          unset($_SESSION['message']);
        }
      ?>
  </body>
</html>