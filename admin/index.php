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
    <link rel="shortcut icon" href="<?php echo $url_base; ?>src/img/Logo_SIPCIA.png" />
    <link href="<?php echo $url_base ?>styles/admin.css" rel="stylesheet">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/fc0a8e3d0f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body style="min-height: 100vh;" class="bodyFormat">
    <form class="formContainer" action="login.php" method="POST">
        <h3 class="titleForm"> BIENVENIDO A LA PAGINA DE ADMINISTRACION DEL SIE </h3>
        <div class="logoWrapper">
            <img src="../src/img/Logo_SIPCIA_2.png" class="imagen" alt="Responsive image">
        </div>
        <span style="color:<?php echo isset($_GET["errorusuario"]) ? ($_GET["errorusuario"]== "SI" ? "#911D44" : "wheat") : "wheat" ?>;">
            <?php echo isset($_GET["errorusuario"]) ? ($_GET["errorusuario"]== "SI" ? "Datos incorrectos" : "Ingrese sus Datos") : "Ingrese sus Datos" ?>
        </span>
        <div class="inputWrapper">
            <div class="inputLabel">CORREO:</div>
            <input id="email" name="email" class="input" type="email">
        </div>
        <div class="inputWrapper">
            <div class="inputLabel">CONTRASEÑA:</div>
            <input id="password" name="password" class="input" type="password">
        </div>
        <div class="buttonWrapper">
            <button id="login" type="Submit" class="btn btn-primary">Login</button>
        </div>
        <a class="nav-link navMod" aria-current="page" href="<?php echo $url_base; ?>">Regresar</a>
    </form>
</body>

<!-- <?php include("ajax.php"); ?> -->
<!-- <?php include("login.php"); ?> -->
