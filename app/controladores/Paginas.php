<?php

class Paginas extends Controlador{
    public function __construct(){
        //echo 'Controlador paginas cargar';
    }
    public function index(){
        $datos=[
            'titulo' => 'Bienvenidos a Computación en el Servidor'            
        ];
        $this->vista('paginas/inicio', $datos);

    }
    
}

?>