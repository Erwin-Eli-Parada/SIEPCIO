<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_localidad, poblacion_fem, poblacion_mas FROM localidad";
    } else {
        $sql = "SELECT nombre_localidad, poblacion_fem, poblacion_mas FROM localidad WHERE clave_num='$claveMunicipio'";
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
    function onlyfem($n)
    {
        return ($n["poblacion_fem"]);
    }
    function onlyMas($n)
    {
        return ($n["poblacion_mas"]);
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
