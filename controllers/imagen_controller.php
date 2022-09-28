<?php
require_once("models/imagen_model.php");
class imagen_controllers
{

    public static function Mostrar()
    {
        $Imagen[] = new imagen_models(1,"Montaña","imgs/imagen1.jpg");
        $Imagen[] = new imagen_models(2,"Nevado","imgs/imagen2.jpg");
        $Imagen[] = new imagen_models(3,"Dinosaurio","imgs/imagen3.jpg");
        $Imagen[] = new imagen_models(4,"Colores","imgs/imagen4.jpg");
        $Imagen[] = new imagen_models(5,"Link","imgs/imagen5.jpg");
        
        return $Imagen;
    }
}