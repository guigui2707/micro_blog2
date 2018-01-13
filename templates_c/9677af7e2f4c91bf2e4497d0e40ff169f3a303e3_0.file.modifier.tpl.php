<?php
/* Smarty version 3.1.30, created on 2018-01-13 19:10:16
  from "C:\wamp64\www\micro_blog\modifier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a5998ccefb2_18354001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9677af7e2f4c91bf2e4497d0e40ff169f3a303e3' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\modifier.tpl',
      1 => 1515866805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a5a5998ccefb2_18354001 (Smarty_Internal_Template $_smarty_tpl) {
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
