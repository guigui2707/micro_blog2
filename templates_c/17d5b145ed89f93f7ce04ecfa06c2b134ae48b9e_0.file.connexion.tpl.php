<?php
/* Smarty version 3.1.30, created on 2018-04-09 17:46:57
  from "C:\wamp64\www\tamere2\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acba7111bd300_50254323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17d5b145ed89f93f7ce04ecfa06c2b134ae48b9e' => 
    array (
      0 => 'C:\\wamp64\\www\\tamere2\\connexion.tpl',
      1 => 1523296013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5acba7111bd300_50254323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
    <?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript" src="js/scriptRegExp.js"><?php echo '</script'; ?>
>
   
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

<?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['erreur']->value) {?> 
        <?php echo '<script'; ?>
 type="text/javascript"> 
            alert("Nom ou email déjà utilisé ! Veuillez réessayer");
            
        <?php echo '</script'; ?>
>
<?php }
}?>






    
<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
