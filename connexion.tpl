{include file='includes/haut.tpl'}
	
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

{include file='includes/bas.tpl'}