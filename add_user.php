<?php
	session_start();
	require_once "config.php";
	$email=$_POST['email'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$newURL='index.php';
	$sql="INSERT INTO `users` (`name`,`email`,`password`) values ('".$name."','".$email."','".$pass."')";
	$mysql->query($sql);
	$_SESSION['message']='User added successfully';
	header('Location: '.$newURL);
?>

