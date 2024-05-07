<?php include("../../bd.php"); ?>
<?php include("../../templates/header.php"); ?>
<div class="section unica">
    <!-- codigo de prueba inicio -->
    <div class="selector-wrapper">
        <label for="filtrarPoblacion" class="select-label">Regiones:</label>
        <select id="filtrarPoblacion" class="form-select select-size shadow-none">
            <option value="">Todas las regiones</option>
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
    </div>
    <!-- codigo de prueba fin -->
    <div class="table-responsive limiteY">
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
            <tbody id="tbody-table-responsive-poblacion">
                
            </tbody>
        </table>
    </div>
    <div class="section unica">
        <canvas id='graficaHM'></canvas>
        <canvas id='myChart'></canvas>
    </div>
    <!-- codigo de prueba inicio -->
    <div class="selector-wrapper">
        <label for="filtrar" class="select-label">Regiones:</label>
        <select id="filtrar" class="form-select select-size shadow-none">
            <option value="">Todas las regiones</option>
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
    </div>
    <!-- codigo de prueba fin -->
    <div id="table-responsive-wrapper">
        <div class="table-responsive limiteY">
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
            <canvas id='graficaAnalfabeta'></canvas>
        </div>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("ajax.php"); ?>