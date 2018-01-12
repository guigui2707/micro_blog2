<?php
	include('includes/connexion.inc.php');
	require('libs/Smarty.class.php');//on inclut la classe smarty
	$smarty = new Smarty();


	/*METHODE RECHERCHE */

	//requete recherche
   	$sql = 'SELECT contenu, id, nom, date FROM messages NATURAL JOIN utilisateurs WHERE contenu LIKE "%'.$_GET['search'].'%" OR nom LIKE "%'.$_GET['search'].'%" ';
   	//requete comptabilisation du nb de resultat
   	$nb='SELECT count(id) AS nbResultat FROM messages NATURAL JOIN utilisateurs WHERE contenu LIKE "%'.$_GET['search'].'%" OR nom LIKE "%'.$_GET['search'].'%" ORDER BY date DESC';
	
	$stmt=$pdo->query($sql);
	$count=$pdo->query($nb);
	/*AFFICHAGE DES MESSAGES*/
	$cpt=0;
	$tableau=array();
	while($data=$stmt->fetch())
	{
		//on recupere tout le contenu dans un tableau pour l'envoyer à la page tpl
		$tableau[$cpt]['contenu'] = $data['contenu'];
		$tableau[$cpt]['idMessage'] = $data['id'];
		$tableau[$cpt]['nom'] = $data['nom'];
		$tableau[$cpt]['date'] = date("d/m/Y H:i:s", $data['date']);			
		$cpt++;
	}

	while($data=$count->fetch())	
		$smarty->assign('nbResultat',$data['nbResultat']);



	$smarty->assign('tableau',$tableau);
	$smarty->assign('nom',$nom);

	$smarty->display('recherche.tpl'); //code html


	?>