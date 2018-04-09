<?php
/* Smarty version 3.1.30, created on 2018-04-07 16:10:07
  from "C:\wamp64\www\tamere2\modifier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8ed5f591e15_41493207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7365098db7a28ae9a3d6cbcb2052050dbbb7fd0' => 
    array (
      0 => 'C:\\wamp64\\www\\tamere2\\modifier.tpl',
      1 => 1523087296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5ac8ed5f591e15_41493207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Seul les membres connectés peuvent voir la zone de message-->
<?php if ($_smarty_tpl->tpl_vars['nom']->value != '') {?> 
  <div class="row">              
  	<form method="POST" action="requeteModif.php?idMessageModif=<?php echo $_smarty_tpl->tpl_vars['idMessageModif']->value;?>
">
  		<div class="col-sm-10">  
  			<div class="form-group">
  				<textarea id="messageModif" name="messageModif" class="form-control"><?php echo $_smarty_tpl->tpl_vars['contenuMessage']->value;?>
</textarea>        
  			</div>
  		</div>

  		<div class="col-sm-2">
  			<button type="submit"  class="btn btn-success btn-lg">Modifier</button>
  		</div>

  	</form>
  </div>
<?php }?>



<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
