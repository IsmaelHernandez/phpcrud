<?php
// echo $controlador;
// echo $accion;

include_once("Controllers/controller_".$controlador.".php");

$objControlador="Controller".ucfirst($controlador);

//instanciamos al controller controlador-paginas
$controlador = new $objControlador();
//accede a inicio
$controlador->$accion();

?>