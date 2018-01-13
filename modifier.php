<?php
	include('includes/connexion.inc.php');
	require('libs/Smarty.class.php');//on inclut la classe smarty
	$smarty = new Smarty();

	//requete de securité si un utilisateur change l'id de message à modifier dans l'URL
	$protection="SELECT nom FROM messages NATURAL JOIN utilisateurs WHERE id='{$_GET['idMessageModif']}'";
	$stmt=$pdo->query($protection);

	while($data=$stmt->fetch())
		$nomUser=$data['nom'];

	//Si le nom de l'utilisateur correspond bien à l'auteur du message à modifier
	if($nomUser==$nom || $nom=='Administrateur')
	{
		//on recupère le contenu du message à modifier pour l'inscrire dans le textarea
		$contenu="SELECT contenu FROM messages WHERE id='{$_GET['idMessageModif']}'";
		$stmt=$pdo->query($contenu);

		while($data=$stmt->fetch())		
	   		$smarty->assign('contenuMessage', $data['contenu']);		
			
	   	$smarty->assign('idMessageModif',$_GET['idMessageModif']);
		$smarty->assign('nom',$nom);
		$smarty->display('modifier.tpl'); //code html
	}


?>





