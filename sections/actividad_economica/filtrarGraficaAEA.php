<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT actividad_econom, sum(cantidad) as cantidad FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE m.tipo = 'Afro' group by actividad_econom";
    } else {
        $sql = "SELECT actividad_econom, cantidad FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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

    function actividad_econom($n)
    {
        return ($n["actividad_econom"]);
    }
    function cantidad($n)
    {
        return ($n["cantidad"]);
    }
    $valorAE = array_map("actividad_econom", $filas);
    $valorCantidad = array_map("cantidad", $filas);

    $data = array(
        'labels' => $valorAE,
        'datasets' => array(
            array(
                'label' => '# Personas',
                'data' => $valorCantidad,
                'borderWidth' => 1,
            )
        )
    );
    echo json_encode($data);
}
