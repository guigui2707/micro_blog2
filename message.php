<?php
include('includes/connexion.inc.php');

//on vérifie si l'utilisateur est encore connecté pour inserer son message dans la base de donnée
if($nom!=""){
	//on recupere l'id de l'utilisateur pour le mettre dans la requete INSERT
	$query='SELECT id FROM utilisateurs WHERE nom="'.$nom.'"';
	$stmt = $pdo->query($query);
	while ($data = $stmt->fetch()) {
		$id_utilisateurs=$data['id'];
	}

if (isset($_POST['message']) && !empty($_POST['message'])) {
   
	//Si l'id n'existe pas ou si l'id est vide, on fait une requete INSERT , sinon on fait un update (si l'utilisateur a appuyé sur le bouton modifier)
	if(!isset($_POST['id']) || empty($_POST['id'])){
		$query = 'INSERT INTO messages (contenu, date, id_utilisateurs) VALUES (:contenu, UNIX_TIMESTAMP(),:id_utilisateurs)';
		$prep = $pdo->prepare($query);
	}
	else{
		$query = 'UPDATE messages set contenu=(:contenu), date= UNIX_TIMESTAMP(), id_utilisateurs=(:id_utilisateurs) WHERE id=(:id)';
		$prep = $pdo->prepare($query);
		$prep->bindValue(':id', $_POST['id']);
	}
	$prep->bindValue(':id_utilisateurs', $id_utilisateurs);
	$prep->bindValue(':contenu', $_POST['message']);
	
	$prep->execute();
    
}
//Redirection vers la page index.php
header('Location:index.php');
}
//si le cookie a expiré
else{
	
	include('includes/haut.inc.php');
	?>

	<div style="text-align: center;">
		<p >Votre session a expiré. Veuillez vous reconnecter.</p>
		
	</div>
	<?php
	include('includes/bas.tpl');
}
?>