<?php

if (isset($_GET["factorial"])) $limite = $_GET["factorial"];
else $limite = "0";


function crearArregloFactorial(int $limite):array{
  $arregloFactorial = array();
  for($i = 0; $i <= $limite; $i++){
    $arregloFactorial[$i][0] = $i + 1;
    $arregloFactorial[$i][1] = strval(calcularFactorial($i + 1));
    // $arregloFactorial[$i][2] = desgloseFactorial($i + 1);
  }
  return $arregloFactorial;
}

// function Saludo (&$msg){ // # Lo que hacemos es pasar la diferencia y la modificaciones que hagamos sobre esto se hacen tambien cuando salgamos de la funcion | Es decir en la variable que pasamos al parametro porque la pasamos por referencia. En cambio si pasaramos por valor se hace una copia de la variable y el valor que se le pasa al parametro cuando salimos no se modifica.
//   $msg= "Hola".$msg;   
//   return  $msg;
// }

// $msg = " ¿Qué tal?";
// echo Saludo($msg); //muestra:  "Hola ¿Qué tal?
// echo $msg; // muestra: "¿Qué tal?"


// print_r($_GET); # Para mostrar array con formato legible
// var_dump($limite); # Para mostrar el tipo de dato de una variable

function calcularFactorial(int $numero) : int{

  // $resultado = 1;
  // for ($i = 1; $i <= $numero; $i++){
  //   $resultado *= $i;
  // }
  // return $resultado;

  if ($numero <= 1){
    return 1;
  }

  return $numero * calcularFactorial($numero - 1);
  
}

function desgloseFactorial(int $numero): string{

  $i = $numero;
  $texto = "$i";

  if ($i != 1){
    for ($i--; $i > 0; $i--){
      $texto .= "* $i";
    }
  }

  return $texto;
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial</title>
  <style>
    table {
      text-align: center;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th colspan="2">Factorial 1 al <?= $limite ?></th>
      </tr>
      <tr>
        <th>Numero</th>
        <th>Factorial</th>
        <th>Desglose</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      // if ($limite > 0){
      //   foreach(crearArregloFactorial($limite) as $value){
      //     echo "<tr>";
      //     for ($i = 0; $i < 3; $i++){
      //       echo "<td>".$value[$i]."</td>";
      //     }
      //     echo "</tr>";
      //   }
      // }

      $factoriales = array();
      for ($i = 1; $i <= $limite; $i++){
        $factoriales[$i] = calcularFactorial($i);
      };
      // print_r($factoriales);
      foreach($factoriales as $numero => $factorial){
        echo '<tr>'.'<td>'.$numero.'</td>'.'<td>'.$factorial.'</td>';
      }

      ?>

    </tbody>
  </table>
</body>
</html>
