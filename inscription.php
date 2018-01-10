<?php
	include('includes/connexion.inc.php');
	require('libs/Smarty.class.php');
		$smarty=new Smarty();//on inclut la classe Smarty
		$smarty->assign('nom', $nom);
		

	/* VERIFICATION DES ERREURS*/
	$sql='SELECT nom, email FROM utilisateurs';
	$stmt=$pdo->query($sql);
	$controle=true;
	while($data=$stmt->fetch())
	{
		if($data['nom']==$_POST['nomI'] || $data['email']==$_POST['emailI'])
		{
			$controle=false;
			$smarty->assign('erreur', true);
		}

		if($_POST['nomI']=="" || $_POST['emailI']=="" || $_POST['mdpI']=="")
		{
			$controle=false;
			$smarty->assign('vide', true);
		}
	}

	/* INSCRIPTION SI LE CONTROLE EST BON*/
	if($controle==true){
		$sql = 'INSERT INTO utilisateurs (email, mdp, nom) VALUES (:email, :mdp, :nom)';
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':email', $_POST['emailI']);
		$prep->bindValue(':mdp', md5($_POST['mdpI']));
		$prep->bindValue(':nom', $_POST['nomI']);
		$prep->execute();
		$smarty->assign('erreur', false);
		
	}

	$smarty->display('connexion.tpl');
?>