<?php 

//<?php
//

include_once("controlador/controlador_".$controlador.".php");

$objeto = "Controlador".ucfirst($controlador); 
$controlador = new $objeto();
$controlador ->$accion();

?> 