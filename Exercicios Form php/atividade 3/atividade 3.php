<?php
$nome =  $_POST["nome"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$endereco =  $_POST["endereco"];
$rendamensal = $_POST["rendamensal"];
$nomecurso = $_POST["nomecurso"];
$valorcurso = $_POST["valorcurso"];


if($rendamensal <= 1000 ){
    echo ("Aluno(a) " .$nome. ", com renda de R$" .$rendamensal. 
	"<br> Estudante do curso de " .$nomecurso. ", que tem um valor de R$" .$valorcurso. 
	"<br> Tera uma bolsa de 15%, e o novo valor a ser pago com a ser pago com a bolsa e R$".($valorcurso * 0.85));
} else if ($rendamensal > 1000 && $rendamensal <= 2000){
    echo ("Aluno(a) " .$nome. ", com renda de R$" .$rendamensal. 
	"<br> Estudante do curso de " .$nomecurso. ", que tem um valor de R$" .$valorcurso. 
	"<br> Tera uma bolsa de 10%, e o novo valor a ser pago com a ser pago com a bolsa e R$".($valorcurso * 0.90));
} else if ($rendamensal > 2000 && $rendamensal <= 3000){
    echo ("Aluno(a) " .$nome. ", com renda de R$" .$rendamensal. 
	"<br> Estudante do curso de " .$nomecurso. ", que tem um valor de R$" .$valorcurso. 
	"<br> Tera uma bolsa de 8%, e o novo valor a ser pago com a ser pago com a bolsa e R$".($valorcurso * 0.92));
} else if ($rendamensal > 3000 && $rendamensal <= 5000){
    echo ("Aluno(a) " .$nome. ", com renda de R$" .$rendamensal. 
	"<br> Estudante do curso de " .$nomecurso. ", que tem um valor de R$" .$valorcurso. 
	"<br> Tera uma bolsa de 6%, e o novo valor a ser pago com a ser pago com a bolsa e R$".($valorcurso * 0.94));
} else if ($rendamensal > 5000){
    echo ("Aluno(a) " .$nome. ", com renda de R$" .$rendamensal. 
	"<br> Estudante do curso de " .$nomecurso. ", que tem um valor de R$" .$valorcurso. 
	"<br> Tera uma bolsa de 3%, e o novo valor a ser pago com a ser pago com a bolsa e R$".($valorcurso * 0.97));
}






/* O programa deve exibir o nome do aluno, sua renda, o nome do curso, o valor do
curso,  qual a porcentagem de bolsa e qual será o valor pago de mensalidade no curso.
*Até 1000
Até 2000
Até 3000
Até 5000
Acima de 5000*/