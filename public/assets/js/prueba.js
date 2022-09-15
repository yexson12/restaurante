
$(document).ready(function(){
  $("#botonocultamuestra").click(function(){
   $("#divocultamuestra").each(function() {
     displaying = $(this).css("display");
     if(displaying == "block") {
       $(this).fadeOut('slow',function() {
        $(this).css("display","none");
       });
     } else {
       $(this).fadeIn('slow',function() {
         $(this).css("display","block");
       });
     }
   });
  });
  });

  $(document).ready(function(){
  $("#botonocultamuestra").click(function(){
   $("#divocultamuestras").each(function() {
     displaying = $(this).css("display");
     if(displaying == "block") {
       $(this).fadeOut('slow',function() {
        $(this).css("display","none");
       });
     } else {
       $(this).fadeIn('slow',function() {
         $(this).css("display","block");
       });
     }
   });
  });
  });
