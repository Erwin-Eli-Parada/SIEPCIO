<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="selector-wrapper">
        <label for="filtrarPoblacionLocalidad" class="select-label">Municipio:</label>
        <select id="filtrarPoblacionLocalidad" class="form-select select-size shadow-none">
            <option value="">Todos los municipios</option>
            <?php
            $sql = "SELECT clave_mun, nombre_municipio FROM municipio";
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
            <tbody id="tbody-table-responsive-poblacion-localidad">
                
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaHM'></canvas>
        <canvas id='graficaAI'></canvas>
    </div>
    <!-- Seccion 2 -->
    <div class="selector-wrapper">
        <label for="filtrarSituacionIndi" class="select-label">Municipio:</label>
        <select id="filtrarSituacionIndi" class="form-select select-size shadow-none">
            <option value="">Todos los municipios</option>
            <?php
            $sql = "SELECT clave_mun, nombre_municipio FROM municipio WHERE tipo = 'Indigena'";
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
            <tbody id="tbody-table-responsive-servicios-indi">
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaSEI'></canvas>
    </div>
    <!-- Seccion 3 -->
    <div class="selector-wrapper">
        <label for="filtrarSituacionAfro" class="select-label">Municipio:</label>
        <select id="filtrarSituacionAfro" class="form-select select-size shadow-none">
            <option value="">Todos los municipios</option>
            <?php
            $sql = "SELECT clave_mun, nombre_municipio FROM municipio WHERE tipo = 'Afro'";
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
            <tbody id="tbody-table-responsive-servicios-afro">
                
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaSEA'></canvas>
    </div>

</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>