<?php
header("Content-type:text/html; charset=utf8");
//importar  a classe alunos
require_once "Classes/curso.php";
//criar a instancia da classe alunos
$Curso = new Curso();
//criar a lista de alunos
$listarCursos = $Curso-> listarTodos();
//testar a lista
//var_dump($listarAlunos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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

<div class="container lista">
    <!--lista de alunos-->
    <div class="row">
        <div class="col-md-10">
            <h3>Lista de Cursos</h3>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">Novo</button>
        </div>
        <table class="table table-dark table-responsive">
            <!--    cabeca tabela -->
            <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Serie</th>
            </tr>
            </thead>
            <!--    corpo onde vai os valores-->

            <tbody>
            <!--    imprimir valores da tabela-->
            <?php if($listarCursos) :
                foreach($listarCursos as $curso) : ?>
                    <tr>
                        <td><?php echo $curso->codigo; ?></td>
                        <td><?php echo $curso->nome; ?></td>
                        <td><?php echo $curso->serie; ?></td>

                        <td>
                            <button class="btn btn-outline-success">Editar</button>
                            <button class="btn btn-outline-danger">Excuir</button>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspan="7"> Nenhum Curso Cadastrado!!!</td>
                </tr>
            <?php endif; ?>
            </tbody>

        </table>


    </div>


</div>
</body>
</html>