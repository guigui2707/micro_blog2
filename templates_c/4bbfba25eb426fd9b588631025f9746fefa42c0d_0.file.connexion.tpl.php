<?php
/* Smarty version 3.1.30, created on 2018-01-13 19:09:47
  from "C:\wamp64\www\micro_blog\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a597ba2ee73_85008222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbfba25eb426fd9b588631025f9746fefa42c0d' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\connexion.tpl',
      1 => 1515870464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a5a597ba2ee73_85008222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    
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
            <form action="inscription.php" method="post">
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
                <!-- Bouton -->
                <button class="btn btn-success" type="submit"> Inscription </button>
            </form>
        </div>
    </div>

    <!-- AFFICHAGE DES ERREURS DE SAISIE-->
    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['erreur']->value) {?> 
        <?php echo '<script'; ?>
 type="text/javascript"> 
            alert("Nom ou email déjà utilisé ! Veuillez réessayer") 
        <?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
 type="text/javascript"> 
            alert("Compte crée avec succès ! Vous pouvez vous connecter") 
        <?php echo '</script'; ?>
>
    <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['vide']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['vide']->value) {?> 
        <?php echo '<script'; ?>
 type="text/javascript"> 
            alert("Un champ n'est pas rempli") 
        <?php echo '</script'; ?>
>
    <?php }?>
    <?php }?>
    
<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
