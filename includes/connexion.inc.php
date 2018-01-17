<?php
	/*CONNEXION A LA BASE DE DONNEES*/
	$pdo= new PDO('mysql:host=localhost;dbname=micro_blog_caroux','root','');

	//On crée le sid de l'utilisateur en fonction de son cookie 
	if(isset($_COOKIE['cookieUtilisateur']))
	{
		$sql="SELECT * FROM utilisateurs WHERE sid='{$_COOKIE['cookieUtilisateur']}'";
		$stmt= $pdo->query($sql);	
			
		while ($data=$stmt->fetch()) 
			$nom=$data['nom'];	
	}
	else
		$nom="";

?>