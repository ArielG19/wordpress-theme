<?php 

    function mapaShortcode_func(){
        //obtenemos los datos de ubicacion acf-plugin
            $ubicacion = get_field('ubicacion');
        //var_dump($ubicacion);
            //creamos div donde se mostrara los datos del shortcode
            ?>
                <div class="ubicacion">
                    <input type="hidden" id="lat" value="<?php echo $ubicacion['lat'];?> ">
                    <input type="hidden" id="lng" value="<?php echo $ubicacion['lng'];?> ">
                    <input type="hidden" id="address" value="<?php echo $ubicacion['address'];?> ">
                    <div id="mapa"></div>
                </div>
            <?php
            
    }
    add_shortcode('mapa_shortcode','mapaShortcode_func');

?>