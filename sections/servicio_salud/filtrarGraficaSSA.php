<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT servicio_salud, sum(porcentaje) as porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.tipo = 'Afro' group by servicio_salud";
    } else {
        $sql = "SELECT servicio_salud, porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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

    function servicio_salud($n)
    {
        return ($n["servicio_salud"]);
    }
    function porcentaje($n)
    {
        return ($n["porcentaje"]);
    }
    $valorSS = array_map("servicio_salud", $filas);
    $valorPorcentaje = array_map("porcentaje", $filas);

    $data = array(
        'labels' => $valorSS,
        'datasets' => array(
            array(
                'label' => '% Personas',
                'data' => $valorPorcentaje,
                'borderWidth' => 1,
            )
        )
    );
    echo json_encode($data);
}
