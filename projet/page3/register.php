<?php



       session_start();
       $_POST["username"]= $_SESSION["username"];
       

        
  include('code.php');

  $user = new Users();
  
  if($user->insert($_POST['nom'], $_POST['date_cheq'], $_POST['ville'], $_POST['banq'], $_POST['n_cheq'], $_POST['montant'], $_POST['type'], $_POST['tiers'], $_POST['n_contrat'],$_POST["username"])) {
    echo "save";
    header("location: afficher.php");
    
  } else {
    echo "Not save";
  }