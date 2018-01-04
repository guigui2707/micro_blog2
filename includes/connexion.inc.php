<?php
/*CONNEXION A LA BASE DE DONNEES*/
$pdo= new PDO('mysql:host=localhost;dbname=micro_blog','root','');

//On crée le sid de l'utilisateur en fonction de son cookie 
if(isset($_COOKIE['cookieUtilisateur']))
{
	$query='SELECT * FROM utilisateurs WHERE sid=:sid';
	$prep= $pdo->prepare($query);
	$prep->bindValue(':sid', $_COOKIE['cookieUtilisateur']);
	$prep->execute();
	
	while ($data = $prep->fetch()) 
		$nom=$data['nom'];	
}
else
	$nom="";


?>