<?php
    $sorteado = array();

    $n = 0;
    while ($n < 6){
        $sorteado = rand(1, 60);
        $numerosorteado[] = $sorteado;
        $n++;
    }
    echo "Esses são os numeros da Mega-Sena:<br>" . implode("<br> ", $numerosorteado);
?>

