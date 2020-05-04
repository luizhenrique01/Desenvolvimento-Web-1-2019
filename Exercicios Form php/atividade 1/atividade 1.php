<?php
$tipopgto = $_POST["tipopagamento"];
$nomeproduto = $_POST["nomeproduto"];
$precoproduto = $_POST["preco"];
$nomecliente = $_POST["cliente"];
$produtototal = 0;




if($tipopgto == "avista"){
echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa a vista: ".($precoproduto * 0.9));
} else if($tipopgto == "1parcela"){
    echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa em 1 parcela e : ".($precoproduto));
} else if($tipopgto == "2parcela"){
    echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa em 2 parcela e : ".($precoproduto/2));
} else if($tipopgto == "3parcela"){
    echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa em 3 parcela e : ".($precoproduto/3));
}  else if($tipopgto == "4parcela"){
    echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa em 4 parcela e : ".($precoproduto/4));
}  else if($tipopgto == "5parcela"){
    echo ("O " .$nomeproduto . " do(a) ".$nomecliente . " custa em 5 parcela e : ".($precoproduto/5));
}
