<?php
	
	session_start();
	require_once "config.php";
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$newURL='dash.php';
	$oldURL='index.php';
	$sql="SELECT * FROM `users` where name='".$name."' AND password='".$pass."'";
	$result=$mysql->query($sql);
	$mail=$result->fetch_row();
	if($mail){
		$_SESSION['name']=$mail[1];;
		$_SESSION['email']=$mail[2];
		$_SESSION['user_id']=$mail[0];
		$_SESSION['message']='Login Successfull';
		header("location: dash.php");
	}
	else{
		$_SESSION['message']='Email or Password is Incorrect';
		header("location: index.php");
	}
	?>