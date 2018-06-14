<?php

class vistasModelo {

    public function obtener_vistas_modelo($vistas) {
        
            $listaBlanca = ["prueba", "prueba2"];
            if (in_array($vistas, $listaBlanca)) {
                if (is_file("./vistas/contenidos/" . $vistas . "-vista.php")) {
                    $contenido = "./vistas/contenidos/" . $vistas . "-vista.php";
                } else {
                    $contenido = "login";
                }
            } else {
                $contenido = "login";
            }
        
        return $contenido;
    }

}
