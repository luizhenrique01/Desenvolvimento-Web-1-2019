<?php
header("Content-type:text/html; charset=utf8");
//variavel
$salario = $_POST["salario"];
$emprestimo = $_POST["emprestimo"];
$quantidadeprestacao = $_POST["prestacao"];
$porcentagemsalario = $salario * 0.7;
$prestacao = $emprestimo / $quantidadeprestacao;
//logica
if ($prestacao > $porcentagemsalario){
 echo "O emprestimo não pode ser concedido";
}else{
    echo " O emprestimo pode ser concedido";
}
echo "<br><a href='index.html'>Voltar</a>";