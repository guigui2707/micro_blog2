<?php
include('includes/connexion.inc.php');
//Supprimer le message 
$sql='DELETE FROM messages WHERE id='.$_GET['id'];
$prep = $pdo->prepare($sql);
$prep->execute();
header('Location:index.php');
?>