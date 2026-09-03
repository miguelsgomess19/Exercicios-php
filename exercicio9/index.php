<?php 
$lista = [];
$usuario = -1;
while ($usuario != 0){
    $usuario = readline("Insira um valor:");
    array_push($lista,$usuario);
}


$soma = array_sum($lista);
echo "A soma da lista ". print_r($lista)." é: ".
$soma."\n";
?>