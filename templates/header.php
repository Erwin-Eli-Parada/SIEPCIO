<?php
$url_base = "http://localhost/SIE/";
?>

<!doctype html>
<html lang="en">

<head>
    <title>SIE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="<?php echo $url_base ?>styles/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $url_base; ?>src/img/Logo_SIPCIA.png" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/fc0a8e3d0f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body style="min-height: 100vh;">
    <header>
        <div id="navbarContainer">
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
                <div class="container-fluid">
                    <a class="navbar-brand logoContainer" href="<?php echo $url_base; ?>">
                        <img src="<?php echo $url_base; ?>src/img/Logo 3.png" alt="" width="100" height="100">
                        <div class="logoText">
                            <span class="header-text">DE PUEBLOS</span>
                            <span class="header-text">COMUNIDADES</span>
                            <span class="header-text">INDÍGENAS</span>
                            <span class="header-text">Y AFROMEXICANAS</span>
                            <span class="header-text">DE OAXACA</span>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse collapse-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/poblacion_municipio/">Población por municipio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/poblacion_localidad/">Población por localidad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/poblacion_mujeres/">Población de mujeres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/violencia_genero/">Violencia de género</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/educacion/">Educación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/actividad_economica/">Actividad económica</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>sections/servicio_salud/">Servicios de Salud</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main id="main">