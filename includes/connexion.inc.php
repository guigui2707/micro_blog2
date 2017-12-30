<?php
/*CONNEXION A LA BASE DE DONNEES*/
$pdo = new PDO('mysql:host=127.0.0.1;dbname=micro_blog2', 'root', '');

//On crée le sid de l'utilisateur en fonction de son cookie 
if(isset($_COOKIE['cookieUtilisateur'])){
	$query='SELECT * FROM utilisateurs WHERE sid=:sid';
	$prep= $pdo->prepare($query);
	$prep->bindValue(':sid', $_COOKIE['cookieUtilisateur']);
	$prep->execute();
	$count=$prep->rowCount();
	if($count!=0){
		while ($data = $prep->fetch()) {
			$nom=$data['nom'];
		}
	}
	else{
		$nom="";
	}
}
//Si le cookie n'existe pas, on crée une variable $nom 
else{
	$nom="";
}
?>