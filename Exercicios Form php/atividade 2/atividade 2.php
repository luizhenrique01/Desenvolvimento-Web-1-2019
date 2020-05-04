<?php

$nome =  $_POST["nome"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$imc =0;
$cal1 = 0;

$cal1 = $altura * $altura;

$imc = $peso / $cal1;

if($imc <= 18.5 ){
    echo ("O " .$nome. " tem o IMC classificado como: Abaixo do peso");
} else if ($imc >= 18.6 && $imc <= 24.9){
    echo ("O " .$nome. " tem o IMC classificado como: Saudavel");
} else if ($imc >= 25 && $imc <= 29.9 ){
    echo ("O " .$nome. " tem o IMC classificado como: Peso em Excesso");
} else if ($imc >= 30 && $imc <= 34.9 ){
    echo ("O " .$nome. " tem o IMC classificado como: Obesidade grau 1");
} else if ($imc >= 35 && $imc <= 39.9 ){
    echo ("O " .$nome. " tem o IMC classificado como: Obesidade grau 2");
} else if ($imc >= 40){
    echo ("O " .$nome. " tem o IMC classificado como: Obesidade grau 3");
}


