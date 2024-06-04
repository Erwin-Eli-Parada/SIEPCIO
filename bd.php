<?php
    $servidor="localhost";
    $baseDatos="sie";
    $usuario="root";
    $contrasenia="";

    try{
        $conexion= new mysqli($servidor,$usuario,$contrasenia,$baseDatos);
    }catch(Exception $e){
        $e->getMessage();
    }
    
    mysqli_set_charset($conexion,"utf8");
?>