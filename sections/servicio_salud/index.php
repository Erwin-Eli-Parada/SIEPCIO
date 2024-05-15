<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="selector-wrapper">
        <label for="filtrarSSI" class="select-label">Municipios:</label>
        <select id="filtrarSSI" class="form-select select-size shadow-none">
            <option value="">Todos los municipios</option>
            <?php
            $sql = "SELECT clave_mun, nombre_municipio FROM municipio WHERE municipio.tipo = 'Indigena'";
            try {
                $resultado = $conexion->query($sql);
                // print_r($resultado);
                $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                // print_r($filas);
                foreach ($filas as $fila) {
                    echo '<option value="' . $fila["clave_mun"] . '">' . $fila["nombre_municipio"] . '</option>';
                }
            } catch (Exception $e) {
                $e->getMessage();
            }
            ?>
        </select>
    </div>
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">Servicios de salud de las personas que se autoadscriben indígenas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Servicio de salud</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-SSI">
                <!-- <?php
                $sql = "SELECT nombre_municipio, servicio_salud, porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.tipo='Indigena'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                function servicio_salud($n)
                {
                    return ($n["servicio_salud"]);
                }
                function porcentaje($n)
                {
                    return ($n["porcentaje"]);
                }
                $valorSS = array_map("servicio_salud", $filas);
                $valorPorcentaje = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["servicio_salud"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay datos</td></tr>";
                }
                ?> -->
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaSSI'></canvas>
    </div>
    <!-- secccion 2 -->
    <div class="selector-wrapper">
        <label for="filtrarSSA" class="select-label">Municipios:</label>
        <select id="filtrarSSA" class="form-select select-size shadow-none">
            <option value="">Todos los municipios</option>
            <?php
            $sql = "SELECT clave_mun, nombre_municipio FROM municipio WHERE municipio.tipo = 'Afro'";
            try {
                $resultado = $conexion->query($sql);
                // print_r($resultado);
                $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                // print_r($filas);
                foreach ($filas as $fila) {
                    echo '<option value="' . $fila["clave_mun"] . '">' . $fila["nombre_municipio"] . '</option>';
                }
            } catch (Exception $e) {
                $e->getMessage();
            }
            ?>
        </select>
    </div>
    <div class="table-responsive limiteY">
        <table class="table">
            <thead>
                <tr>
                    <th class="tablaHeader" colspan="6">Servicios de salud de las personas que se autoadscriben afromexicanas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Servicio de salud</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-SSA">
                <!-- <?php
                $sql = "SELECT nombre_municipio, servicio_salud, porcentaje FROM servicio_salud ss JOIN municipio m ON ss.clave_mun = m.clave_mun WHERE m.tipo='Afro'";
                try {
                    $resultado = $conexion->query($sql);
                    // print_r($resultado);
                    $filas = $resultado->fetch_all(MYSQLI_ASSOC);
                    // print_r($filas);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                $valorSSA = array_map("servicio_salud", $filas);
                $valorPorcentajeA = array_map("porcentaje", $filas);
                if (!empty($filas)) {
                    // Iterar sobre los resultados y mostrarlos en la tabla
                    foreach ($filas as $fila) {
                        echo "<tr><td>" . $fila["nombre_municipio"] . "</td><td>" . $fila["servicio_salud"] . "</td><td>" . $fila["porcentaje"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay datos</td></tr>";
                }
                ?> -->
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaSSA'></canvas>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>