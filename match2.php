<?php
$a=8;

$x=10;
$y=8;
$z=5;


$resultado =  match ($a) {
   $x => 'Valor igual a X',
   $y => 'Valor igual a Y',
  '8.0' => "Esta no es una coincidencia exacta",
   8.0 => "Valor devuelto 8",
  default => 'No lo encontré',
};