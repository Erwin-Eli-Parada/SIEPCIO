<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_localidad, poblacion_fem_3_5, poblacion_fem_6_11, poblacion_fem_12_14, poblacion_fem_15_49, poblacion_fem_60_mas FROM localidad l JOIN mujeres m ON l.clave_loc = m.clave_loc";
    } else {
        $sql = "SELECT nombre_localidad, poblacion_fem_3_5, poblacion_fem_6_11, poblacion_fem_12_14, poblacion_fem_15_49, poblacion_fem_60_mas FROM localidad l JOIN mujeres m ON l.clave_loc = m.clave_loc WHERE l.clave_num = '$claveMunicipio'";
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

    function nombre_localidad($n)
    {
        return ($n["nombre_localidad"]);
    }
    function poblacion_fem_3_5($n)
    {
        return ($n["poblacion_fem_3_5"]);
    }
    function poblacion_fem_6_11($n)
    {
        return ($n["poblacion_fem_6_11"]);
    }
    function poblacion_fem_12_14($n)
    {
        return ($n["poblacion_fem_12_14"]);
    }
    function poblacion_fem_15_49($n)
    {
        return ($n["poblacion_fem_15_49"]);
    }
    function poblacion_fem_60_mas($n)
    {
        return ($n["poblacion_fem_60_mas"]);
    }
    $valorLocalidad = array_map("nombre_localidad", $filas);
    $valorPob3_5 = array_map("poblacion_fem_3_5", $filas);
    $valorPob6_11 = array_map("poblacion_fem_6_11", $filas);
    $valorPob12_14 = array_map("poblacion_fem_12_14", $filas);
    $valorPob15_49 = array_map("poblacion_fem_15_49", $filas);
    $valorPob60 = array_map("poblacion_fem_60_mas", $filas);

    $data = array(
        'labels' => $valorLocalidad,
        'datasets' => array(
            array(
                'label' => '# Mujeres de 3 a 5 años',
                'data' => $valorPob3_5,
                'borderWidth' => 1
            ),
            array(
                'label' => '# Mujeres de 6 a 11 años',
                'data' => $valorPob6_11,
                'borderWidth' => 1
            ),
            array(
                'label' => '# Mujeres de 12 a 14 años',
                'data' => $valorPob12_14,
                'borderWidth' => 1
            ),
            array(
                'label' => '# Mujeres de 15 a 49 años',
                'data' => $valorPob15_49,
                'borderWidth' => 1
            ),
            array(
                'label' => '# Mujeres de 60 y más años',
                'data' => $valorPob60,
                'borderWidth' => 1
            )
        )
    );
    echo json_encode($data);
}
