<html>
<head>
    <title>Processamento de Exclusao de Administrador</title>
</head>
<body>
    <br>
    <h1>Processamento de Exclusao de Administrador</h1>
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
    $id = $_POST["id"];

    // Monta o comando de inserção
    $cmdtext = "DELETE FROM ADMINISTRADOR WHERE ADM_ID=" .$id;
    $cmd = $pdo->prepare($cmdtext);

    // Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if($status) {
        echo "Exclusao com sucesso!";
    } else {
        echo "Ocorreu um erro ao excluir";
    }
?>
    <br>
    <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
</body>
</html>