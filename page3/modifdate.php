<!DOCTYPE html>
<?php 
		include('code.php'); 
		$user = new Users();
		session_start();
	   $username = $_SESSION["username"];
	   //$_SESSION["date1"]=$_POST['date1'];
	   //$_SESSION["date2"]=$_POST['date2'];
$_SESSION["id"]=$_GET['id'];
	 
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
	<form method="post" action="datemodif.php">
	

	<br>
	
    Entrez SVP La nouvelle Date : <input type="date" name="date3">

	<button>OK</button>

	</form>
			<!-- extract object -->
		
		
	
</body>
</html>
