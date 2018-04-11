
    $(function(){
  
    $('.buttonLireLaSuite').click(function(){
      var idCpt=this.id;
      $.ajax({
         url : 'lireLaSuite.php', // La ressource ciblée
         type : 'GET', // Le type de la requête HTTP
         data:{id:this.id},
         dataType: 'html',
          success : function(data)
          {
            $('#divARemplir'+idCpt).append(data);
            $('.buttonLireLaSuite').css('display','none');
            
          }
    });
  });
  })

