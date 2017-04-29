<?php
	session_start();
	$_SESSION['message']='Logged out successfully';
	if(isset($_SESSION['name'])){=
        unset($_SESSION['name']);
      }
    header("location: index.php");
?>