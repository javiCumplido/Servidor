<?php

$conexion = new mysqli("localhost", "root", "", "Horaio");

// # Detectar error en la conexion
if ($error = $conexion->connect_error) {
    die("Error de conexion: " . $error);
}

// # Definir codificación
// $conexion->set_charset("utf8mb4");

$query = "SELECT * FROM Asignatura";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_array()) {
        foreach ($fila as $key => $columna) {
            echo $key . ": " . $columna;
            echo "<br/>";
        }
        echo "---------------------";
        echo "<br/>";
    }
}

$conexion->close();
