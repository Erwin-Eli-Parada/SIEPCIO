<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT carrera, sum(porcentaje) as porcentaje FROM carrera c JOIN municipio m ON c.clave_mun = m.clave_mun WHERE m.tipo = 'Afro' group by carrera";
    } else {
        $sql = "SELECT carrera, porcentaje FROM carrera c JOIN municipio m ON c.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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

    function carrera($n)
    {
        return ($n["carrera"]);
    }
    function porcentaje($n)
    {
        return ($n["porcentaje"]);
    }
    $valorCarreraAfro = array_map("carrera", $filas);
    $valorPorcentajeAfro = array_map("porcentaje", $filas);

    $data = array(
        'labels' => $valorCarreraAfro,
        'datasets' => array(
            array(
                'label' => '# Acceso',
                'data' => $valorPorcentajeAfro,
                'borderWidth' => 1,
            )
        )
    );
    echo json_encode($data);
}
