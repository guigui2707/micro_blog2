{include file='includes/haut.tpl'}


{if ({$nbResultat}==0)} 
    <h2 class="searchH2"> Nous avons trouvé aucun résultat à votre recherche</h2>
{else if ({$nbResultat}==1)}
  <h1 class="searchH2" > Nous avons trouvé {$nbResultat} résultat à votre recherche : </h1>
{else}
  <h1 class="searchH2"> Nous avons trouvé {$nbResultat} résultats à votre recherche : </h1>
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
              <a href="modifier.php?idMessageModif={$donnees.idMessage}" class="btn btn-primary" >Modifier</a> <!-- On envoit un parametre message  -->
              <a href="supprimer.php?id={$donnees.idMessage}" class="btn btn-danger btn-default">Supprimer</a>
          {/if}
      </blockquote>

{/foreach}

  <!-- Redirection vers l'accueil -->
  <a id="connexion" class="btn btn-success redirectionA" href="index.php">Retour à l'accueil</a>
  



{include file='includes/bas.tpl'}