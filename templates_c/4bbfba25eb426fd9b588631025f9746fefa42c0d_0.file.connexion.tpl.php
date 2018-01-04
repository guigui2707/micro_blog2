<?php
/* Smarty version 3.1.30, created on 2018-01-04 10:32:30
  from "C:\wamp64\www\micro_blog\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e02be8cc046_19726177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbfba25eb426fd9b588631025f9746fefa42c0d' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\connexion.tpl',
      1 => 1515060171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a4e02be8cc046_19726177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h1>Espace connexion </h1>

	<!-- Formulaire de connexion -->
	<form action="connexion.php" method="post">

		<!-- email -->
        <p id="mail">Email</p>
        <input type="email" id="email" class="form-control" name="email" placeholder="Email">
        
        <!-- Mot de passe -->       
        <p id="password">Mot de passe</p>
        <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
        
                          
        <!-- Bouton -->
        <button class="btn btn-success" type="submit">Connexion</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
