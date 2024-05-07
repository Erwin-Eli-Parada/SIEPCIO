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
    function onlyInd($n)
    {
        return ($n["SUM(poblacion_ind)"]);
    }
    function onlyAfro($n)
    {
        return ($n["SUM(poblacion_afro)"]);
    }
    function pobTotal($n)
    {
        return ($n["SUM(poblacion_total)"]);
    }
    $valorMunicipio = array_map("onlyName", $filas);
    $valorInd = array_map("onlyInd", $filas);
    $valorAfro = array_map("onlyAfro", $filas);
    $valorPobTotal = array_map("pobTotal", $filas);
    $data = array(
        'labels' => $valorMunicipio,
        'datasets' => array(
            array(
                'label' => '# Población Total',
                'data' => $valorPobTotal,
                'borderWidth' => 1,
                'backgroundColor'=> "#775B59"
            ),
            array(
                'label' => '# Indigenas',
                'data' => $valorInd,
                'borderWidth' => 1,
                'backgroundColor'=> "#81A094"
            ),
            array(
                'label' => '# Afromexicanos',
                'data' => $valorAfro,
                'borderWidth' => 1,
                'backgroundColor'=> "#9AE5E6"
            )
        )
    );
    echo json_encode($data);
}
