<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Agenda PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4">
                <h3>Cadastro de Contato</h3>

                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Informe seu Nome completo">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Informe seu CPF">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe seu E-mail">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Informe uma Senha">
                    </div>

                    <button type="button" class="btn btn-primary" id="cadastrar" onclick="cadastrarContato()">Cadastrar</button>
                </form>

                <div id="status"></div>
            </div>

            <div class="col"></div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>