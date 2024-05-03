<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">POBLACIÓN INDÍGENA Y AFROMEXICANA POR LOCALIDAD</th>
                </tr>
                <tr>
                    <th scope="col">Localidad</th>
                    <th scope="col">Población Total</th>
                    <th scope="col">Población Femenina</th>
                    <th scope="col">Población Masculina</th>
                    <th scope="col">Población Indígena</th>
                    <th scope="col">Población Afromexicana</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_localidad, poblacion_total, poblacion_fem, poblacion_mas, poblacion_ind, poblacion_afro FROM localidad";
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
                    return ($n["nombre_localidad"]);
                }
                function onlyfem($n)
                {
                    return ($n["poblacion_fem"]);
                }
                function onlyMas($n)
                {
                    return ($n["poblacion_mas"]);
                }
                function onlyInd($n)
                {
                    return ($n["poblacion_ind"]);
                }
                function onlyAfro($n)
                {
                    return ($n["poblacion_afro"]);
                }
                function pobTotal($n)
                {
                    return ($n["poblacion_total"]);
                }
                $valorLocalidad = array_map("onlyName", $filas);
                $valorFem = array_map("onlyFem", $filas);
                $valorMas = array_map("onlyMas", $filas);
                $valorInd = array_map("onlyInd", $filas);
                $valorAfro = array_map("onlyAfro", $filas);
                $valorPobTotal = array_map("pobTotal", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_localidad"] . "</td><td>" . $fila["poblacion_total"] . "</td><td>" . $fila["poblacion_fem"] . "</td><td>" . $fila["poblacion_mas"] . "</td><td>" . $fila["poblacion_ind"] . "</td><td>" . $fila["poblacion_afro"] . "</td></tr>";
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
        <canvas id='graficaAI'></canvas>
    </div>
    <!-- Seccion 2 -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO INDÍGENAS</th>
                </tr>
                <tr>
                    <th scope="col">Localidad</th>
                    <th scope="col">Acceso al servicio de salud</th>
                    <th scope="col">Economicamente activos</th>
                    <th scope="col">Viviendas habitadas</th>
                    <th scope="col">Viviendas habitadas sin servicios basicos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "SELECT DISTINCT nombre_localidad, acceso_serv_salud, econo_activos, viviendas_hab, viviendas_hab_sin_serv FROM localidad l JOIN situacion_pob s ON l.clave_loc = s.clave_loc JOIN municipio m ON m.clave_mun = l.clave_num
                where m.tipo='Indigena'";
                try {
                    $resultado2 = $conexion->query($sql2);
                    // print_r($resultado);
                    $filas2 = $resultado2->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function localidad($n){
                    return ($n["nombre_localidad"]);
                }
                function ass($n){
                    return ($n["acceso_serv_salud"]);
                }
                function ea($n){
                    return ($n["econo_activos"]);
                }
                function vh($n){
                    return ($n["viviendas_hab"]);
                }
                function vhss($n){
                    return ($n["viviendas_hab_sin_serv"]);
                }
                $valorLocalidad2 = array_map("localidad", $filas2);
                $valorass = array_map("ass", $filas2);
                $valorea = array_map("ea", $filas2);
                $valorvh = array_map("vh", $filas2);
                $valorvhss = array_map("vhss", $filas2);
                if (!empty($filas2)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas2 as $fila) {
                        echo "<tr><td>" . $fila["nombre_localidad"] . "</td><td>" . $fila["acceso_serv_salud"] . "</td><td>" . $fila["econo_activos"] . "</td><td>" . $fila["viviendas_hab"] . "</td><td>" . $fila["viviendas_hab_sin_serv"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay datos</td></tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaSEI'></canvas>
    </div>
    <!-- Seccion 3 -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO AFROMEXICANOS</th>
                </tr>
                <tr>
                    <th scope="col">Localidad</th>
                    <th scope="col">Acceso al servicio de salud</th>
                    <th scope="col">Economicamente activos</th>
                    <th scope="col">Viviendas habitadas</th>
                    <th scope="col">Viviendas habitadas sin servicios basicos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "SELECT DISTINCT nombre_localidad, acceso_serv_salud, econo_activos, viviendas_hab, viviendas_hab_sin_serv FROM localidad l JOIN situacion_pob s ON l.clave_loc = s.clave_loc JOIN municipio m ON m.clave_mun = l.clave_num
                where m.tipo='Afro'";
                try {
                    $resultado2 = $conexion->query($sql2);
                    // print_r($resultado);
                    $filas2 = $resultado2->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function localidad2($n){
                    return ($n["nombre_localidad"]);
                }
                function ass2($n){
                    return ($n["acceso_serv_salud"]);
                }
                function ea2($n){
                    return ($n["econo_activos"]);
                }
                function vh2($n){
                    return ($n["viviendas_hab"]);
                }
                function vhss2($n){
                    return ($n["viviendas_hab_sin_serv"]);
                }
                $valorLocalidad3 = array_map("localidad2", $filas2);
                $valorass2 = array_map("ass2", $filas2);
                $valorea2 = array_map("ea2", $filas2);
                $valorvh2 = array_map("vh2", $filas2);
                $valorvhss2 = array_map("vhss2", $filas2);
                if (!empty($filas2)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas2 as $fila) {
                        echo "<tr><td>" . $fila["nombre_localidad"] . "</td><td>" . $fila["acceso_serv_salud"] . "</td><td>" . $fila["econo_activos"] . "</td><td>" . $fila["viviendas_hab"] . "</td><td>" . $fila["viviendas_hab_sin_serv"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaSEA'></canvas>
    </div>

</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php") ?>