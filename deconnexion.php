<?php

//suppression du cookie de connexion
setcookie('cookieUtilisateur','', time()-1);
header('Location:index.php');
?>