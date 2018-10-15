$("#tipo_usuario").on("change",function () {
 $("#tipo_usuario").each(function(){

       valor = $(this).val();
       $.post("ad.php", { tipo_usuario: valor }, function(data){

       $("#tipo").val(data);
           
         });
      });
});
