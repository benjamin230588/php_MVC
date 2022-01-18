<?php


include_once("modelo/usuario.php");

 class ControladorUsuario
{
    public function inicio(){

        $valormodelo = usuario :: inicio();
        include_once("vista/empleado/inicio.php");
    }

    public function crear(){
        include_once("vista/empleado/crear.php");
    }


}

?>
