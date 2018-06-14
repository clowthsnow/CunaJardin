<?php
require 'system/config.php';
require 'system/core/Router.php';

require_once './controladores/vistasControlador.php';

$plantilla=new vistasControlador();
$plantilla->obtener_plantilla_controlador();