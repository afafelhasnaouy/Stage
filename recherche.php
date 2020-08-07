<!DOCTYPE html>
<?php 
		include('page3/code.php'); 
		$user = new Users();
		session_start();
	   $username = $_SESSION["username"];
	   //$_SESSION["date1"]=$_POST['date1'];
	   //$_SESSION["date2"]=$_POST['date2'];

	 
       if(isset($username)){
        echo "<h3>Salut Mme,Mr  ".$username."</h3>" ;
       }
       else{
        header("location:index.php" );
       }
	?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="page3/affiche.php">
	Recherche Par Date :

	De <input type="date" name="date1">
	A  <input type="date" name="date2">

	<button>OK</button>

	</form>
			<!-- extract object -->
		
		
	
</body>
</html>