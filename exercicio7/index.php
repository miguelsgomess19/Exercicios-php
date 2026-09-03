<?php 

$usuario = readline("Contar de quanto até 1");
$contador = $usuario;

while ($contador >= 1){
    echo "$contador";

    sleep(1);
    $contador --;
}

?>