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
        print_r($e);
    }

    if (!empty($filas)) {
        // Iterar sobre los resultados y mostrarlos en la tabla
        foreach ($filas as $fila) {
            echo "<tr>
                <td>" . $fila["nombre_localidad"] . "</td>
                <td>" . $fila["poblacion_fem_3_5"] . "</td>
                <td>" . $fila["poblacion_fem_6_11"] . "</td>
                <td>" . $fila["poblacion_fem_12_14"] . "</td>
                <td>" . $fila["poblacion_fem_15_49"] . "</td>
                <td>" . $fila["poblacion_fem_60_mas"] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay datos</td></tr>";
    }
}
