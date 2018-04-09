
 $(document).ready(function() {
	$("#formulaireInscription").submit(function() {

		var controle = false ;
		var mail = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
		var mdp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
		var tel = new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
		



		if( $(".nomI").val().length<3)
		{					
			$("#erreurnom").html("<p class='alert alert-danger'>Nom incorrect</p>") ;
			controle = true ;
		}
		else {
					
			$("#erreurnom").html("") ;
		}
		if( mdp.test($(".mdpI").val()))
		{			
			$("#erreurmdp").html("") ;
		}
		else{
			
			$("#erreurmdp").html("<p class='alert alert-danger'>Mot de passe incorrect</p>") ;
			controle = true ;
		}
		if( tel.test($(".telI").val()))
		{			
			$("#erreurtel").html("") ;
		}
		else{
			
			$("#erreurtel").html("<p class='alert alert-danger'>Numéro de téléphone non valide</p>") ;
			controle = true ;
		}

		

		if( mail.test($(".emailI").val()))
		{
			
			$("#erreurmail").html("") ;
		}
		else{
			
			$("#erreurmail").html("<p class='alert alert-danger'>Adresse mail non valide</p>") ;
			controle = true ;
		}



		if(controle==false)
		{
			$("#authentification").html("<p class='alert alert-success'>Compte créé avec succès ! </br> Vous pouvez vous authentifier</p>") ;
		}

		var pb=' <?PHP echo $probleme; ?>';
		if(pb==true)
		{
			$("#authentification").html("<p class='alert alert-danger'>Nom ou e-mail déjà utilisé </br> Veuillez réessayer</p>") ;
			controle=true;
		}

		//s'il y a une erreur ne pas donner suite 
		if (controle == true) return false ;

	
	});

	

	$(".nomI").keyup(function(){
			if ($(".nomI").val().length>2)
			{
				$(this).css("border","2px solid green");
			}
			else {
				$(this).css("border","2px solid red");
			}
		});


		$(".mdpI").keyup(function(){
		var mdp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
			if( mdp.test($(".mdpI").val()))

				{
					$(this).css("border","2px solid green");
				}
				else {
					$(this).css("border","2px solid red");
				}
			});

	$(".emailI").keyup(function(){
	var mail = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
		if( mail.test($(".emailI").val()))

			{
				$(this).css("border","2px solid green");
			}
			else {
				$(this).css("border","2px solid red");
			}
		});

	$(".telI").keyup(function(){
	var tel = new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
		if( tel.test($(".telI").val()))

			{
				$(this).css("border","2px solid green");
			}
			else {
				$(this).css("border","2px solid red");
			}
		});


});

	 $(document).ready(function() {
	$("#formulaireConnexion").submit(function() {
		var controleCo = false ;

		var mdp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
		var mail = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i')

		if( mdp.test($(".mdpCo").val()))
		{
			
			$("#erreurmdpCo").html("") ;
		}
		else{
			
			$("#erreurmdpCo").html("<p class='alert alert-danger'>Mot de passe non valide</p>") ;
			controleCo = true ;
		}
		
		if( mail.test($(".emailCo").val()))
		{
			
			$("#erreurmailCo").html("") ;
		}
		else{
			
			$("#erreurmailCo").html("<p class='alert alert-danger'>Adresse mail non valide</p>") ;
			controleCo = true ;
		}

		if(controleCo==false)
		{
			$("#connexionsuccess").html("<p class='alert alert-success'>Vous êtes maintenant connecté</p>") ;
		}


		if (controleCo == true) return false ;
	});


		$(".mdpCo").keyup(function(){
		var mdp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
			if( mdp.test($(".mdpCo").val()))

				{
					$(this).css("border","2px solid green");
				}
				else {
					$(this).css("border","2px solid red");
				}
			});

	$(".emailCo").keyup(function(){
	var mail = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i')
		if( mail.test($(".emailCo").val()))

			{
				$(this).css("border","2px solid green");
			}
			else {
				$(this).css("border","2px solid red");
			}
		});
});

	