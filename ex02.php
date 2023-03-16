<?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];

    if ($soma = $n1 + $n2){
        echo "A soma de $n1 e $n2 é igual a $soma<br>";
    }
    if ($subtracao = $n1 - $n2){
        echo "A subtração de $n1 e $n2 é igual a $subtracao<br>";
    }
    if ($divisao = $n1 / $n2){
        echo "A divisão de $n1 e $n2 é igual a $divisao<br>";
    }
    if ($multiplicacao = $n1 * $n2){
        echo "A multiplicação de $n1 e $n2 é igual a $multiplicacao<br>";
    }
    if ($potenciacao = $n1 + $n2){
        echo "A potenciação de $n1 a potencia de $n2 é igual a $potenciacao<br>";
    }
    if ($raizq = sqrt($n1) ){
        echo "A raiz quadrado de $n1 é igual a $raizq<br>";
    }
    if ($raizq = sqrt($n2) ){
        echo "A raiz quadrado de $n2 é igual a $raizq<br>";
    }
?>