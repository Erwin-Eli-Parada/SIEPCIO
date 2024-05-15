<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <div class="selector-wrapper">
        <label for="filtrarAEI" class="select-label">Municipios:</label>
        <select id="filtrarAEI" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">Actividad económica de las personas que se autoadscriben indígenas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Actividad económica</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-AEI">
                
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaAEI'></canvas>
    </div>
    <!-- Seccion 2 -->
    <div class="selector-wrapper">
        <label for="filtrarAEA" class="select-label">Municipios:</label>
        <select id="filtrarAEA" class="form-select select-size shadow-none">
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
                    <th class="tablaHeader" colspan="6">Actividad económica de las personas que se autoadscriben afromexicanas</th>
                </tr>
                <tr>
                    <th scope="col">Municipio</th>
                    <th scope="col">Actividad económica</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="tbody-table-responsive-AEA">
                
            </tbody>
        </table>
    </div>
    <div class="section large">
        <canvas id='graficaAEA'></canvas>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>