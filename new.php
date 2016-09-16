<!DOCTYPE HTML>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="jumbotron">
  			<h1 id="header" class="loginform">SIGN UP</h1>
  		</div>
  		<div class="row">
  			<div class="col-md-4 "></div>
  			<div class="col-md-4 ">
  				<form name="loginform">
            <div class="form-group">
              <label id=label1 class="form-group" for="text">Name</label>
              <input id="input1" class="form-control" type="text" name="">
            </div>
  					<div class="form-group">
  						<label id=label1 class="form-group" for="email">Email</label>
  						<input id="input1" class="form-control" type="email" name="">
  					</div>
            <div class="form-group">
              <label id="passw1" class="form-group" for="password">Password</label>
              <input id="input2" class="form-control" type="password" name="">
            </div>
            <div class="form-group">
              <label id="passw1" class="form-group" for="password">Confirm Password</label>
              <input id="input2" class="form-control" type="password" name="">
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
  </body>
</html>