<?php
    include('includes/connexion.inc.php');
    require('libs/Smarty.class.php');//on inclut la classe smarty
    $smarty = new Smarty();

    /*CONDITION POUR LA PAGINATION*/
    if(!isset($_GET['page']))
        $_GET['page']=1;


   /*COMPTABILISATION DU NOMBRE DE MESSAGE AU TOTAL DANS LA BDD*/
    $nbMessPage=5; 
    $sql = "SELECT count(id)AS nb FROM messages";
    $stmt=$pdo->query($sql);
    while ($data=$stmt->fetch())             
        $nbMess=$data['nb'];

    //envoi des variables à la page tpl
    $nbPages= $nbMess/$nbMessPage;
    $smarty->assign('nbPages', $nbPages);
    $smarty->assign('nbMess', $nbMess);
    $smarty->assign('nbMessPage',$nbMessPage);

    /*RECUPERATION DU CONTENU DES MESSAGES*/
    // Borne du numéro de message au début de page
    $borneDebut= ($_GET['page']*$nbMessPage)-$nbMessPage;        
    
    $sql ="SELECT contenu, id, nom, date FROM messages NATURAL JOIN utilisateurs ORDER BY date DESC LIMIT {$borneDebut},{$nbMessPage}";
        
    $stmt=$pdo->query($sql);

     /*AFFICHAGE DES MESSAGES*/
    $cpt=0;
    $tableau=array(); //declaration d'un tableau
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

