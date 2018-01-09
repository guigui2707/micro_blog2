<?php
	include('includes/connexion.inc.php');

	/*RECUPERATION DE L'ID DE L'UTILISATEUR*/
	$sql='SELECT idUtilisateurs FROM utilisateurs WHERE nom="'.$nom.'"';
	$stmt = $pdo->query($sql);
	while ($data=$stmt->fetch())
		$UserConnecte=$data['idUtilisateurs'];
	
	/*REQUETE D'INSERTION DU MESSAGE*/
	$sql='INSERT INTO messages (contenu,date,idUtilisateurs) VALUES (:contenu, UNIX_TIMESTAMP(),:UserConnecte)';
	$prep = $pdo->prepare($sql);
	$prep->bindValue(':contenu', $_POST['message']);
	$prep->bindValue(':UserConnecte', $UserConnecte);
	$prep->execute();
    
	header('Location:index.php');
	exit();


?>