<?php

if (isset($_GET["factorial"])) $limite = $_GET["factorial"];
else $limite = "0";

function calcularFactorial(int $numero) : int{

  if ($numero <= 1){
    return 1;
  }

  return $numero * calcularFactorial($numero - 1);
  
}


$factoriales = array();
for ($i = 1; $i <= $limite; $i++){
  $factoriales[$i] = calcularFactorial($i);
};
// print_r($factoriales);
foreach($factoriales as $factorial){
  echo '<tr>'.'<td>'.$factorial.'</td>'.'</tr>';
}

?>