<?php
/* Smarty version 3.1.30, created on 2018-04-11 16:30:32
  from "C:\wamp64\www\micro_blog\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ace3828072e65_02933529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc55de503e793a62fc29551a47f2e69be52cfa48' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\index.tpl',
      1 => 1523391118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5ace3828072e65_02933529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- Seul les membres connectés peuvent voir la zone de message-->
<?php if ($_smarty_tpl->tpl_vars['nom']->value != '') {?> 
  <div class="row">              
    <form method="post" action="message.php">
      <div class="col-sm-10">  
        <div class="form-group">
          <textarea id="message" method="get" name="message" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
, postez votre message ici"></textarea>         
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
          <p id="divARemplir<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['contenu'];?>
</p>
          
          <?php if ($_smarty_tpl->tpl_vars['donnees']->value['afficherButton']) {?>
            <a id="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
" class="buttonLireLaSuite">Lire la suite </a>
          <?php }?>
        
          
          <footer> Message posté le <?php echo $_smarty_tpl->tpl_vars['donnees']->value['date'];?>
 par <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nom'];?>
 </footer>
          </br>
          <button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
" class="btn btn-success buttonVote ">Je like</button> 
           <span id="nb<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idMessage'];?>
"> <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nbVotes'];?>
 like(s)</span>
         </br> </br>

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



<!-- PAGINATION DES MESSAGES -->
<div class="col-sm-5">  
    <div  class="pagination">

      <!-- Affichage du bouton précédent -->
      <?php if ($_GET['page'] != 1) {?>
        <li>
          <a href="index.php?page=<?php echo $_GET['page']-1;?>
">Précedent</a>
        </li>
      <?php }?>

      <!-- Affichage des numéros de page -->
      <?php
$_smarty_tpl->tpl_vars['cpt'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['cpt']->step = 1;$_smarty_tpl->tpl_vars['cpt']->total = (int) ceil(($_smarty_tpl->tpl_vars['cpt']->step > 0 ? $_smarty_tpl->tpl_vars['nbPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbPages']->value)+1)/abs($_smarty_tpl->tpl_vars['cpt']->step));
if ($_smarty_tpl->tpl_vars['cpt']->total > 0) {
for ($_smarty_tpl->tpl_vars['cpt']->value = 1, $_smarty_tpl->tpl_vars['cpt']->iteration = 1;$_smarty_tpl->tpl_vars['cpt']->iteration <= $_smarty_tpl->tpl_vars['cpt']->total;$_smarty_tpl->tpl_vars['cpt']->value += $_smarty_tpl->tpl_vars['cpt']->step, $_smarty_tpl->tpl_vars['cpt']->iteration++) {
$_smarty_tpl->tpl_vars['cpt']->first = $_smarty_tpl->tpl_vars['cpt']->iteration == 1;$_smarty_tpl->tpl_vars['cpt']->last = $_smarty_tpl->tpl_vars['cpt']->iteration == $_smarty_tpl->tpl_vars['cpt']->total;?>
        <li>
            <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['cpt']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cpt']->value;?>
</a>
        </li>
      <?php }
}
?>

      

      <!-- Affichage du bouton suivant -->
      <?php if ($_GET['page'] < $_smarty_tpl->tpl_vars['nbPages']->value) {?>        
          <li>            
            <a href="index.php?page=<?php echo $_GET['page']+1;?>
"> Suivant </a>
          </li>        
      <?php }?>     

    </div>    
</div>



<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
