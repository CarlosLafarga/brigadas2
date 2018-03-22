<?php
require_once '../conexion/conect.php';
$buscar = $_POST['b'];

if (!empty($buscar)) {

    buscar($buscar);
}

function buscar($b)
{
    $cn  = Conectarse();
    $sql = mysql_query("SELECT * FROM vista_ct WHERE clave LIKE '%" . $b . "%'", $cn);

    $contar          = mysql_num_rows($sql);
    $row             = mysql_fetch_array($sql);
    $data            = array();
    $data['renglon'] = $row;

    if ($contar == 0) {

        echo "0";

    } elseif ($contar == 1) {

        $arreglo["renglon"][] = $row;
        echo json_encode($arreglo);

    } elseif ($contar > 1) {

        $arreglo["renglon"] = [];
        while ($data = mysql_fetch_assoc($sql)) {

            $arreglo["renglon"][] = $data;

        }
        echo json_encode($arreglo);
    }
}
