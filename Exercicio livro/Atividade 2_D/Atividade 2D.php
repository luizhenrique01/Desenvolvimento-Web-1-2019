<?php
$nome =  $_POST["nome"];
$idade = $_POST["idade"];
$falta = 18 - $idade;
header("Content-type:text/html; charset=utf8");
if ($idade >= 18){
    echo "O $nome esta apto a tirar habilitação";
} else {
    echo "O $nome não esta apto a tirar a habilitação,ainda falta: " . $falta  ." anos";
}