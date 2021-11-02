<?php

class ControllerPaginas {
    public function inicio(){
        include_once("Views/paginas/inicio.php");
    }
    public function error(){
        include_once("Views/paginas/error.php");
    }
}

?>