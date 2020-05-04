<?php

$nome =  $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$nome2 =  $_POST["nome2"];
$preco2 = $_POST["preco2"];
$quantidade2 = $_POST["quantidade2"];

$nome3 =  $_POST["nome3"];
$preco3 = $_POST["preco3"];
$quantidade3 = $_POST["quantidade3"];

$total1 = 0;
$total2 = 0;
$total3 = 0;
$total = 0;

$total1 = $preco * $quantidade;
$total2 = $preco2 * $quantidade2;
$total3 = $preco3 * $quantidade3;

$total = $total1 + $total2 + $total3;

if ($total < 100){
    echo ("Valor da compra e: R$".$total. "<br>O valor da compra com desconto de 5% e: ".($total * 0.95));
} else if ($total > 100 && $total < 200){
    echo ("Valor da compra e: R$".$total. "<br>O valor da compra com desconto de 10% e: ".($total * 0.90));
} else if ($total > 200){
    echo ("Valor da compra e: R$".$total. "<br>O valor da compra com desconto de 15% e: ".($total * 0.85));
}
