<?php
    include('includes/connexion.inc.php');
    require('libs/Smarty.class.php');//on inclut la classe smarty
    $smarty = new Smarty();

    
    //Requete SQL pour recuperer les infos du message
    $sql ='SELECT contenu, id, nom, date FROM messages NATURAL JOIN utilisateurs ORDER BY date DESC LIMIT 5';
    $stmt=$pdo->query($sql);

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

    $smarty->assign('tableau',$tableau);
    $smarty->assign('nom',$nom);
    $smarty->display('index.tpl'); //code html
?>

