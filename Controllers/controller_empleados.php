<?php

include_once("conexion.php");
include_once("Models/empleado.php");

BD::crearInstancia();

class ControllerEmpleados {
    
    public function inicio(){

        $empleados = Empleado::consultar();

        include_once("Views/empleados/inicio.php");
        
    }
    public function crear(){

        //cachar los datos mediante peticion post
        if($_POST){

            // print_r($_POST);
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $edad=$_POST['edad'];
            $email=$_POST['email'];
            Empleado::crear($nombre, $apellido, $edad, $email);

        }

        include_once("Views/empleados/crear.php");

    }
    public function edit(){

        include_once("Views/empleados/editar.php");

    }
}

?>