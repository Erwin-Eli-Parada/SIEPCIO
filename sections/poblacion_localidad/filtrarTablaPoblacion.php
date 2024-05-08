<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_localidad, poblacion_total, poblacion_fem, poblacion_mas, poblacion_ind, poblacion_afro FROM localidad";
    } else {
        $sql = "SELECT nombre_localidad, poblacion_total, poblacion_fem, poblacion_mas, poblacion_ind, poblacion_afro FROM localidad WHERE clave_num='$claveMunicipio'";
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
                    <td>" . $fila["poblacion_total"] . "</td>
                    <td>" . $fila["poblacion_fem"] . "</td>
                    <td>" . $fila["poblacion_mas"] . "</td>
                    <td>" . $fila["poblacion_ind"] . "</td>
                    <td>" . $fila["poblacion_afro"] . "</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay datos</td></tr>";
    }
}
