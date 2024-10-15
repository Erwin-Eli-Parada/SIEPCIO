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
                'clave_loc'      => ($r[6]*10000)+$r[0],
                'nombre_localidad'   => str_replace ( "'", '', $r[1]),
                'poblacion_total'   => $r[2],
                'poblacion_ind'   => $r[3]=="*"?0:($r[3]=="N/D"?"0":$r[3]),
                'poblacion_afro'   => $r[4]=="*"?0:($r[4]=="N/D"?"0":$r[4]),
                'numero_hablantes'   => $r[5]=="*"?0:($r[5]=="N/D"?"0":$r[5]),
                'clave_num'   => $r[6],
                'altitud'   => $r[7],
                // 'longitud'   => $r[8],
                // 'latitud'   => $r[9],
                'poblacion_fem'   => $r[10]=="*"?0:$r[10],
                'poblacion_mas'   => $r[11]=="*"?0:$r[11]
            ];

        // print_r($data);
        $sql = "INSERT INTO localidad (clave_loc, nombre_localidad, poblacion_total, poblacion_ind, poblacion_afro, numero_hablantes, clave_num, altitud, poblacion_fem, poblacion_mas) 
            VALUES (".$data['clave_loc'].",'".$data['nombre_localidad']."',".$data['poblacion_total'].",".$data['poblacion_ind'].",".$data['poblacion_afro'].",".$data['numero_hablantes'].",".$data['clave_num'].",'".$data['altitud']."',".$data['poblacion_fem'].",".$data['poblacion_mas'].") 
            ON DUPLICATE KEY UPDATE nombre_localidad='" . $data['nombre_localidad'] . "',poblacion_total=".$data['poblacion_total'].",poblacion_ind=".$data['poblacion_ind'].",poblacion_afro=".$data['poblacion_afro'].",numero_hablantes=".$data['numero_hablantes'].",clave_num=".$data['clave_num'].",altitud='".$data['altitud']."',poblacion_fem=".$data['poblacion_fem'].",poblacion_mas=".$data['poblacion_mas'];
        $resultado = $conexion->query($sql);

        $inserted++;
    }

    // print_r("Insertados: " . $inserted);
    header("Location: subida.php?localidad=true&total=".$total."&inserted=".$inserted."&errors=".$errors);
} catch (Exception $e) {
    print_r($e);
    $errors++;
    header("Location: subida.php?localidad=true&errors=".$errors);
}
