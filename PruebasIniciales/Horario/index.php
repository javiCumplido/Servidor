<?php
$horario = [
  ["L" => "IPP2 2DAW ARL",   "M" => "DWENC 2DAW DLA",  "X" => "IPP2 2DAW ARL",  "J" => "DWESV 2DAW MDI", "V" => "OPT21 2DAW MDI"],
  ["L" => "DWESV 2DAW MDI",  "M" => "DWENC 2DAW DLA",  "X" => "DWENC 2DAW DLA",  "J" => "DWESV 2DAW MDI", "V" => "OPT2C 2DAW DLA"],
  ["L" => "DWESV 2DAW MDI",  "M" => "DWESV 2DAW MDI",  "X" => "DWENC 2DAW DLA",  "J" => "DWESV 2DAW MDI", "V" => "DASP 2DAW DLA"],
  ["L" => "PIMOD 2DAW GTE",  "M" => "DWESV 2DAW MDI",  "X" => "DWESV 2DAW MDI",  "J" => "SASP 2DAW VAS",   "V" => "DWESV 2DAW MDI"],
  ["L" => "DEAPW 2DAW GTE",  "M" => "PIMOD 2DAW GTE",  "X" => "DEAPI 2DAW GTE",  "J" => "OPT1 2DAW ARL",  "V" => "DWESV 2DAW MDI"],
  ["L" => "DWENC 2DAW DLA",  "M" => "DEAPW 2DAW GTE",  "X" => "DEAPW 2DAW GTE",  "J" => "IPP2 2DAW ARL",   "V" => "TUTO 2DAW DLA"],
  ["L" => "DWENC 2DAW DLA",  "M" => "",                "X" => "",                "J" => "",                "V" => ""],
  ["L" => "IPP2 2DAW ARL"]
];

$colores = [
  "IPP2 2DAW ARL"  => "#FFFF00",  // Amarillo (existente)
  "DWENC 2DAW DLA" => "#F54927",  // Rojo-naranja (existente)
  "DWESV 2DAW MDI" => "#2AF527",  // Verde lima (existente)
  "OPT21 2DAW MDI" => "#2768F5",  // Azul (existente)
  "PIMOD 2DAW GTE" => "#f49af9",  // Rosa (existente)
  "OPT2C 2DAW DLA" => "#FF8C00",  // Naranja oscuro
  "DASP 2DAW DLA"  => "#00CED1",  // Turquesa oscuro
  "SASP 2DAW VAS"  => "#8A2BE2",  // Azul violeta
  "DEAPW 2DAW GTE" => "#DC143C",  // Carmesí
  "DEAPI 2DAW GTE" => "#32CD32",  // Verde lima
  "OPT1 2DAW ARL"  => "#FF69B4",  // Rosa fuerte
  "TUTO 2DAW DLA"  => "#708090",  // Gris pizarra
];

function buscarAsignatura(array $horario, array $colores)
{
  for ($i = 0; $i < count($horario); $i++) {
    echo '<tr>';
    echo '<td style="text-align: center;">' . ($i + 1) . '</td>';
    foreach ($horario[$i] as $asignaturas) {
      echo '<td style="background-color: ' . $colores[$asignaturas] . '">' . $asignaturas . '</td>';
    }
    echo '</tr>';
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Horario</title>
</head>

<body>
  <header>
    <h1>Horario 2 DAW</h1>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>Horario</th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miércoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
        </tr>
      </thead>
      <tbody>
        <?php

        buscarAsignatura($horario, $colores);
        ?>
      </tbody>
    </table>
    <section>
      <h3>Profesores:</h3>
      <ul>
        <li>ARL - ÁLVAREZ RECIO, LUIS MIGUEL</li>
        <li>GTE - GONZÁLEZ TRIVES, ERNESTO</li>
        <li>VAS - VÁZQUEZ AGUILAR, SANTIAGO</li>
        <li>DLA - DOMÍNGUEZ LEBRATO, ALBERTO</li>
        <li>MDI - MUÑOZ DOMÍNGUEZ, ISABEL</li>
      </ul>
    </section>
    <section>
      <h3>Asignaturas:</h3>
      <ul>
        <li>DWENC 2DAW - DES. WEB EN ENTORNO CLIENTE</li>
        <li>DWESV 2DAW - DES. WEB EN ENTORNO SERVIDOR</li>
        <li>DEAPW 2DAW - DESPLIEGUE APLICACIONES</li>
        <li>SASP 2DAW - Sost aplicada al sist.</li>
        <li>IPP2 2DAW - IPP2- seguimiento dual</li>
        <li>OPT2A 2DAW - OPT 2- seguimiento dual</li>
        <li>OPT21 2DAW - Optativa eje 2 MDI</li>
        <li>PIMOD 2DAW - pimod- Seguimiento dual</li>
        <li>DWENC 2DAW - DWENC seguimiento dual</li>
        <li>DWESV 2DAW - DWESV seguimiento dual</li>
        <li>DEAPW 2DAW - DEAPW seguimiento dual</li>
        <li>IPP2 2DAW - Iti.personal para emple</li>
        <li>DASP 2DAW - Digit. aplic.a los sect</li>
        <li>OPT 1 2DAW - Optativa eje 1</li>
        <li>PIMOD 2DAW - Proyecto intermodular</li>
        <li>TUTO 2DAW - TUTORÍA</li>
      </ul>
    </section>
  </main>
</body>

</html>
