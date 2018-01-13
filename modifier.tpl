{include file='includes/haut.tpl'}

<!-- Seul les membres connectés peuvent voir la zone de message-->
{if $nom != ""} 
  <div class="row">              
  	<form method="POST" action="requeteModif.php?idMessageModif={$idMessageModif}">
  		<div class="col-sm-10">  
  			<div class="form-group">
  				<textarea id="messageModif" name="messageModif" class="form-control">{$contenuMessage}</textarea>        
  			</div>
  		</div>

  		<div class="col-sm-2">
  			<button type="submit"  class="btn btn-success btn-lg">Modifier</button>
  		</div>

  	</form>
  </div>
{/if}



{include file='includes/bas.tpl'}