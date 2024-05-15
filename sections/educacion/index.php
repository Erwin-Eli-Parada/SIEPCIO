<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="selector-wrapper">
        <label for="filtrarEducacionInd" class="select-label">Municipios:</label>
        <select id="filtrarEducacionInd" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DE LA POBLACIÓN INDÍGENA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-educacion-ind">

            </tbody>
        </table>
    </div>
    <div style="display:flex; justify-content: center; width: 100%;">
        <div class="section triple">
            <canvas id='graficaEducacionInd'></canvas>
        </div>
    </div>
    <!-- Sección 2 -->
    <div class="selector-wrapper">
        <label for="filtrarEducacionAfro" class="select-label">Municipios:</label>
        <select id="filtrarEducacionAfro" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DE LA POBLACIÓN AFROMEXICANA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-educacion-afro">

            </tbody>
        </table>
    </div>
    <div style="display:flex; justify-content: center; width: 100%;">
        <div class="section triple">
            <canvas id='graficaEducacionAfro'></canvas>
        </div>
    </div>
    <!-- Sección 3 -->
    <div class="selector-wrapper">
        <label for="filtrarTransporteInd" class="select-label">Municipios:</label>
        <select id="filtrarTransporteInd" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DEL TIPO DE TRANSPORTE QUE TOMA LA POBLACIÓN INDÍGENA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-transporte-ind">

            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaTransporteInd'></canvas>
    </div>
    <!-- Sección 4 -->
    <div class="selector-wrapper">
        <label for="filtrarTransporteAfro" class="select-label">Municipios:</label>
        <select id="filtrarTransporteAfro" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DEL TIPO DE TRANSPORTE QUE TOMA LA POBLACIÓN AFROMEXICANA MENOR DE EDAD CON ACCESO A LA EDUCACIÓN</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-transporte-afro">

            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaTransporteAfro'></canvas>
    </div>
    <!-- Sección 5 -->
    <div class="selector-wrapper">
        <label for="filtrarCarreraInd" class="select-label">Municipios:</label>
        <select id="filtrarCarreraInd" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN INDÍGENA</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-carrera-ind">

            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaCarreraInd'></canvas>
    </div>
    <!-- Sección 6 -->
    <div class="selector-wrapper">
        <label for="filtrarCarreraAfro" class="select-label">Municipios:</label>
        <select id="filtrarCarreraAfro" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN AFROMEXICANA</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-carrera-afro">

            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaCarreraAfro'></canvas>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>