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
                'id_educacion' => $r[0],
                'asistencia' => $r[1],
                'porcentaje' => $r[2],
                'clave_mun' => $r[3]
            ];

        // print_r($data);
        $sql = "INSERT INTO educacion (id_educacion, asistencia, porcentaje, clave_mun) 
            VALUES (" . $data['id_educacion'] . ",'" . $data['asistencia'] . "'," . $data['porcentaje'] . "," . $data['clave_mun'] . ") 
            ON DUPLICATE KEY UPDATE asistencia= '" . $data['asistencia'] . "', porcentaje = " . $data['porcentaje'] . ", clave_mun = " . $data['clave_mun'];
        $resultado = $conexion->query($sql);

        $inserted++;
    }

    // print_r("Insertados: " . $inserted);
    header("Location: subida.php?educacion=true&total=".$total."&inserted=".$inserted."&errors=".$errors);
} catch (Exception $e) {
    print_r($e);
    // header("Location: login.php");
}
