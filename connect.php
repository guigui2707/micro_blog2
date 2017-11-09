<?php

	include("includes/haut.inc.php");
	include("includes/connexion.inc.php");
?>

<?php
//	$sid=mdS($_POST['email'].time());
	
?>

   <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">LE FIL</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>


<div style="text-align: center" id="espaceConnexion">
	</br>
	<p> Nom d'utilisateur </p>
	<input type="text" name="mail">
	<p> Mot de passe </p>
	<input type="password" name="password">
	</br> </br> 

	 <button type="submit" class="btn btn-success btn-lg">Connexion</button>
      </br></br>
</div>

	

<?php
include("includes/bas.inc.php");
?>