<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_municipio, actividad_econom, cantidad_m FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun WHERE cantidad_m > 0  and m.tipo = \"Afro\"";
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
        print_r($e);
    }

    if (!empty($filas)) {
        // Iterar sobre los resultados y mostrarlos en la tabla
        foreach ($filas as $fila) {
            echo "<tr>
                <td>" . $fila["nombre_municipio"] . "</td>
                <td>" . $fila["actividad_econom"] . "</td>
                <td>" . $fila["cantidad_m"] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay datos</td></tr>";
    }
}
