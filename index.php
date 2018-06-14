<?php
require 'system/config.php';


require_once './controladores/vistasControlador.php';

$plantilla=new vistasControlador();
$plantilla->obtener_plantilla_controlador();