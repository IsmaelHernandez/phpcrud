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
            header("Location:./?controlador=empleados&accion=inicio");

        }
        

        include_once("Views/empleados/crear.php");

    }
    public function editar(){


        if($_POST){

            
             $id=$_POST['id'];
             $nombre=$_POST['nombre'];
             $apellido=$_POST['apellido'];
             $edad=$_POST['edad'];
             $email=$_POST['email'];

             Empleado::editar($id,$nombre,$apellido,$edad,$email);
        }
        $id=$_GET['id'];

        $empleado=(Empleado::buscar($id));

        include_once("Views/empleados/editar.php");

    }

    public function borrar(){
        print_r($_GET);

        $id=$_GET['id'];
        
        Empleado::borrar($id);
        header("Location:./?controlador=empleados&accion=inicio");

    }
}

?>