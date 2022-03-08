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

        //
        $(window).resize(function(){

          if($(window).width() < 600){
            //console.log($(window).width());
            $('nav').removeClass('menu-principal');
           
            
          }else{
          
            //console.log($(window).width());
           
          }
        
        });
        //agregando slider
        $('.listado-testimoniales').bxSlider({
          auto:true,
          mode:'fade',
          controls:false

        });

         //mapa leaflet
         const lat = $("#lat").val(), lng = $("#lng").val(), adress = $("#address").val();

         //condicion para validar que existan los datos
         if(lat && lng && adress){
           var map = L.map('mapa').setView([lat, lng], 13);
 
             L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                 attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
             }).addTo(map);
 
             //ping mapa
             L.marker([lat, lng]).addTo(map)
                 .bindPopup(adress)
                 .openPopup();
         }


        /*---------------------filtro select ajax----------------------*/
        $("#categoria-blog").change(function() {
          $.ajax({
              url: pg.ajaxurl,
              method: "POST",
              data: {
                  "action": "pgFiltroProductos",
                  "categoria": $(this).find(':selected').val()
              },
              beforeSend: function() {
                  $("#resultados-productos").html("Cargando...")
              },
              success: function(data) {
                  let html = ''
                  data.forEach(item => {
                      html += `
                          <div class="postBlog">
                            <div class="lista-postBlog"
                              <figure>${item.imagen}</figure>
                              <h4 class="text-center">
                                  <a href="${item.link}">${item.titulo}</a>
                              </h4>
                            </div>
                          </div>
                      `
                  })
  
                  $("#resultado-posts").html(html)
              },
              error: function(error) {
                  console.error(error)
              }
          })
      })
        /*---------------------filtro select ajax----------------------*/
});
