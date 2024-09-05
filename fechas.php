<?php
$fecha1= new DateTime("2020-08-01");
$fecha2= new DateTime("2023-08-04");
$diff = $fecha1->diff($fecha2);

// El resultados sera 3 dias
echo $diff->days . ' dias';
?>