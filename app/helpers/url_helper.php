<?php   
    //para redireccionar la página
    function redireccionar($pagina){
        header('location: '. RUTA_URL . $pagina);
    }