<?php

//clase controlador principal
//se encarga de cargar los modelos y vistas
class Controlador{
    //cargar modelo
    public function modelo($modelo){
        require_once '../app/modelos/' .$modelo . '.php';
        return new $modelo();

    }
    //cargar vista
    public function vista($vista, $datos = []){
        //revisar si existe el archivo de vista
        if (file_exists('../app/vistas/'. $vista . '.php')){
            require_once '../app/vistas/'. $vista . '.php';
        }else{
            //si la vista no existe
            die('la vista no existe');
        }
        
    }

}

?>
