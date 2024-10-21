<!DOCTYPE html>
<?php
$url_base = "http://localhost/SIE/";
session_start();
$usuarioA = $_SESSION['usuarioA'];
if ($usuarioA != "SI") {
    header("location: index.php");
}
?>
<html>

<head>
    <title>SIE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="shortcut icon" href="<?php echo $url_base; ?>src/img/Logo_SIPCIA.png" />
    <link href="<?php echo $url_base ?>styles/subida.css" rel="stylesheet">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/fc0a8e3d0f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<header class="header">
    <div>Erwin Eli</div>
    <h1>ADMINISTRACIÓN DEL SIE</h1>
    <a href="salir.php">Salir</a>
</header>

<div class="cuerpo">
    <div class="dataContainer">
        <div class="dataContainerTitle">
            <hr>
            <div class="dataTitle">SUBIR DATOS RELACIONADOS CON LOS MUNICIPIOS</div>
            <hr>
        </div>
        <div class="dataContainerFormatoTitle">FORMATO:</div>
        <div class="dataContainerFormatoWrapper">
            <table class="dataContainerFormato">
                <tr>
                    <td>clave_num</td>
                    <td>nombre_municipio</td>
                    <td>region</td>
                    <td>pais</td>
                    <td>estado</td>
                    <td>violencia_genero</td>
                    <td>analfabetismo</td>
                    <td>tipo</td>
                    <td>lengua</td>
                </tr>
            </table>
        </div>
        <form class="formulario" action="post_municipio_csv.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo">Selecciona un archivo <code>.csv</code></label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".csv" required>
            </div>
            <button class="btn btn-success" type="submit">Importar</button>
        </form>
    </div>
    <div class="dataContainer">
        <div class="dataContainerTitle">
            <hr>
            <div class="dataTitle">SUBIR DATOS RELACIONADOS CON LAS LOCALIDADES</div>
            <hr>
        </div>
        <div class="dataContainerFormatoTitle">FORMATO:</div>
        <div class="dataContainerFormatoWrapper">
            <table class="dataContainerFormato">
                <tr>
                    <td>clave_loc</td>
                    <td>nombre_localidad</td>
                    <td>poblacion_total</td>
                    <td>poblacion_afro</td>
                    <td>numero_hablantes</td>
                    <td>clave_mun</td>
                    <td>altitud</td>
                    <td>longitud</td>
                    <td>latitud</td>
                    <td>poblacion_fem</td>
                    <td>poblacion_mas</td>
                </tr>
            </table>
        </div>
        <form class="formulario" action="post_localidad_csv.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo">Selecciona un archivo <code>.csv</code></label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".csv" required>
            </div>
            <button class="btn btn-success" type="submit">Importar</button>
        </form>
    </div>
    <div class="dataContainer">
        <div class="dataContainerTitle">
            <hr>
            <div class="dataTitle">SUBIR DATOS RELACIONADOS CON LA ACTIVIDAD ECONÓMICA</div>
            <hr>
        </div>
        <div class="dataContainerFormatoTitle">FORMATO:</div>
        <div class="dataContainerFormatoWrapper">
            <table class="dataContainerFormato">
                <tr>
                    <td>id_actividad_econom</td>
                    <td>cantidad</td>
                    <td>actividad_econom</td>
                    <td>clave_mun</td>
                    <td>cantidad_h</td>
                    <td>cantidad_m</td>
                </tr>
            </table>
        </div>
        <form class="formulario" action="post_economico_csv.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo">Selecciona un archivo <code>.csv</code></label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".csv" required>
            </div>
            <button class="btn btn-success" type="submit">Importar</button>
        </form>
    </div>
    <div class="dataContainer">
        <div class="dataContainerTitle">
            <hr>
            <div class="dataTitle">SUBIR DATOS RELACIONADOS CON LAS CARRERAS</div>
            <hr>
        </div>
        <div class="dataContainerFormatoTitle">FORMATO:</div>
        <div class="dataContainerFormatoWrapper">
            <table class="dataContainerFormato">
                <tr>
                    <td>id_carrera</td>
                    <td>carrera</td>
                    <td>porcentaje</td>
                    <td>clave_mun</td>
                </tr>
            </table>
        </div>
        <form class="formulario" action="post_carrera_csv.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo">Selecciona un archivo <code>.csv</code></label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".csv" required>
            </div>
            <button class="btn btn-success" type="submit">Importar</button>
        </form>
    </div>
    
</div>

</html>