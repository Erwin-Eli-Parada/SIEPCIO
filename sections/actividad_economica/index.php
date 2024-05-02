<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">Actividad económica de las personas que se autoadscriben indígenas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Actividad económica</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, actividad_econom, cantidad FROM act_economica ae JOIN municipio m ON ae.clave_mun = m.clave_mun";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function actividad_econom($n){
                    return ($n["actividad_econom"]);
                }
                function cantidad($n){
                    return ($n["cantidad"]);
                }
                $valorAE = array_map("actividad_econom", $filas);
                $valorCantidad = array_map("cantidad", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["actividad_econom"] . "</td><td>" . $fila["cantidad"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No hay datos</td></tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaAE'></canvas>
    </div>
    
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php")?>