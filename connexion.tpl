{include file='includes/haut.tpl'}
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/scriptRegExp.js"></script>
   
    <!-- Formulaire de connexion -->
    <div class="row">
        <div class="col-sm-3""></div>
        <div id="carreInscCo" class="col-sm-6">

            <h1>Espace connexion </h1>

            <form novalidate id ="formulaireConnexion" action="connexion.php" method="post">

                <!-- email -->
                <p id="mail">Email</p>
                <input type="email" id="emailCo" class="emailCo" name="emailCo" placeholder="Email">
                <p class ="controle" id = "erreurmailCo"> </p>
                </br>

                <!-- Mot de passe -->       
                <p id="password">Mot de passe</p>
                <input type="password" id="mdpCo" class="mdpCo" name="mdpCo" placeholder="Mot de passe">
                <p class ="controle" id = "erreurmdpCo"> </p>
                </br>   
                <p class ="controle" id = "connexionsuccess"> </p>
                <p>Pas de compte ? Créer en un ci dessous !</p>
                <!-- Bouton -->
                <button class="btn btn-success" type="submit">Connexion</button>
                

            </form>

        </div>
    </div>

</br></br>




    <!-- Formulaire d'inscription -->
    <div class="row">
        <div class="col-sm-3"></div>
        <div id="carreInscCo" class="col-sm-6">
            <h1>Créer un compte </h1>

            <form novalidate id ="formulaireInscription" action="inscription.php" method="POST">
            <div id ="content2">
              <div class ="champs">

                <p id="nom">Nom</p>
                <input required = "nomI" class="nomI" name="nomI" type="text" placeholder="nom" id="nomI"  />
                <p class ="controle" id = "erreurnom"> </p>

                <p id="tel">Numéro de téléphone</p>
                <input required = "telI" class="telI" name="telI" type="text" placeholder="Numéro de téléphone" id="telI"  />
                <p class ="controle" id = "erreurtel"> </p>

                 <p id="mail">Email</p>
                <input required = "emailI" type="mail" class="emailI" name="emailI" placeholder="nom@domaine.com" id="emailI" required /><br><br>
                <p class ="controle" id = "erreurmail"> </p>

                <p id="mdp">Mot de Passe </br> (1minuscule,1 majuscule, 1 caractère spécial et 5 caracteres minimum)</p>
                <input required = "mdpI" class="mdpI" name="mdpI" type="password" placeholder="mdp" id="mdpI"  />
                <p class ="controle" id = "erreurmdp"> </p>

               
                <input class="btn btn-success" name="submit" value="Inscription" type="submit">
                <p class ="controle" id = "authentification"> </p>
                <!-- Bouton -->
               
                </div>
            </div>
          </form>
         </div>
</div>

{if isset($erreur)}
    {if $erreur} 
        <script type="text/javascript"> 
            alert("Nom ou email déjà utilisé ! Veuillez réessayer");
            
        </script>
{/if}
{/if}






    
{include file='includes/bas.tpl'}