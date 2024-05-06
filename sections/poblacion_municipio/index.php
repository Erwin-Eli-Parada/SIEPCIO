<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">POBLACIÓN INDÍGENA Y AFROMEXICANA POR MUNICIPIO</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Población Total</th>
                    <th scope="col">Población Femenina</th>
                    <th scope="col">Población Masculina</th>
                    <th scope="col">Población Indígena</th>
                    <th scope="col">Población Afromexicana</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, SUM(poblacion_total), SUM(poblacion_fem), SUM(poblacion_mas), SUM(poblacion_ind), SUM(poblacion_afro) FROM municipio JOIN localidad ON clave_num = clave_mun GROUP BY nombre_municipio";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function onlyName($n)
                {
                    return ($n["nombre_municipio"]);
                }
                function onlyfem($n)
                {
                    return ($n["SUM(poblacion_fem)"]);
                }
                function onlyMas($n)
                {
                    return ($n["SUM(poblacion_mas)"]);
                }
                function onlyInd($n)
                {
                    return ($n["SUM(poblacion_ind)"]);
                }
                function onlyAfro($n)
                {
                    return ($n["SUM(poblacion_afro)"]);
                }
                function pobTotal($n)
                {
                    return ($n["SUM(poblacion_total)"]);
                }
                $valorMunicipio = array_map("onlyName", $filas);
                $valorFem = array_map("onlyFem", $filas);
                $valorMas = array_map("onlyMas", $filas);
                $valorInd = array_map("onlyInd", $filas);
                $valorAfro = array_map("onlyAfro", $filas);
                $valorPobTotal = array_map("pobTotal", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["SUM(poblacion_total)"] . "</td><td>" . $fila["SUM(poblacion_fem)"] . "</td><td>" . $fila["SUM(poblacion_mas)"] . "</td><td>" . $fila["SUM(poblacion_ind)"] . "</td><td>" . $fila["SUM(poblacion_afro)"] . "</td></tr>";
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
        <canvas id='graficaHM'></canvas>
        <canvas id='myChart'></canvas>
    </div>
    <!-- codigo de prueba inicio -->
    <label for="" class="form-label">Regiones</label>
    <select id="filtrar">
        <?php
        $sql = "SELECT DISTINCT region FROM municipio";
        try {
            $resultado = $conexion->query($sql);
            // print_r($resultado);
            $filas = $resultado->fetch_all(MYSQLI_ASSOC);
            // print_r($filas);
            foreach ($filas as $fila) {
                echo '<option value="' . $fila["region"] . '">' . $fila["region"] . '</option>';
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>
    </select>
    <!-- codigo de prueba fin -->
    <div id="table-responsive-wrapper">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="tablaHeader" colspan="3">PORCENTAJE DE ANALFABETISMO INDÍGENA Y AFROMEXICANA POR MUNICIPIO</th>
                    </tr>
                    <tr>
                        <th scope="col">Municipio</th>
                        <th scope="col">Población Analfabeta</th>
                        <th scope="col">Tipo de municipio</th>
                    </tr>
                </thead>
                <tbody id="tbody-table-responsive">

                </tbody>
            </table>
        </div>
        <div class="section unica">
            <?php
            $sql = "SELECT nombre_municipio, analfabetismo FROM municipio";
            try {
                $resultado = $conexion->query($sql);
                // print_r($resultado);
                $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                // print_r($filas);
            } catch (Exception $e) {
                $e->getMessage();
            }
            function analfabetismo($n)
            {
                return ($n["analfabetismo"]);
            }
            $valorMunicipio2 = array_map("onlyName", $filas);
            $valorAnalfabetismo2 = array_map("analfabetismo", $filas);
            ?>
            <canvas id='graficaAnalfabeta'></canvas>
        </div>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php") ?>
<?php include("ajax.php"); ?>