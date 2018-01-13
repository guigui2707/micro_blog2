<?php
include('includes/connexion.inc.php');


	//requete pour rechercher l'id de l'utilisateur
	$sql="SELECT idUtilisateurs FROM utilisateurs WHERE nom='$nom'";
	$stmt = $pdo->query($sql);
	while ($data = $stmt->fetch()) 
		$idUser=$data['idUtilisateurs'];
	
	//requete insertion message
	if (isset($_POST['message'])) 
	{       	
		$sql ="INSERT INTO messages (contenu, date, idUtilisateurs) VALUES ('{$_POST['message']}', UNIX_TIMESTAMP(),{$idUser})";
		$prep = $pdo->prepare($sql);	
		$prep->execute();
	    
	}

	//on redirige l'utilisateur sur la page index.php
	header('Location:index.php');

?>
