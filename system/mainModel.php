<?php

if($peticionAjax){
    require_once "../system/configDB.php";
}else{
    require_once "./system/configDB.php";
}

class mainModel{
    //coneccion de base de datos
    protected function conectar(){
        $enlace=new PDO(SGDB,username,password);
        return $enlace;
    }
    
    //consultas simples
    protected function ejecutar_consulta_simple($query) {
        $respuesta= self::conectar()->prepare($query);
        $respuesta->execute();
        return $respuesta;
    }
}