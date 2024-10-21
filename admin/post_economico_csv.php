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
                'id_actividad_econom' => $r[0],
                'cantidad' => $r[1],
                'actividad_econom' => $r[2],
                'clave_mun' => $r[3],
                'cantidad_h' => $r[4],
                'cantidad_m' => $r[5],
            ];

        // print_r($data);
        $sql = "INSERT INTO act_economica (id_act_econom, cantidad, actividad_econom, clave_mun, cantidad_h, cantidad_m) 
            VALUES (" . $data['id_actividad_econom'] . "," . $data['cantidad'] . ",'" . $data['actividad_econom'] . "'," . $data['clave_mun'] . "," . $data['cantidad_h'] . "," . $data['cantidad_m'] . ") 
            ON DUPLICATE KEY UPDATE cantidad= " . $data['cantidad'] . ", actividad_econom = '" . $data['actividad_econom'] . "', clave_mun = " . $data['clave_mun'] . ", cantidad_h = " . $data['cantidad_h'] . ", cantidad_m = " . $data['cantidad_m'];
        $resultado = $conexion->query($sql);

        $inserted++;
    }

    // print_r("Insertados: " . $inserted);
    header("Location: subida.php?localidad=true&total=".$total."&inserted=".$inserted."&errors=".$errors);
} catch (Exception $e) {
    print_r($e);
    // header("Location: login.php");
}
