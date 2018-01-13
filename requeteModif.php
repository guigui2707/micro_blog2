<?php
include('includes/connexion.inc.php');

	//requete de modification du message
	if(isset($_POST["messageModif"]))
	{
		$sql ="UPDATE messages SET contenu='".sql($_POST['messageModif'])."'
		 WHERE id={$_GET['idMessageModif']}";
		$stmt = $pdo->query($sql);
   	
   		header("Location:index.php"); //redirection vers l'index
   	}

   	//fonction pour que les apostrophes soit pris en compte
   	function sql($string)
	{
		return str_replace('\'', '\'\'', $string);
	}

?>