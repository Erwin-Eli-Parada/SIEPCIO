<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">MUNICIPIOS CON VIOLENCIA DE GÉNERO</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Región</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, region FROM municipio WHERE violencia_genero = true";
                $sql2 = "SELECT COUNT(region) as numRegion, region FROM municipio WHERE violencia_genero = true GROUP BY region";
                try {
                    $resultado = $conexion->query($sql);
                    $resultado2 = $conexion->query($sql2);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    $filas2 = $resultado2->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function municipio($n)
                {
                    return ($n["nombre_municipio"]);
                }
                function region($n)
                {
                    return ($n["region"]);
                }
                function numRegion($n)
                {
                    return ($n);
                }
                // print_r($filas2);
                $valores = [0, 0, 0, 0, 0, 0, 0, 0];

                for ($i = 0; $i < sizeof($filas2); $i++) {
                    ($filas2[$i]["region"] == "VALLES CENTRALES") ? $valores[0] = $filas2[$i]["numRegion"] : $valores[0];
                    ($filas2[$i]["region"] == "COSTA") ? $valores[1] = $filas2[$i]["numRegion"] : $valores[1];
                    ($filas2[$i]["region"] == "MIXTECA") ? $valores[2] = $filas2[$i]["numRegion"] : $valores[2];
                    ($filas2[$i]["region"] == "ISTMO") ? $valores[3] = $filas2[$i]["numRegion"] : $valores[3];
                    ($filas2[$i]["region"] == "CAÑADA") ? $valores[4] = $filas2[$i]["numRegion"] : $valores[4];
                    ($filas2[$i]["region"] == "SIERRA NORTE") ? $valores[5] = $filas2[$i]["numRegion"] : $valores[5];
                    ($filas2[$i]["region"] == "SIERRA SUR") ? $valores[6] = $filas2[$i]["numRegion"] : $valores[6];
                    ($filas2[$i]["region"] == "PAPALOAPAN") ? $valores[7] = $filas2[$i]["numRegion"] : $valores[7];
                    // print_r($valores);
                }

                $valorLocalidad = array_map("municipio", $filas);
                $valorRegion = array_map("region", $filas);
                $numRegion = array_map("numRegion", $valores);
                // print_r($numRegion);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["region"] . "</td></tr>";
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
        <canvas id='graficaVG'></canvas>
    </div>

</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php") ?>