<?php
include("../bd.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email FROM usuario WHERE usuario.email = '$email' and usuario.password = $password";

    try {
        $resultado = $conexion->query($sql);
        // echo($resultado);
        $filas = $resultado->fetch_all(MYSQLI_ASSOC);
        // print_r($filas);
    } catch (Exception $e) {
        $e->getMessage();
        // print_r($e);
    }

    if (!empty($filas)) {
        session_start();
        $_SESSION['usuarioA']="SI";
        header("Location: subida.php");
    } else {
        header("Location: index.php?errorusuario=SI");
    }
}
?>
