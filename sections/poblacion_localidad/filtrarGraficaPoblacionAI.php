<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_localidad, poblacion_total, poblacion_ind, poblacion_afro FROM localidad";
    } else {
        $sql = "SELECT nombre_localidad, poblacion_total, poblacion_ind, poblacion_afro FROM localidad WHERE clave_num = '$claveMunicipio'";
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
        return ($n["nombre_localidad"]);
    }
    function onlyInd($n)
    {
        return ($n["poblacion_ind"]);
    }
    function onlyAfro($n)
    {
        return ($n["poblacion_afro"]);
    }
    function pobTotal($n)
    {
        return ($n["poblacion_total"]);
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
