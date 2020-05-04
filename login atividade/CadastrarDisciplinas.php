<?php
$numero = $_POST["numero"];
$nome = $_POST["nome"];
$sexo = $_POST["tipo"];
$email = $_POST["email"];
$setor = $_POST["setor"];
$conteudo = $_POST["conteudo"];
$turma = $_POST["turma"];
$curso = $_POST["curso"];

echo ("Numero: ".$numero);
echo ("Nome: ".$nome);
echo ("Conteudo: ".$conteudo);
echo ("Turma: ".$turma);
echo ("Curso: ".$curso);

//CadastrarDisciplinas.html ->  Número / Nome / Conteudo / Turma / Curso