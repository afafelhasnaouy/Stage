<!DOCTYPE html>
<?php 
		include('page3/code.php'); 
		$user = new Users();
		session_start();
	   $username = $_SESSION["username"];
	   
	 
       if(isset($username)){
        echo "<h3>Salut Mme,Mr  ".$username."</h3>" ;
       }
       else{
        header("location:index.php" );
       }
	?>
<html>
<head>
	<title>Consultation</title>
</head>
<body>
Liste des utilisateurs

<table border="1" cellpadding="10">
		<thead>
			<tr>
				<th>Nom</th>
			
				<th colspan="1">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- extract object -->
			<?php foreach($user->consulter() as $users){

			
			 	# code...
			 ?>
				<tr>
				
					
					<td><?php echo $users->username; ?></td>
					
					<td><a href="user.php?id=<?php echo $users->username;  ?>" >Consulter</a></td>
				</tr>
			<?php }  ?>
		</tbody>
		</table>
		<br>
		<tfoot>
			<tr>
				<td colspan="5">
					<a href="accueiladmin.php">Retour a l'Accueil</a>
				</td>
			</tr>
		</tfoot>
		<tfoot>
			<tr>
				<td colspan="5">
					<a href="logout.php">Déconnecter</a>
				</td>
			</tr>
		</tfoot>

</body>
</html>