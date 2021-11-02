<?php

class ControllerEmpleados {
    
    public function inicio(){

        include_once("Views/empleados/inicio.php");
        
    }
    public function create(){

        include_once("Views/empleados/create.php");

    }
    public function edit(){

        include_once("Views/empleados/edit.php");
        
    }
}

?>