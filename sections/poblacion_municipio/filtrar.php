<?php
include("../../bd.php");

if (isset($_POST['nombreRegion'])) {
    $nombreRegion = $_POST['nombreRegion'];
    // print_r($nombreRegion);
    if ($nombreRegion === '') {
        $sql = "SELECT nombre_municipio, analfabetismo, tipo FROM municipio";
    } else {
        $sql = "SELECT nombre_municipio, analfabetismo, tipo FROM municipio WHERE region = '$nombreRegion'";
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
                    <td>" . $fila["analfabetismo"] . "</td>
                    <td>" . $fila["tipo"] . "</td>
                 </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay datos</td></tr>";
    }
}
