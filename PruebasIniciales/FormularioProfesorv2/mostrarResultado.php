<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>

<?php

// Vamos a hacer el horario de la clase, profesores solamente de esa clase
// Ahora una asignatura la pueden dar varios profesores
// Ejemplo: Tengo por ahi una base de datos con una tabla asignatura: id,nombre,clase,profesores(id,nombre) | clase - profesor
// voy a saber el profesor donde da clase

$valoresEsperados = [
  "asignatura" => "No disponible",
  "profesores" => "No disponible",
  "semana" => "No disponible",
  "aceptaCondiciones" => "No disponible",
  "horas" => "No disponible",
  "informacion" => "No disponible",
];

$valoresResultantes = array();

foreach ($valoresEsperados as $campo => $valorPorDefecto) {
    $valorRaw = $_GET[$campo] ?? $valorPorDefecto;
    $valorLimpio = "";
    if (is_array($valorRaw)) {
        for ($i = 0; $i < count($valorRaw); $i++) {
            if ($i === count($valorRaw) - 1) {
                $valorLimpio .= htmlspecialchars(trim($valorRaw[$i]), ENT_QUOTES, 'UTF-8') . ".";
            } else {
                $valorLimpio .= htmlspecialchars(trim($valorRaw[$i]), ENT_QUOTES, 'UTF-8') . ", ";
            }
        }
    } else {
        $valorLimpio .= htmlspecialchars(trim($valorRaw), ENT_QUOTES, 'UTF-8');
    }
    $valoresResultantes[$campo] = $valorLimpio;
}

foreach ($valoresResultantes as $nombre => $valor) {
    if (is_array($valor)) {
        echo $nombre . " : ";
        for ($i = 0; $i < count($valor); $i++) {
            if ($i == count($valor) - 1) {
                echo $valor[$i] . ".";
            } else {
                echo $valor[$i] . ", ";
            }
        }
        echo "<br/>";
    } else {
        echo $nombre . " : " . $valor;
        echo "<br/>";
    }
}

// foreach ($_GET as $key => $value) {
//   if (!is_array($value) && !isset($value)) {
//     echo $key . " : " . "EL elemento no existe." . "<br/>";
//   } else if (!is_array($value) && empty($value)) {
//     echo $value . " : " . "No hay nada dentro del elemento" . "<br/>";
//   } else if (is_array($value)) {
//     foreach ($value as $llave => $valor) {
//       echo $llave . " : " . $valor;
//     }
//   }
// }
?>

</body>
</html>

