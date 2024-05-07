<?php
include("../../bd.php");

if (isset($_POST['nombreRegion'])) {
    $nombreRegion = $_POST['nombreRegion'];
    // print_r($nombreRegion);
    if ($nombreRegion === '') {
        $sql = "SELECT nombre_municipio, SUM(poblacion_total), SUM(poblacion_fem), SUM(poblacion_mas), SUM(poblacion_ind), SUM(poblacion_afro) FROM municipio JOIN localidad ON clave_num = clave_mun GROUP BY nombre_municipio";
    } else {
        $sql = "SELECT nombre_municipio, SUM(poblacion_total), SUM(poblacion_fem), SUM(poblacion_mas), SUM(poblacion_ind), SUM(poblacion_afro) FROM municipio JOIN localidad ON clave_num = clave_mun WHERE region = '$nombreRegion' GROUP BY nombre_municipio";
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
                <td>" . $fila["SUM(poblacion_total)"] . "</td>
                <td>" . $fila["SUM(poblacion_fem)"] . "</td>
                <td>" . $fila["SUM(poblacion_mas)"] . "</td>
                <td>" . $fila["SUM(poblacion_ind)"] . "</td>
                <td>" . $fila["SUM(poblacion_afro)"] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay datos</td></tr>";
    }
}
