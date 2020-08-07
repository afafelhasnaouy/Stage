<!DOCTYPE html>
<?php 
		include('code.php'); 
		$user = new Users();
		session_start();
	   $username = $_SESSION["username"];
	   
	   
	 $date1=$_POST['date1'];
	 $date2=$_POST['date2'];
	 $search_results=[];
       if(isset($username) &&  isset($date1,$date2)){
		$search_results= $user->recherche($date1,$date2);
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
	<table border="1" cellpadding="10">
		<thead>
			<tr>
				<th>Banque</th>
				<th>Ville</th>
				<th>Nom</th>
				<th>Date du chèque</th>
				<th>Montant</th>
				<th>N° chèque</th>
				<th>tiers</th>
				<th>N° Contrat</th>
				<th>Username</th>
				<th colspan="3">Action</th>

				
			</tr>
		</thead>
		<tbody>
			<!-- extract object -->
			<?php foreach($search_results as $users){ ?>
				<tr>
					<td><?php echo $users->banq; ?></td>
					<td><?php echo $users->ville; ?></td>
					<td><?php echo $users->nom; ?></td>
					<td><?php echo $users->date_cheq; ?></td>
					<td><?php echo $users->montant; ?></td>
					<td><?php echo $users->n_cheq; ?></td>
					<td><?php echo $users->tiers; ?></td>
					<td><?php echo $users->n_contrat; ?></td>
					<td><?php echo $users->username; ?></td>

					<td><?php echo $users->action; ?></td> 
					<td><a href="valider.php?id=<?php echo $users->n_cheq; ?>">Valider
					</a></td>
					<td><a href="modifdate.php?id=<?php echo $users->n_cheq; ?>">Modifier la Date
					</a></td>

					
					
				</tr>
			<?php } ?>
		</tbody>
		</table>
	<tfoot>
			<tr>
				<td colspan="5">
					<a href="../accueiladmin.php">Acceuil</a>
				</td>
			</tr>
		</tfoot>
		<tfoot>
			<tfoot>
			<tr>
				<td colspan="5">
					<a href="validertout.php">Valider Tout</a>
				</td>
			</tr>
		</tfoot>
		<tfoot>
			<tr>
				<td colspan="5">
					<a href="../logout.php">Déconnecter</a>
				</td>
			</tr>
		</tfoot>
	
</body>
</html>