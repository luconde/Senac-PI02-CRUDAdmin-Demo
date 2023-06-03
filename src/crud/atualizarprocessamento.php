<html>
<head>
    <title>Processamento de Atualizacao de Administrador</title>
</head>
<body>
    <br>
    <h1>Processamento de Atualizacao de Administrador</h1>
    <br>
<?php
    // Dados para conexao ao MySQL
    $mysqlhostname = "<Adicione o endereço do servidor>";
    $mysqlport = "<Adicione a porta de acesso ao banco de dados>";
    $mysqlusername = "<Adicione o usuario de acesso ao banco de dados>";
    $mysqlpassword = "<Adicione a senha de acesso ao banco de dados>";
    $mysqldatabase = "<Adicione o nome do Banco de Dados>";    

    // Monta a String de Conexao ao MySQL e Conecta no banco de dados
    $dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;           
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    // Captura os valores das variaveis
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $id = $_POST["id"];

    // Monta o comando de inserção
    $cmdtext = "UPDATE ADMINISTRADOR SET ADM_NOME='" . $nome . "', ADM_EMAIL='" . $email . "', ADM_SENHA='" . $senha . "' WHERE ADM_ID=" .$id;
    $cmd = $pdo->prepare($cmdtext);

    // Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if($status) {
        echo "Atualizacao com sucesso!";
    } else {
        echo "Ocorreu um erro ao atualizacao";
    }
?>
    <br>
    <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
</body>
</html>