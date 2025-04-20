<?php
$frutas= ["laranja", "limão"];

//adicionar um novo índice
//$frutas[2]= "morango";

//modificar um índice existente
//$frutas[0]= "uva";

//$quantidadedeItens= count($frutas);

$temLaranja= in_array("laranja", $frutas);
$todasFrutas= array_merge($frutas, $outras_frutas);
var_dump($todasFrutas);
?>