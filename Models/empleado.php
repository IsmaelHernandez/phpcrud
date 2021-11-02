<?php

class Empleado {

    public $id;
    public $nombre;
    public $apellido;
    public $edad;
    public $email; 


    public function __construct($id, $nombre, $apellido, $edad, $email)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->email=$email;
    } 

    public static function consultar(){
        $listaEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM tb_empleados");

        foreach($sql->fetchAll() as $empleado){

            $listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellido'],$empleado['edad'],$empleado['email']);
        }

        return $listaEmpleados;

    }


    public static function crear($nombre, $apellido, $edad, $email){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO tb_empleados(nombre, apellido, edad, email) VALUES(?,?,?,?)");
        $sql->execute(array($nombre, $apellido, $edad, $email));
    }
}

?>