<?php // Recibe la información del formulario
include("../bd.php");
try {

    $rows     = [];
    $total    = 0;
    $inserted = 0;
    $errors   = 0;

    if (!isset($_FILES["archivo"])) {
        throw new Exception("Selecciona un archivo CSV válido.");
    }

    $file     = $_FILES["archivo"];
    $tmp      = $file["tmp_name"];
    $filename = $file["name"];
    $size     = $file["size"];

    if ($size < 0) {
        throw new Exception("Selecciona un archivo válido por favor.");
    }

    $handle = fopen($tmp, "r");

    while (($data = fgetcsv($handle)) !== false) {
        $rows[] = $data;
    }

    unset($rows[0]); // se eliminan las cabeceras
    $total = count($rows);

    if ($total <= 0) {
        throw new Exception("El archivo proporcionado está vacio.");
    }

    // Insertando información
    foreach ($rows as $r) {
        $data =
            [
                'clave_mun'      => $r[0],
                'nombre_municipio'   => $r[1],
                'region'   => $r[2],
                'pais'   => $r[3],
                'estado'   => $r[4],
                'violencia_genero'   => $r[5],
                'analfabetismo'   => $r[6],
                'tipo'   => $r[7],
                'lengua'   => $r[8],
            ];

        // print_r($data);
        $sql = "INSERT INTO municipio (clave_mun, nombre_municipio, region, pais, estado, violencia_genero, analfabetismo, tipo) 
            VALUES (" . $data['clave_mun'] . ",'" . $data['nombre_municipio'] . "','" . $data['region'] . "','" . $data['pais'] . "','" . $data['estado'] . "'," . $data['violencia_genero'] . "," . $data['analfabetismo'] . ",'" . $data['tipo'] . "') 
            ON DUPLICATE KEY UPDATE nombre_municipio= '" . $data['nombre_municipio'] . "', region = '" . $data['region'] . "', pais = '" . $data['pais'] . "', estado = '" . $data['estado'] . "', violencia_genero = " . $data['violencia_genero'] . ", analfabetismo = '" . $data['analfabetismo'] . "', tipo = '" . $data['tipo'] . "'";
        $resultado = $conexion->query($sql);

        $inserted++;
    }

    // print_r("Insertados: " . $inserted);
    header("Location: subida.php?municipio=true&inserted=" . $inserted);
} catch (Exception $e) {
    print_r($e);
    // header("Location: login.php");
}
