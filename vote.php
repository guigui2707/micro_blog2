<?php 
include('includes/connexion.inc.php');


    //requete pour rechercher l'id de l'utilisateur
    $sql="SELECT idUtilisateurs FROM utilisateurs WHERE nom='$nom'";
    $stmt = $pdo->query($sql);
    while ($data = $stmt->fetch()) 
        $idUser=$data['idUtilisateurs'];


function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}



    $sqlvote='SELECT nbVotes, IP FROM messages WHERE id='.$_GET['id'];
    $stmt=$pdo->query($sqlvote);

    while($data=$stmt->fetch()){
        //si c'est le meme IP du dernier votant
        if($data['IP']==get_ip()){
            echo $data['nbVotes']; //on ne change pas le nb de vote
        }
        else
        {
            $voteInc=$data['nbVotes']+1;
            echo $voteInc; //affichage du nb de vote
            $prep=$pdo->prepare("UPDATE messages SET nbVotes=:vote, IP=:ip WHERE id=:id"); //update de la bdd
            $prep->execute(array(
                'vote'=> $voteInc,
                'ip'=> get_ip(),
                'id' => $_GET['id']
            ));
        } 
    }

?>
