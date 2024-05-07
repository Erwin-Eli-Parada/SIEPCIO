<?php
include("../../bd.php");

if (isset($_POST['nombreRegion'])) {
    $nombreRegion = $_POST['nombreRegion'];
    // print_r($nombreRegion);
    if ($nombreRegion === '') {
        $sql = "SELECT nombre_municipio, SUM(poblacion_total), SUM(poblacion_fem), SUM(poblacion_mas), SUM(poblacion_ind), SUM(poblacion_afro) FROM municipio JOIN localidad ON clave_num = clave_mun GROUP BY nombre_municipio";
    } else {
        $sql = "SELECT nombre_municipio, SUM(poblacion_total), SUM(poblacion_fem), SUM(poblacion_mas), SUM(poblacion_ind), SUM(poblacion_afro) FROM municipio JOIN localidad ON clave_num = clave_mun WHERE region = '$nombreRegion' GROUP BY nombre_municipio";
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
    function onlyName($n)
    {
        return ($n["nombre_municipio"]);
    }
    function onlyfem($n)
    {
        return ($n["SUM(poblacion_fem)"]);
    }
    function onlyMas($n)
    {
        return ($n["SUM(poblacion_mas)"]);
    }
    $valorMunicipio = array_map("onlyName", $filas);
    $valorFem = array_map("onlyFem", $filas);
    $valorMas = array_map("onlyMas", $filas);
    $data = array(
        'labels' => $valorMunicipio,
        'datasets' => array(
            array(
                'label' => '# Hombres',
                'data' => $valorMas,
                'borderWidth' => 1,
            ),
            array(
                'label' => '# Mujeres',
                'data' => $valorFem,
                'borderWidth' => 1,
            )
        )
    );
    echo json_encode($data);
}
