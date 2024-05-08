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
        print_r($e);
    }

    if (!empty($filas)) {
        // Iterar sobre los resultados y mostrarlos en la tabla
        foreach ($filas as $fila) {
            echo "<tr>
                    <td>" . $fila["nombre_localidad"] . "</td>
                    <td>" . $fila["acceso_serv_salud"] . "</td>
                    <td>" . $fila["econo_activos"] . "</td>
                    <td>" . $fila["viviendas_hab"] . "</td>
                    <td>" . $fila["viviendas_hab_sin_serv"] . "</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay datos</td></tr>";
    }
}
