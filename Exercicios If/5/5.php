<?php
//variavel
$idade = $_POST["n1"];
//logica
if($idade >= 18){
    echo "O nadador e considerado Adulto";
} else if ($idade >= 14 && $idade < 18){
    echo "O nadador e considerado Juvenil";
} else if ($idade >=9 && $idade < 14){
    echo "O nadador e considerado Infantil";
} else if ($idade < 9){
    echo "O nadador e considerado Mirim";
}
echo "<br><a href='index.html'>Voltar</a>";