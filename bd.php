<?php
    $servidor="localhost";
    $baseDatos="sie";
    $usuario="root";
    $contrasenia="1234";

    try{
        $conexion= new mysqli($servidor,$usuario,$contrasenia,$baseDatos);
    }catch(Exception $e){
        $e->getMessage();
    }
    
?>