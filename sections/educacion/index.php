<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DE ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, asistencia, porcentaje FROM educacion e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE nombre_municipio = 'abejones'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function municipio($n)
                {
                    return ($n["nombre_municipio"]);
                }
                function asistencia($n)
                {
                    return ($n["asistencia"]);
                }
                function porcentaje($n)
                {
                    return ($n["porcentaje"]);
                }
                $valorMunicipio = array_map("municipio", $filas);
                $valorAsistencia = array_map("asistencia", $filas);
                $valorPorcentaje = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["asistencia"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay datos</td></tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaEducacion'></canvas>
    </div>

</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php") ?>