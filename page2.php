

<?php

session_start();
$host = "localhost";
$username = "root";
$password ="";
$database = "afaf";
$message = "";


try{
	$connect = new PDO("mysql:host=$host; dbname=$database",$username,$password);

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		if(empty($_POST["username"]) || empty($_POST["password"])){
			$message = '<label>All field is required</label>';
		}
		else
		{
			$query = "SELECT * FROM users WHERE username = :username AND password = :password";
			$statement = $connect->prepare($query);
			$statement->execute(

                    array(
                	'username' => $_POST['username'] ,
                	 'password' => $_POST['password'])

			);

			$count = $statement->rowCount();
			if ($count > 0) {
				$_SESSION["username"] = $_POST["username"];

				header("location:acceuil.php");
			}
			else{

				$message='<label>Username or Password is wrong</label>';
			}


		}
	
}
catch(PDOException $error){
$message =  $error->getMessage();

}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Authentification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="post">
					<?php
                       if(isset($message)){
                       	echo "<label class=text-danger>".$message."</label>";
                       }

					?>
					<span class="login100-form-title p-b-43">
						Login to continue "Session User"
					</span>
					
					<div class="wrap-input100 " data-validate = "Username is required">
						<input class="input100" type="text" name="username" required="required">
						<span class="focus-input100"></span>
						<span class="label-input100">username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/téléchargement.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>