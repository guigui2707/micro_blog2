<?php
include('includes/connexion.inc.php');

$idd= $_GET['id'];
$a= $_GET['a'];

if ($a=='sup'){
	$sql="UPDATE messages SET contenu=:contenu WHERE id=:id";
	$prep=$pdo->prepare($sql);
	$prep->bindValue(':id', $_GET['id']);
	$prep->execute();
	header("Location:index.php");
	exit();
}


?>