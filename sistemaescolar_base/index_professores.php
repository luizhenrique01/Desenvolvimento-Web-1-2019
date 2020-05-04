<?php
header("Content-type:text/html; charset=utf8");
//importar  a classe alunos
require_once "Classes/professor.php";
//criar a instancia da classe alunos
$Professor = new Professor();
//criar a lista de alunos
$listarProfessor = $Professor-> listarTodos();
//testar a lista
//var_dump($listarProfessor);

//chamando a funcao excluir passando a matricula escolhida pelo usuario
if(isset($_GET["numero"])){
    $Professor->excluir($_GET["numero"]);
}

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
        <h3>Lista de Professores
        </h3>
    </div>
    <div class="col-md-2">
        <a href="cadastrar_professor.php" class="btn btn-primary">Novo</a>
    </div>
<table class="table table-dark table-responsive">
<!--    cabeca tabela -->
    <thead>
    <tr>
        <th>Numero</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Materia</th>
        <th>Telefone</th>
        <th>Senha</th>
    </tr>
    </thead>
<!--    corpo onde vai os valores-->

    <tbody>
<!--    imprimir valores da tabela-->
<?php if($listarProfessor) :
foreach($listarProfessor as $professor) : ?>
    <tr>
        <td><?php echo $professor->numero; ?></td>
        <td><?php echo $professor->nome; ?></td>
        <td><?php echo $professor->sexo; ?></td>
        <td><?php echo $professor->email; ?></td>
        <td><?php echo $professor->endereco; ?></td>
        <td><?php echo $professor->materia; ?></td>
        <td><?php echo $professor->telefone; ?></td>
        <td><?php echo $professor->senha; ?></td>

        <td>
            <a href="alterar_professor.php?numero=<?php echo $professor->numero; ?>" class="btn btn-outline-danger"><img src="img/editar.png"></a>
            <a href="index_professores.php?numero=<?php echo $professor->numero; ?>" class="btn btn-outline-danger"><img src="img/deletar.png"></a>
        </td>
    </tr>
<?php endforeach;?>
<?php else: ?>
    <tr>
        <td colspan="7"> Nenhum Professor Cadastrado!!!</td>
    </tr>
<?php endif; ?>
    </tbody>

</table>


</div>


</div>
</body>
</html