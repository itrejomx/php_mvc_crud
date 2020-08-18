<?php

// Función: Mapear la url ingresada
// Controlador -> Metodo -> Parametro
// ejemplo: articulo/actulizar/44 

class Core{
    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct(){
        $url=$this->getUrl();
        if(isset($url[0])){
            //buscar en controladores si existe
            if (file_exists('../app/controladores/'.ucwords($url[0]).'.php')){
                //si existe se usa como controlador
                $this->controladorActual = ucwords($url[0]);

                unset($url[0]);
            }
        }
        //requerir el controlador
        require_once '../app/controladores/'.$this->controladorActual .'.php';
        $this->controladorActual= new $this->controladorActual;
        
        //revisar si existe el método
        if (isset($url[1])){
            if (method_exists($this->controladorActual, $url[1])){
                $this->metodoActual = $url[1];
                unset($url[1]);
            }
        }
        //echo $this->metodoActual;

        //obtener parametros
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controladorActual, $this->metodoActual],$this->parametros);
    }

    
    public function getUrl(){
        //echo $_GET['url'];
        if (isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/'); 
            $url=filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

    }
}
?>