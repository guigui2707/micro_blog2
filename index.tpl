{include file='includes/haut.tpl'}


<!-- Seul les membres connectés peuvent voir la zone de message-->
{if $nom != ""} 
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
{/if}


<!-- Affichage du contenu des messages par un tableau -->
{foreach from=$tableau item=donnees}
      <!-- Contenu et affichage du message -->
      <blockquote>
          <p>{$donnees.contenu}</p>
          <footer> Message posté le {$donnees.date} par {$donnees.nom} </footer>
          </br>
          <!-- Seul l'auteur du message ou l'administrateur peut modifier et supprimer le message-->
          {if $donnees.nom == $nom || $nom=="Administrateur"}
              <a href="modifier.php?idMessageModif={$donnees.idMessage}" class="btn btn-primary" >Modifier</a>
              <a href="supprimer.php?id={$donnees.idMessage}" class="btn btn-danger btn-default">Supprimer</a>
          {/if}
      </blockquote>

{/foreach}


<!-- PAGINATION DES MESSAGES -->
<div class="col-sm-5">  
    <div style="font-size: 18px" class="pagination">

      <!-- Affichage du bouton précédent -->
      {if $smarty.get.page != 1}
        <li>
          <a href="index.php?page={$smarty.get.page-1}">Précedent</a>
        </li>
      {/if}

      <!-- Affichage des numéros de page -->
      {for $cpt=1 to $nbPages}
        <li>
            <a href="index.php?page={$cpt}">{$cpt}</a>
        </li>
      {/for}
      

      <!-- Affichage du bouton suivant -->
      {if $smarty.get.page < $nbPages}        
          <li>            
            <a href="index.php?page={$smarty.get.page+1}"> Suivant </a>
          </li>        
      {/if}     

    </div>    
</div>



{include file='includes/bas.tpl'}

