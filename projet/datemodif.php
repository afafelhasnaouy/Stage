<?php
	include 'code.php';
	$users = new Users();
	session_start();
	$id=$_SESSION['id'];
	if($users->modifdate($_POST["date3"],$id)) {
		header("Location: affiche.php");
	} else {
		echo "No user found";
	}