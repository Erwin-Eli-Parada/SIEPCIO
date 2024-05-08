<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT DISTINCT nombre_localidad, acceso_serv_salud, econo_activos, viviendas_hab, viviendas_hab_sin_serv FROM localidad l JOIN situacion_pob s ON l.clave_loc = s.clave_loc JOIN municipio m ON m.clave_mun = l.clave_num
        where m.tipo='Indigena'";
    } else {
        $sql = "SELECT DISTINCT nombre_localidad, acceso_serv_salud, econo_activos, viviendas_hab, viviendas_hab_sin_serv FROM localidad l JOIN situacion_pob s ON l.clave_loc = s.clave_loc WHERE l.clave_num='$claveMunicipio'";
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
    function localidad($n)
    {
        return ($n["nombre_localidad"]);
    }
    function ass($n)
    {
        return ($n["acceso_serv_salud"]);
    }
    function ea($n)
    {
        return ($n["econo_activos"]);
    }
    function vh($n)
    {
        return ($n["viviendas_hab"]);
    }
    function vhss($n)
    {
        return ($n["viviendas_hab_sin_serv"]);
    }
    $valorLocalidad2 = array_map("localidad", $filas);
    $valorass = array_map("ass", $filas);
    $valorea = array_map("ea", $filas);
    $valorvh = array_map("vh", $filas);
    $valorvhss = array_map("vhss", $filas);
    $data = array(
        'labels' => $valorLocalidad2,
        'datasets' => array(
            array(
                'label' => '# Viviendas con acceso al servicio de salud',
                'data' => $valorass,
                'borderWidth' => 1,
                'backgroundColor' => "#DBAB74"
            ),
            array(
                'label' => '# Vivendas con acceso a la educación',
                'data' => $valorea,
                'borderWidth' => 1,
                'backgroundColor' => "#74BCDB"
            ),
            array(
                'label' => '# Viviendas habitadas',
                'data' => $valorvh,
                'borderWidth' => 1,
                'backgroundColor' => "#D274DB"
            ),
            array(
                'label' => '# Viviendas habitadas sin servicios basicos',
                'data' => $valorvhss,
                'borderWidth' => 1,
                'backgroundColor' => "#748186"
            )
        )
    );
    echo json_encode($data);
}
