<?php
$num1 =  $_POST["num1"];
$num2 = $_POST["num2"];

//logica
if($num1 == $num2){
    echo "A senha está correta";
}else {
  echo "A senha está incorreta,verifique e tente novamente";
}
echo "<br><a href='index.html'>Voltar</a>";

header("Content-type:text/html; charset=utf8");