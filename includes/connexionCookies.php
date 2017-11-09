<?php

	include("includes/haut.inc.php");
	include("includes/connexion.inc.php"); 
?>


<?php
 if(isset($_POST['email'])){

 	$sql="SELECT * FROM utilisateurs WHERE email=:email AND mdp=:mdp";

 	$sid=$pdo->prepare($sql);
	$sid->bindValue(':email', $_POST['email']);
	$sid->bindValue(':mdp', $_POST['mdp']);
	$sid->execute();

	$sid=mdS($_POST['email'].time());

 	$sql="UPDATE utilisateur SET sid=:sid WHERE email=:email";

   }
  else
  { ?>

		 <!-- About Section -->
		</br> </br></br></br></br>
		    <section>
		        <div class="container">
		            <div class="row">              
		                <form method="POST" action="connexionCookies.php">
		                    <div class="col-sm-10">  
		                        <div class="form-group">
		                            
		                            <?php
		                           
		                           
		                           echo "<input type='email' name='mail' class='form-control' placeholder='adresse mail'>
		                           </textarea> </br>";

		                            echo "<input type='password' name='mdp' class='form-control' placeholder='mot de passe'>
		                           </textarea>";
		                            
		                            echo "<input type='checkbox'>  Se souvenir de moi</input>"
		                            ?>

		                            
		                        </div>
		                    </div>
		                    <div class="col-sm-2">
		                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
		                    </div>                        
		                </form>
		            </div>

    }


<?php
include("includes/bas.inc.php");
?>