{include file='includes/haut.tpl'}
    
    
    <!-- Formulaire de connexion -->
    <div class="row">
        <div class="col-sm-3""></div>
        <div style="text-align: center;background-color: #DCDCDC; padding-left: 50px;padding-right: 50px" class="col-sm-6">

            <h1>Espace connexion </h1>
            <form action="connexion.php" method="post">

                <!-- email -->
                <p id="mail">Email</p>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                </br>

                <!-- Mot de passe -->       
                <p id="password">Mot de passe</p>
                <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                </br>   

                <!-- Bouton -->
                <button class="btn btn-success" type="submit">Connexion</button>

            </form>

        </div>
    </div>

</br></br>

    <!-- Formulaire d'inscription -->
    <div class="row">
        <div class="col-sm-3""></div>
        <div style="text-align: center;background-color: #DCDCDC; padding-left: 50px;padding-right: 50px" class="col-sm-6">

            <h1>Créer un compte </h1>
            <form id="target" action="inscription.php" method="post">
                <!-- nom -->
                <p id="nom">Nom</p>
                <input type="name" id="nom" class="form-control" name="nomI" placeholder="Nom">

                <!-- email -->
                <p id="mail">Email</p>
                <input type="email" id="email" class="form-control" name="emailI" placeholder="Email">
                </br>
                <!-- Mot de passe -->       
                <p id="password">Mot de passe</p>
                <input type="password" id="mdp" class="form-control" name="mdpI" placeholder="Mot de passe">
                </br>   
                <div id="warning"></div>
                </br>                           
                <!-- Bouton -->
                <button class="btn btn-success" type="submit"> Inscription </button>
            </form>

        </div>
        
    </div>

<script src="vendor/jquery/jquery.js"> </script>
<script type="text/javascript">

    $("input").each(function(){
        $( "#target" ).submit(function() {
            
            if($(this).val()==""){
                $('#warning').html('<p class="alert alert-danger" > Un champ n\'est pas rempli</p>');
                
            }

        });
    });

</script>


    <!-- AFFICHAGE DES ERREURS DE SAISIE-->
    {if isset($erreur)}
    {if $erreur} 
        <script type="text/javascript"> 
            alert("Nom ou email déjà utilisé ! Veuillez réessayer") 
        </script>
    {else}
        <script type="text/javascript"> 
            alert("Compte crée avec succès ! Vous pouvez vous connecter") 
        </script>
    {/if}
    {/if}

    
    
{include file='includes/bas.tpl'}