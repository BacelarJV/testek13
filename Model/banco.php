<?php

class ContatoController extends Controller {

    public function cadastrar() {
        if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['email']) && isset($_POST['senha'])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];


            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "testek13";

            $conn = mysqli_connect($host, $user, $password, $dbname);

            if (!$conn) {
                die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
            }

            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $sql = "INSERT INTO contatos (nome, cpf, email, senha) VALUES ('" . mysqli_real_escape_string($conn, $nome) . "', '" . mysqli_real_escape_string($conn, $cpf) . "', '" . mysqli_real_escape_string($conn, $email) . "', '" . $senhaHash . "')";

            if (mysqli_query($conn, $sql)) {
                $this->loadView('contato/sucesso');
            } else {
                $this->loadView('contato/erro', ['erro' => mysqli_error($conn)]); 
            }

            mysqli_close($conn);
        } else {
            $this->loadView('contato/cadastro');
        }
    }
}
