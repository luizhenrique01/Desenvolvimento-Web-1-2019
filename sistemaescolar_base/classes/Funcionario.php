<?php
//importar arquivos (include/ require)
//include importa arquivo,da mensagem ed erro mas nao para a edecução
//require importa arquivo, da mensagem de erro para execucao
//require_once / incluse_once -> importar uma unica vez

require_once "Conexao.php";

//funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
//Funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Setor / Telefone / Senha

class Funcionario
{
    //atributos
    public $numero;
    public $nome;
    public $sexo;
    public $email;
    public $endereco;
    public $setor;
    public $telefone;
    public $senha;

    //metodos
    //listar todos alunos (select * from alunos)
    public function listarTodos()
    {

        //validar execucao do codigo
        try {
            //instacniar conexao
            $bd = new Conexao();

            //criar o objetivo contendo conexao PDO
            $con = $bd->conectar();

            //criar comando dql para enviar banco de dados
            $sql = $con->prepare("select * from funcionario");

            //executar o comando
            $sql->execute();

            //testar se retornou valores
            if ($sql->rowCount() > 0) {
                //se tem alguma coisa devolver resultado ao html
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
                //fetchall devolve o resultado no formato array, linhas e colunas
            }

        } catch (PDOException $msg) {
            echo "Não foi possivel listar os funcionarios: " . $msg->getMessage();
        }

    }



        public function excluir($numero)
        {
            try {
                //verificar se recebeu a matricula
                if (isset($numero)) {
                    //preencher o atributo com o valor enviado pelo formulario
                    $this->numero = $numero;
                    //instanciar  classe conexao
                    $bd = new Conexao();
                    //criar o objeto contendo a conexao
                    $con = $bd->conectar();
                    //cria o comando sql para enviar ao banco
                    $sql = $con->prepare("delete from funcionario where numero = ?");
                    //executar o comando passando o parametro matricula
                    $sql->execute(array($this->numero));
                    //testar se retornou os valores
                    if ($sql->rowCount() > 0) {
                        //se o aluno foi excluido retornar para tela index alunos
                        header("location:index_funcionarios.php");
                    }
                } else { //se o usuario nao selecionou no codigo para excluir
                    //retornar para index alunos
                    header("location:index_funcionarios.php");
                }
            } catch (PDOException $msg) {
                echo "Não foi possivel excluir os funcionarios: " . $msg->getMessage();
            }
        }
//funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
        public function alterar()
        {
            try {
                //verificar se recebeu valores do formulario
                if (isset($_POST["Salvar"])) {
                    $this->numero = $_GET["numero"];
                    $this->nome = $_POST["nome"];
                    $this->sexo = $_POST["sexo"];
                    $this->email = $_POST["email"];
                    $this->endereco = $_POST["endereco"];
                    $this->setor = $_POST["setor"];
                    $this->telefone = $_POST["telefone"];
                    $this->senha = $_POST["senha"];
                    //istanciar classe conexao
                    $bd = new Conexao();
                    //criar o obejeto contendo a conexao
                    $con = $bd->conectar();
                    //cria o comando sql para enviar ao banco passando parametros ?
                    $sql = $con->prepare("update funcionario set nome = ?,sexo = ?,email = ?,
                                  endereco = ?,setor = ?,telefone = ?,senha = ? where numero = ?");
                    //executar comando passando os valores recebidos do formulario
                    $sql->execute(array(
                        $this->nome,
                        $this->sexo,
                        $this->email,
                        $this->endereco,
                        $this->setor,
                        $this->telefone,
                        $this->senha,
                        $this->numero
                    ));
                    //testar se retornou valores
                    if ($sql->rowCount() > 0) {
                        //se conseguiu alterar no banco de dados retornar para pagina index_alunos
                        header("location:index_funcionarios.php");
                    }
                } else {//se o usuario nao preencheu os valores devolver para o index
                    header("location:index_funcionarios.php");
                }
            } catch (PDOException $msg) {
                echo "Não foi possivel alterar o funcionario: " . $msg->getMessage();
            }
        }
//funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
        public function listarID($numero)
        {
            try {
                if (isset($numero)) {
                    $this->numero = $numero;
                    //instanciar classe conexao
                    $bd = new Conexao();
                    //criar o objeto contendo a conexao
                    $con = $bd->conectar();
                    //cria  o comando sql para enviar ao banco
                    $sql = $con->prepare("select * from funcionario where numero = ? ");
                    //executar o comando
                    $sql->execute(array($this->numero));
                    //testar se retornou valores
                    if ($sql->rowCount() > 0) {
                        //se tem resultado devolver dados do aluno ao html
                        return $result = $sql->fetchObject();
                        //techall -> linhas///colunas
                    }
                }
            }catch (PDOException $msg){
                echo "Não foi possivel listar o funcionario: ".$msg->getMessage();
            }
        }
//funcionario ->  Numero / Nome / Sexo / Email / Endereço Completo/ Matéria / Telefone / Senha
        public function inserir(){
            try {

                //verificar se recebeu os valoers do formulario
                if (isset($_POST["nome"]) && isset($_POST["sexo"])) {
                    $this->nome = $_POST["nome"];
                    $this->sexo = $_POST["sexo"];
                    $this->email = $_POST["email"];
                    $this->endereco = $_POST["endereco"];
                    $this->setor = $_POST["setor"];
                    $this->telefone = $_POST["telefone"];
                    $this->senha = $_POST["senha"];
                    //instanciar classe conexao
                    $bd = new Conexao();
                    //criar o objeto contendo a conexao
                    $con = $bd->conectar();
                    //cria o comando sql para enviar ao banco passando parametros ?
                    $sql = $con->prepare("insert into funcionario(numero,nome,sexo,email,endereco,setor,telefone,senha)
                values(null,?,?,?,?,?,?,?)");
                    //executar o comando passando os valores recebidos do formulario
                    $sql->execute(array(
                        $this->nome,
                        $this->sexo,
                        $this->email,
                        $this->endereco,
                        $this->setor,
                        $this->telefone,
                        $this->senha
                    ));
                    var_dump($sql->errorInfo());
                    //testar se retornou os valores
                    if ($sql->rowCount() > 0) {
                        //se conseguiu gravor no banco de dados e retornar index
                        header("location:index_funcionarios.php");
                    }
                } else {//se o usuario nao preencheu
                    header("location:index_funcionarios.php");
                }
            }catch(PDOException $msg) {
                echo "Não foi possivel inserir o funcionario: ".$msg->getMessage();}
        }

}