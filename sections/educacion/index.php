<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DE LA POBLACIÓN INDÍGENA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
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
                $valorMunicipioInd = array_map("municipio", $filas);
                $valorAsistenciaInd = array_map("asistencia", $filas);
                $valorPorcentajeInd = array_map("porcentaje", $filas);
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
        <canvas id='graficaEducacionInd'></canvas>
    </div>
    <!-- Sección 2 -->
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DE LA POBLACIÓN AFROMEXICANA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, asistencia, porcentaje FROM educacion e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE nombre_municipio = 'Mártires de Tacubaya'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                // function municipio($n)
                // {
                //     return ($n["nombre_municipio"]);
                // }
                // function asistencia($n)
                // {
                //     return ($n["asistencia"]);
                // }
                // function porcentaje($n)
                // {
                //     return ($n["porcentaje"]);
                // }
                $valorMunicipioAfro = array_map("municipio", $filas);
                $valorAsistenciaAfro = array_map("asistencia", $filas);
                $valorPorcentajeAfro = array_map("porcentaje", $filas);
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
        <canvas id='graficaEducacionAfro'></canvas>
    </div>
    <!-- Sección 3 -->
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DEL TIPO DE TRANPSORTE QUE TOMA LA POBLACIÓN INDÍGENA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, transporte, porcentaje FROM transporte_escolar e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE m.tipo='Indigena'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function transporte($n)
                {
                    return ($n["transporte"]);
                }
                $valorMunicipioInd2 = array_map("municipio", $filas);
                $valorTransporteInd = array_map("transporte", $filas);
                $valorPorcentajeInd2 = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["transporte"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
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
        <canvas id='graficaTransporteInd'></canvas>
    </div>
    <!-- Sección 4 -->
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DEL TIPO DE TRANPSORTE QUE TOMA LA POBLACIÓN AFROMEXICANA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, transporte, porcentaje FROM transporte_escolar e JOIN municipio m ON e.clave_mun = m.clave_mun WHERE m.tipo='Afro'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                $valorMunicipioAfro2 = array_map("municipio", $filas);
                $valorTransporteAfro = array_map("transporte", $filas);
                $valorPorcentajeAfro2 = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["transporte"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
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
        <canvas id='graficaTransporteAfro'></canvas>
    </div>
    <!-- Sección 5 -->
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN INDÍGENA</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, carrera, porcentaje FROM carrera c JOIN municipio m ON c.clave_mun = m.clave_mun WHERE m.tipo='Indigena'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function carrera($n)
                {
                    return ($n["carrera"]);
                }
                $valorMunicipioInd3 = array_map("municipio", $filas);
                $valorCarreraInd = array_map("carrera", $filas);
                $valorPorcentajeInd3 = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["carrera"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
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
        <canvas id='graficaCarreraInd'></canvas>
    </div>
    <!-- Sección 6 -->
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="6">PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN AFROMEXICANA</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT nombre_municipio, carrera, porcentaje FROM carrera c JOIN municipio m ON c.clave_mun = m.clave_mun WHERE m.tipo='Afro'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                $valorMunicipioAfro3 = array_map("municipio", $filas);
                $valorCarreraAfro = array_map("carrera", $filas);
                $valorPorcentajeAfro3 = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["carrera"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
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
        <canvas id='graficaCarreraAfro'></canvas>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("grafica.php") ?>