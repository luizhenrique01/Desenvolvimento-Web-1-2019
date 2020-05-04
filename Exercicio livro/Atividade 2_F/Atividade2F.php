<?php


header("Content-type:text/html; charset=utf8");

//variaveis

$qntdeprodutos = $_POST["qntdeprodutos"];
$totaldacompra = $_POST["totaldacompra"];
$desc5 = $totaldacompra * 0.05;
$desc10 = $totaldacompra * 0.10;

//logica

if ($qntdeprodutos <= 10 ){
    echo " Seu desconto é de 0%. " ;
}else if ($qntdeprodutos >= 11 && $qntdeprodutos <= 25){
    echo " Seu desconto é de 5%, o Valor a Pagar é: " .$desc5 ."." ;
}else if ($qntdeprodutos > 25){
    echo "Seu desconto é de 10%, o Valor a Pagar é: " .$desc10 .".";
}
