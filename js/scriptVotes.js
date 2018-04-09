
    $(function(){
  
    $('.buttonVote').click(function(){
      var idCpt=this.id;
      $.ajax({
         url : 'vote.php', // La ressource ciblée
         type : 'GET', // Le type de la requête HTTP
         data:{id:this.id},
         dataType: 'html',
          success : function(data)
          {
            document.getElementById("nb"+idCpt).innerHTML=data+" like(s)";
            document.getElementById(idCpt).disabled=true;
          }
    });
  });
  })
