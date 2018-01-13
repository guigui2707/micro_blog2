<?php
	include('includes/connexion.inc.php');

	//Supprimer le message 
	$sql="DELETE FROM messages WHERE id='{$_GET['id']}'";
	$stmt = $pdo->query($sql);
	header('Location:index.php');
?>