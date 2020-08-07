<?php
	include 'code.php';
	$users = new Users();
	$id=($_GET['id']);
	if($users->valider($id)) {
		header("Location: affiche.php");
	} else {
		echo "No user found";
		header("Location: affiche.php");
	}