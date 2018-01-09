{include file='includes/haut.tpl'}


<!-- Seul les membres connectés peuvent voir la zone de message-->
{if $nom != ""} 
  <div class="row">              
  	<form method="post" action="message.php">
  		<div class="col-sm-10">  
  			<div class="form-group">
  				<textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>  					
  			</div>
  		</div>

  		<div class="col-sm-2">
  			<button type="submit"  class="btn btn-success btn-lg">Envoyer</button>
  		</div>
  	</form>
  </div>
{/if}

<!-- Affichage du contenu des messages -->
{foreach from=$tableau item=donnees}
      <!-- Contenu et affichage du message -->
      <blockquote>
          <p>{$donnees.contenu}</p>
          <footer> Message posté le {$donnees.date} par {$donnees.nom} </footer>
          </br>
          <!-- Seul l'auteur du message ou l'administrateur peut modifier et supprimer le message-->
          {if $donnees.nom == $nom || $nom=="Administrateur"}
              <a href="modifier.php?id={$donnees.idMessage}" class="btn btn-primary" >Modifier</a>
              <a href="supprimer.php?id={$donnees.idMessage}" class="btn btn-danger btn-default">Supprimer</a>
          {/if}
      </blockquote>

{/foreach}


{include file='includes/bas.tpl'}

