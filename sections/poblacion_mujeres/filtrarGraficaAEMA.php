<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT actividad_econom, sum(cantidad_m) as cantidad_m FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE cantidad_m > 0  and m.tipo = \"Afro\" group by actividad_econom";
    } else {
        $sql = "SELECT nombre_municipio, actividad_econom, cantidad_m FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE cantidad_m > 0  and m.clave_mun = $claveMunicipio";
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

    function actividad_econom_fem_afro($n)
    {
        return ($n["actividad_econom"]);
    }
    function cantidad_fem_afro($n)
    {
        return ($n["cantidad_m"]);
    }
    $valorAEMA = array_map("actividad_econom_fem_afro", $filas);
    $valorCantidadAEMA = array_map("cantidad_fem_afro", $filas);

    $data = array(
        'labels' => $valorAEMA,
        'datasets' => array(
            array(
                'label' => '# Personas',
                'data' => $valorCantidadAEMA,
                'borderWidth' => 1,
                'backgroundColor' => "#9FBED7"
            )
        )
    );
    echo json_encode($data);
}
