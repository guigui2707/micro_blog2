<?php
    ini_set("display_errors",0); error_reporting(0);
    include('includes/connexion.inc.php');
    require('libs/Smarty.class.php');
    $smarty = new Smarty();
    $smarty->assign('nom', $nom);

    //requete pour chercher l'utilisateur dans la base de données
    $sql = "SELECT nom FROM utilisateurs WHERE email='{$_POST['email']}' AND mdp=:mdp";
    $prep = $pdo->prepare($sql);    
    $prep->bindValue(':mdp', md5($_POST['mdp']));
    $prep->execute();
    $resultat=$prep->fetch(); //resultat

    //Si retour d'un resultat on authentifie l'utilisateur
    if($resultat)
    {
        //création du sid et du cookie de session 
        $sid=md5($_POST['email'].time());
        setcookie("cookieUtilisateur", $sid, time()+300);
        //On mets le sid dans la base de données 
        $sql = 'UPDATE utilisateurs SET sid=:sid WHERE email=:email AND mdp=:mdp';
        $prep= $pdo->prepare($sql);
        $prep->bindValue(':sid', $sid);
        $prep->bindValue(':email', $_POST['email']);
        $prep->bindValue(':mdp', md5($_POST['mdp']));
        $prep->execute();
        header('Location:index.php');
    }

$smarty->display('connexion.tpl');
?>