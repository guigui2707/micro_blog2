<?php 
include('includes/connexion.inc.php');


    //requete pour rechercher l'id de l'utilisateur
    $sql="SELECT contenu FROM messages WHERE id=".$_GET['id'];
    $stmt = $pdo->query($sql);
    while ($data = $stmt->fetch()) 
        $contenu=$data['contenu'];


    $regExp = array('#(https?|ftp|ssh|mailto):\/\/[a-z0-9\/:%_+.,\#?!@&=-]+#i','/[0-9a-z-_.]+\@[0-9a-z.]+\.[a-z]+/');
        $matches= array('<a href="$0" target="_blank">$0</a>','<a href="mailto:$0">$0</a>');
        $contenu = preg_replace($regExp, $matches, $contenu);


     if (strlen($contenu) > 100) 
    {
       
        $contenuFin=substr($contenu,100);
    ?>

    
        <span><?php echo $contenuFin ?></span>
    
    <?php
    }
  
?>