<?php
  session_start();
    if(!isset($_SESSION['name']) || empty($_SESSION['name'])) {
      header('location:index.php');
      exit;
    } 
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>DashBoard</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="js/sweetalert.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-top navbar-left">
      <img src="images/logo.png" alt="Mountain View" style="width:50px;height:50px;">
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Hi, <?php echo $_SESSION["name"] ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash.php">Add Post</a></li>
            <li><a href="view_post.php">View Post</a></li>
            <li><a href="logout.php ">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>

  <div class="container" style="margin-top: 5%;">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Add Post</div>
          <div class="panel-body">
            <form name="addPost" action="add_post.php" method="POST">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title"/>
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" class="form-control" name="body" rows="6"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success form-control" value="Submit">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
 
  <footer class="footer" style="bottom">
    <p style="border-top-style: solid; position: fixed; bottom: 7px width: 100% border-width: 1px"></p>
    <p style="position: fixed; bottom: 0px; margin-bottom: 0px">Manipal University Jaipur. All rights reserved.</p>
    <p style="position: fixed; bottom: 0px; right: 1px; margin-bottom: 0px ">Version 1.0</p>
  </footer>
    <?php
        if(isset($_SESSION['message'])){
          echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
          unset($_SESSION['message']);
        }
    ?>
  </body>
</html>