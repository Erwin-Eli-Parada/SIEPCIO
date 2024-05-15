<?php
include("../../bd.php");

if (isset($_POST['claveMunicipio'])) {
    $claveMunicipio = $_POST['claveMunicipio'];
    // print_r($nombreRegion);
    if ($claveMunicipio === '') {
        $sql = "SELECT nombre_municipio, servicio_salud, porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.tipo='Afro'";
    } else {
        $sql = "SELECT nombre_municipio, servicio_salud, porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.clave_mun = $claveMunicipio";
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
                <td>" . $fila["servicio_salud"] . "</td>
                <td>" . $fila["porcentaje"] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay datos</td></tr>";
    }
}
