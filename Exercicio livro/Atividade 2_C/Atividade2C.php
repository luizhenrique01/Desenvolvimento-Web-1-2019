<?php
header("Content-type:text/html; charset=utf8");
$nome =  $_POST["nome"];
$preco = $_POST["preco"];
$desconto10 =  $preco - ($preco * 0.10);
$desconto5 = $preco - ($preco * 0.05);
if($preco > 100 ){
    echo "O valor a ser pago é: ".$desconto10;
}else {
  echo  "O valor a ser pago é: ".$desconto5;
}
echo "<br><a href='index.html'>Voltar</a>";