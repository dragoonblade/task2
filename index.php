<!DOCTYPE HTML>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
  	<div class="container">
  		<div class="jumbotron">
  			<h1 id="header" class="loginform">LOGIN FORM</h1>
  		</div>
  		<div class="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
  				<form name="loginform">
  					<div class="form-group">
  						<label id=label1 class="form-group" for="email">Email</label>
  						<input id="input1" class="form-control" type="email" name="">
  					</div>
  					<div class="form-group">
  						<label id="passw1" class="form-group" for="password">Password</label>
  						<input id="input2" class="form-control" type="password" name="">
  					</div>
  					<div class="form-group">
  						<button id="button1" class="btn btn-success">Login</button>
  						<button id="button2" class="btn btn-danger" formaction="forgot.php">Forgot Password</button>
  					</div>
  					<div class="form-group">
  						<label id="input3" class="form-group" for="password">New User?</label>
  						<a href="new.php" class="btn btn-primary">Sign Up</a>
  					</div>
  				</form>
  			</div>
  			<div class="col-md-4"></div>
  		</div>
  	</div>
  </body>
</html>