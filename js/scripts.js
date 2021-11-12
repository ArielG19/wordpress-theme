jQuery(function ($) {
    $(".menu-icon").on("click",function(){
       // console.log('holaaaaaaaaa');
        //agregamos la clase
        $("nav ul").toggleClass("showing");
      });

      //scroll effect
       $(window).on("scroll",function(){
        if($(window).scrollTop()>200){
          $('nav').addClass('black')
        }
        else{
          $('nav').removeClass('black')
        }
        });
        $(window).resize(function(){

          if($(window).width() < 600){
            //console.log($(window).width());
            $('nav').removeClass('menu-principal');
           
            
          }else{
          
            //console.log($(window).width());
           
          }
        
        });

	
});
