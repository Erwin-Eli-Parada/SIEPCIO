<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_municipio, actividad_econom, cantidad_m FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE cantidad_m > 0  and m.tipo = \"Indigena\"";
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

    function actividad_econom_fem_ind($n)
    {
        return ($n["actividad_econom"]);
    }
    function cantidad_fem_ind($n)
    {
        return ($n["cantidad_m"]);
    }
    $valorAEMI = array_map("actividad_econom_fem_ind", $filas);
    $valorCantidadAEMI = array_map("cantidad_fem_ind", $filas);

    $data = array(
        'labels' => $valorAEMI,
        'datasets' => array(
            array(
                'label' => '# Personas',
                'data' => $valorCantidadAEMI,
                'borderWidth' => 1,
                'backgroundColor' => "#D6A09F"
            )
        )
    );
    echo json_encode($data);
}
