<?php
include("../../bd.php");

if (isset($_POST['nombreRegion'])) {
    $nombreRegion = $_POST['nombreRegion'];
    // print_r($nombreRegion);
    if ($nombreRegion === '') {
        $sql = "SELECT nombre_municipio, analfabetismo, tipo FROM municipio";
    } else {
        $sql = "SELECT nombre_municipio, analfabetismo, tipo FROM municipio WHERE region = '$nombreRegion'";
    }

    try {
        $resultado = $conexion->query($sql);
        // print_r($resultado);
        $filas = $resultado->fetch_all(MYSQLI_ASSOC);
        // print_r($filas);
    } catch (Exception $e) {
        $e->getMessage();
        // print_r($e);
    }
    function analfabetismo($n)
    {
        return ($n["analfabetismo"]);
    }
    function onlyName($n)
    {
        return ($n["nombre_municipio"]);
    }
    // print_r($filas);
    $valorMunicipio2 = array_map("onlyName", $filas);
    // print_r($valorMunicipio2);
    $valorAnalfabetismo2 = array_map("analfabetismo", $filas);
    $data = array(
        'labels'=>$valorMunicipio2, 
        'datasets'=>array(
            array('label'=>'# Porcentaje analfabetismo',
            'data'=>$valorAnalfabetismo2, 
            'borderWidth'=>1,
            'backgroundColor'=>"#A6DB74"
        )));
    echo json_encode($data);
    
}
