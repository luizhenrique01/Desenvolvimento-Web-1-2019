<?php
//aceitar acento
header("Content-type:text/html; charset=utf8");
//variaveis
$preco1 = 8.99;
$preco2 = 9.99;
$preco3 = 11.99;
$preco4 = 12.99;
$preco5 = 13.99;
$preco6 = 14.99;
$preco7 = 15.99;
$preco8 = 16.99;
$preco9 = 17.00;
$preco10 = 18.99;
$nome1 = "Brinco:";
$nome2 = "Anel:";
$nome3 = "Queijo:";
$nome4 = "Celular:";
$nome5 = "Bazoka:";
$nome6 = "AK:";
$nome7 = "Diamante:";
$nome8 = "Ouro:";
$nome9 = "Ferro:";
$nome10 = "TNT:";
//resultado
echo ("<body bgcolor=#a52a2a>");
echo("<h1 style='color:whitesmoke; font-size: 50;font-family: Arial'>Preço Dos Itens e Valores</h1>");
echo ("<br>".$nome1 . " " .$preco1);
echo ("<br>".$nome2 . " " .$preco2);
echo ("<br>".$nome3 . " " .$preco3);
echo ("<br>".$nome4 . " " .$preco4);
echo ("<br>".$nome5 . " " .$preco5);
echo ("<br>".$nome6 . " " .$preco6);
echo ("<br>".$nome7 . " " .$preco7);
echo ("<br>".$nome8 . " " .$preco8);
echo ("<br>".$nome9 . " " .$preco9);
echo ("<br>".$nome10 . " " .$preco10);
 echo("<br> <h1> Preço total dos produtos </h1>");
echo ("<br> A soma dos preços: ".($preco1 + $preco2 + $preco3 + $preco4 + $preco5 + $preco6 + $preco7 + $preco8 + $preco9 + $preco10));
echo ("<br> <img src='imagens/anel.jfif' width='300px' height='300'>");
?>


