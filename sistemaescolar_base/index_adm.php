<?php
header("Content-type:text/html; charset=utf8");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index.php">Sistemas Adiministrativo Escolar 1.0</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_alunos.php">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_professores.php">Professores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_funcionarios.php">Funcionários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_disciplinas.php">Disciplinas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
        </li>
    </ul>
</nav>

<div class="container">

    <div class="row" style="padding-top: 23px">
        <div class="col-sm-4" style="background: linear-gradient(to right, #33ccff 0%, #ffffff 100%); font-family: Roboto; font-size: 20px">
            Alunos<br> <img src="img/alunos.png" style="padding-right: 10px"> <label style="padding-left: 100px;font-size: 50px">387</label>
        </div>

        <div class="col-sm-4" style="background: linear-gradient(to right, #33ccff 0%, #ffffff 100%); font-family: Roboto; font-size: 20px">
            Professores<br> <img src="img/professor.png" style="padding-right: 10px"> <label style="padding-left: 100px;font-size: 50px">12</label>
        </div>

        <div class="col-sm-4" style="background: linear-gradient(to right, #33ccff 0%, #ffffff 100%); font-family: Roboto; font-size: 20px">
            Cursos<br> <img src="img/curso.png" style="padding-right: 10px"> <label style="padding-left: 100px;font-size: 50px">5</label>
        </div>

    </div>
    <div class="row" style="padding-top: 50px">
<br>
        <div class="col-sm-4" style="background: linear-gradient(to right, #33ccff 0%, #ffffff 100%); font-family: Roboto; font-size: 20px">
            Disciplinas<br> <img src="img/disciplina.png" style="padding-right: 10px"> <label style="padding-left: 100px;font-size: 50px">20</label>
        </div>
        <div class="col-sm-4" style="background: linear-gradient(to right, #33ccff 0%, #ffffff 100%); font-family: Roboto; font-size: 20px">
            Funcionarios<br> <img src="img/funcionario.png" style="padding-right: 10px"> <label style="padding-left: 100px;font-size: 50px">89</label>
        </div>
        <div class="col-sm-4">
        </div>

    </div>


</div>
</body>
</html