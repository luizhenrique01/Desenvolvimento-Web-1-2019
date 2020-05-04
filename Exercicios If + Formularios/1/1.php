<?php
header("Content-type:text/html; charset=utf8");
//variavel
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];
$total = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
//logica

if ($total >= 7){
    echo "Aluno Aprovado";
}else if($total >= 5 || $total < 7){
    echo  "Aluno de exame final";
}else if($total < 5){
    echo "Aluno reprovado";
}

echo "<br><a href='index.html'>Voltar</a>";