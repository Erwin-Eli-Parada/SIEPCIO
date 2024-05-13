<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="selector-wrapper">
        <label for="filtrarPoblacionMujeres" class="select-label">Municipios:</label>
        <select id="filtrarSituacionMujeres" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">POBLACIÓN DE MUJERES</th>
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
            <tbody id="tbody-table-responsive-mujeres">

            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaFem'></canvas>
    </div>
    <!-- Seccion 2 -->
    <div class="selector-wrapper">
        <label for="filtrarMujeresEconomico" class="select-label">Municipios:</label>
        <select id="filtrarMujeresEconomico" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">Actividad económica de las mujeres que se autoadscriben indígenas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Actividad económica</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-mujeres-economica">
                
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaAEMI'></canvas>
    </div>
    <!-- Seccion 3 -->
    <div class="selector-wrapper">
        <label for="filtrarMujeresEconomicoAfro" class="select-label">Municipios:</label>
        <select id="filtrarMujeresEconomicoAfro" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">Actividad económica de las mujeres que se autoadscriben afromexicanas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Actividad económica</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-mujeres-economica-afro">
                
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaAEMA'></canvas>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>