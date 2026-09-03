<?php 

$usuario = readline("Contar até que número? ");

$contador = 1;

while($contador <= $usuario){
    echo "$contador\n"; 
    

    sleep(1);
    $contador ++;

}
?>