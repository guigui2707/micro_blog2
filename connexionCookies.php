<?php

	include("includes/haut.php");
	include("includes/connexion.php");
?>


<?php
 if(isset($_POST['email'])){
 	//echo 'Bienvenue' . $_COOKIE['email'] . ' !';    
   // $sid=mdS($_POST['email'].time());    	



   }
  else
  {?>

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
include("includes/bas.php");
?>