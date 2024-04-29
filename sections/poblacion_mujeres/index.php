<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">POBLACIÓN DE MUJERES</th>
                </tr>
                <tr>
                    <th scope="col">Localidad</th>
                    <th scope="col">Población Femenina 3 a 5</th>
                    <th scope="col">Población Femenina 6 a 11</th>
                    <th scope="col">Población Femenina 12 a 14</th>
                    <th scope="col">Población Femenina 15 a 49</th>
                    <th scope="col">Población Femenina 60 y más</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_localidad, poblacion_fem_3_5, poblacion_fem_6_11, poblacion_fem_12_14, poblacion_fem_15_49, poblacion_fem_60_mas FROM localidad l JOIN mujeres m ON l.clave_loc = m.clave_loc";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function nombre_localidad($n){
                    return ($n["nombre_localidad"]);
                }
                function poblacion_fem_3_5($n){
                    return ($n["poblacion_fem_3_5"]);
                }
                function poblacion_fem_6_11($n){
                    return ($n["poblacion_fem_6_11"]);
                }
                function poblacion_fem_12_14($n){
                    return ($n["poblacion_fem_12_14"]);
                }
                function poblacion_fem_15_49($n){
                    return ($n["poblacion_fem_15_49"]);
                }
                function poblacion_fem_60_mas($n){
                    return ($n["poblacion_fem_60_mas"]);
                }
                $valorLocalidad = array_map("nombre_localidad", $filas);
                $valorPob3_5 = array_map("poblacion_fem_3_5", $filas);
                $valorPob6_11 = array_map("poblacion_fem_6_11", $filas);
                $valorPob12_14 = array_map("poblacion_fem_12_14", $filas);
                $valorPob15_49 = array_map("poblacion_fem_15_49", $filas);
                $valorPob60 = array_map("poblacion_fem_60_mas", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_localidad"] . "</td><td>" . $fila["poblacion_fem_3_5"] . "</td><td>" . $fila["poblacion_fem_6_11"] . "</td><td>" . $fila["poblacion_fem_12_14"] . "</td><td>" . $fila["poblacion_fem_15_49"] . "</td><td>" . $fila["poblacion_fem_60_mas"] . "</td></tr>";
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
        <canvas id='graficaFem'></canvas>
    </div>
    
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php")?>