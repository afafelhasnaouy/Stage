<?php
	include 'code.php';
	$users = new Users();
	if($users->delete(($_GET['n_cheq']))) {
		header("Location: afficher.php");
	} else {
		echo "No user found";
	}