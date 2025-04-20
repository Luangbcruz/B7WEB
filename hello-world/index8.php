<?php

// $cidades= array('brasilia', 'porto alegre', 'sao paulo', 'rio de janeiro');
// echo ($cidades[2]);

// $alunos= ['alessandro'=> 32, "carlos"=> 15, "joao"=> 21];
// echo $alunos['joao'];

// $cores=['azul', 'amerelo', 'vermelho'];
// $cores[3]='roxo';
// array_shift($cores);
// print_r($cores); 


$precos=['bola'=> 100, 'chocolate'=> 111, 'pamonha'=>12];

$precos['chocolate']+= 10;
$precos ['bola'] -= 12;


print_r($precos);
?>