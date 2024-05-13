<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT transporte, sum(porcentaje) as porcentaje FROM transporte_escolar e JOIN municipio m ON e.clave_mun = m.clave_mun  WHERE m.tipo = 'Indigena' group by transporte";
    } else {
        $sql = "SELECT nombre_municipio, transporte, porcentaje FROM transporte_escolar e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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

    function transporte($n)
    {
        return ($n["transporte"]);
    }
    function porcentaje($n)
    {
        return ($n["porcentaje"]);
    }
    $valorTransporteInd = array_map("transporte", $filas);
    $valorPorcentajeInd = array_map("porcentaje", $filas);

    $data = array(
        'labels' => $valorTransporteInd,
        'datasets' => array(
            array(
                'label' => '# Transporte',
                'data' => $valorPorcentajeInd,
                'borderWidth' => 1,
            )
        )
    );
    echo json_encode($data);
}
