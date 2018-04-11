
    $(function(){
  
    $('.buttonLireLaSuite').click(function(){
      var idCpt=this.id;
      $.ajax({
         url : 'lireLaSuite.php', 
         type : 'GET', 
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

