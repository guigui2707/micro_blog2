<?php
/* Smarty version 3.1.30, created on 2018-01-13 19:10:28
  from "C:\wamp64\www\micro_blog\recherche.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a59a4653af7_69571506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b10b945762e03e102e5229220111ecb5d16ba8b' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\recherche.tpl',
      1 => 1515870423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a5a59a4653af7_69571506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php ob_start();
echo $_smarty_tpl->tpl_vars['nbResultat']->value;
$_prefixVariable1=ob_get_clean();
if (($_prefixVariable1 == 0)) {?> 
    <h2 style="text-align:center"> Nous avons trouvé aucun résultat à votre recherche</h2>
<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['nbResultat']->value;
$_prefixVariable2=ob_get_clean();
if (($_prefixVariable2 == 1)) {?>
  <h1 style="text-align:center"> Nous avons trouvé <?php echo $_smarty_tpl->tpl_vars['nbResultat']->value;?>
 résultat à votre recherche : </h1>
<?php } else { ?>
  <h1 style="text-align:center"> Nous avons trouvé <?php echo $_smarty_tpl->tpl_vars['nbResultat']->value;?>
 résultats à votre recherche : </h1>
<?php }}?>

<!-- Affichage du contenu des messages -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableau']->value, 'donnees');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->value) {
?>
      <!-- Contenu et affichage du message -->
      <blockquote>
          <p><?php echo $_smarty_tpl->tpl_vars['donnees']->value['contenu'];?>
</p>
          <footer> Message posté le <?php echo $_smarty_tpl->tpl_vars['donnees']->value['date'];?>
 par <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nom'];?>
 </footer>
          </br>
          <!-- Seul l'auteur du message ou l'administrateur peut modifier et supprimer le message-->
          <?php if ($_smarty_tpl->tpl_vars['donnees']->value['nom'] == $_smarty_tpl->tpl_vars['nom']->value || $_smarty_tpl->tpl_vars['nom']->value == "Administrateur") {?>
              <a href="modifier.php?idMessageModif=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
" class="btn btn-primary" >Modifier</a> <!-- On envoit un parametre message  -->
              <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
" class="btn btn-danger btn-default">Supprimer</a>
          <?php }?>
      </blockquote>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  <!-- Redirection vers l'accueil -->
  <a style="margin-top: 30px" id="connexion" class="btn btn-success" href="index.php">Retour à l'accueil</a>
  



<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
