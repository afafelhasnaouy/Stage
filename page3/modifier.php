<!DOCTYPE html>
<?php 
		include('code.php'); 
		$user = new Users();
		session_start();
        $_POST["username"]= $_SESSION["username"];
        $id=$_POST['n_cheq'];

       if($user->insert($_POST['nom'], $_POST['date_cheq'], $_POST['ville'], $_POST['banq'], $_POST['n_cheq'], $_POST['montant'], $_POST['type'], $_POST['tiers'], $_POST['n_contrat'],$_POST["username"])) {
        echo "save";
        //header("location: modifier.php");
        
      } else {
        echo "Not save";
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
                <th>Type</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			
				<tr>
					<td><?php echo $_POST['banq'] ?></td>
					<td><?php echo $_POST['ville'] ?></td>
					<td><?php echo $_POST['nom'] ?></td>
					<td><?php echo $_POST['date_cheq'] ?></td>
					<td><?php echo $_POST['montant'] ?></td>
					<td><?php echo $_POST['n_cheq'] ?></td>
					<td><?php echo $_POST['tiers'] ?></td>
					<td><?php echo $_POST['n_contrat'] ?></td>
                    
					<td><?php echo $_POST['type'] ?></td>
					<td><a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')">Supprimer</a></td>
                    <td><a href="afficher.php">Valider</a></td>
				</tr>
			
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