<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT asistencia, sum(porcentaje) as porcentaje FROM educacion e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE m.tipo = 'Afro' group by asistencia";
    } else {
        $sql = "SELECT nombre_municipio, asistencia, porcentaje FROM educacion e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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

    function asistencia($n)
    {
        return ($n["asistencia"]);
    }
    function porcentaje($n)
    {
        return ($n["porcentaje"]);
    }
    $valorAsistenciaAfro = array_map("asistencia", $filas);
    $valorPorcentajeAfro = array_map("porcentaje", $filas);

    $data = array(
        'labels' => $valorAsistenciaAfro,
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
