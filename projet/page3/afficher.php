<!DOCTYPE html>
<?php 
		include('code.php'); 
		$user = new Users();
		session_start();
       $username = $_SESSION["username"];
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
				<th colspan="1">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- extract object -->
			<?php foreach($user->getData() as $users){ ?>
				<tr>
					<td><?php echo $users->banq; ?></td>
					<td><?php echo $users->ville; ?></td>
					<td><?php echo $users->nom; ?></td>
					<td><?php echo $users->date_cheq; ?></td>
					<td><?php echo $users->montant; ?></td>
					<td><?php echo $users->n_cheq; ?></td>
					<td><?php echo $users->tiers; ?></td>
					<td><?php echo $users->n_contrat; ?></td>
					
					<td><a href="delete.php?n_cheq=<?php echo $users->n_cheq; ?>" onclick="return confirm('Are you sure you want to delete?')">Supprimer</a></td>
				</tr>
			<?php } ?>
		</tbody>
		</table>
		<tfoot>
			<tr>
				<td colspan="5">
					<a href="index.php">Ajouter</a>
				</td>
			</tr>
		</tfoot>
		<tfoot>
			<tr>
				<td colspan="5">
					<a href="../acceuil.php">Accueil</a>
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