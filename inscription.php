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

	}

	
	if($controle==true)
	{
		$sql = "INSERT INTO utilisateurs (email, mdp, nom) VALUES ('{$_POST['emailI']}', :mdp,'{$_POST['nomI']}')";
		$prep = $pdo->prepare($sql);	
		$prep->bindValue(':mdp', md5($_POST['mdpI']));
		$prep->execute();
		
	}
	
	$smarty->display('connexion.tpl');
?>