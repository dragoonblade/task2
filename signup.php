<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/sweetalert.js"></script>
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="jumbotron">
  			<h1 id="header" class="loginform">SIGN UP</h1>
  		</div>
  		<div class="row">
  			<div class="col-md-4 "></div>
  			<div class="col-md-4 ">
  				<form name="loginform" action="add_user.php" method="POST">
            <div class="form-group">
              <label id=label1 class="form-group" for="text">Name</label>
              <input id="input1" class="form-control" type="text" name="name">
            </div>
  					<div class="form-group">
  						<label id=label1 class="form-group" for="email">Email</label>
  						<input id="input1" class="form-control" type="email" name="email">
  					</div>
            <div class="form-group">
              <label id="passw1" class="form-group" for="password">Password</label>
              <input id="input2" class="form-control" type="password" name="pass">
            </div>
            <div class="form-group">
              <button id="button3" class="btn btn-success">Done!</button>
            </div>
  					<div class="form-group" style="margin-top:50px">
  						<label id="input3" class="form-group" for="password">Have an Account?</label>
  						<button id="button3" class="btn btn-info" formaction="index.php">Login</button>
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