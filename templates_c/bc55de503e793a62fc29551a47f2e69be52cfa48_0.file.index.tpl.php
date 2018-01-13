<?php
/* Smarty version 3.1.30, created on 2018-01-13 19:09:46
  from "C:\wamp64\www\micro_blog\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a597a21d452_66004371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc55de503e793a62fc29551a47f2e69be52cfa48' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\index.tpl',
      1 => 1515870316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a5a597a21d452_66004371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- Seul les membres connectés peuvent voir la zone de message-->
<?php if ($_smarty_tpl->tpl_vars['nom']->value != '') {?> 
  <div class="row">              
    <form method="post" action="message.php">
      <div class="col-sm-10">  
        <div class="form-group">
          <textarea id="message" method="get" name="message" class="form-control" placeholder="Message"></textarea>         
        </div>
      </div>

      <div class="col-sm-2">
        <button type="submit"  class="btn btn-success btn-lg">Envoyer</button>
      </div>

    </form>
  </div>
<?php }?>



<!-- Affichage du contenu des messages par un tableau -->
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
" class="btn btn-primary" >Modifier</a>
              <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
" class="btn btn-danger btn-default">Supprimer</a>
          <?php }?>
      </blockquote>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
