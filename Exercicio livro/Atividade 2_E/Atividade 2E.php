<?php
header("Content-type:text/html; charset=utf8");
$nome  =  $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$soma = 0;
//logica
$soma = $nota1 + $nota2 + $nota3;

if($soma >- 60){
    echo "Aluno ".$nome.". Status: Aprovado";
} else if($soma >= 45 && $soma < 60){
    echo "Aluno ".$nome.". Status: Recupreção,procure a secretaria";
} else {
    echo "Aluno ".$nome.". Status: Reprovado,procure a secretaria";
}

