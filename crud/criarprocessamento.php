<html>
<head>
    <title>Processamento de Criacao de Administrador</title>
</head>
<body>
    <br>
    <h1>Processamento de Criacao de Administrador</h1>
    <br>
<?php
    // Dados para conexao ao MySQL
    $mysqlhostname = "<IP ou nome do servidor>";
    $mysqlport = "<porta>";
    $mysqlusername = "<usuario>";
    $mysqlpassword = "<senha>";
    $mysqldatabase = "<nome do banco>";

    // Monta a String de Conexao ao MySQL e Conecta no banco de dados
    $dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;           
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    // Captura os valores das variaveis
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Monta o comando de inserção
    $cmdtext = "INSERT INTO ADMINISTRADOR(ADM_NOME, ADM_EMAIL, ADM_SENHA) VALUES('" . $nome . "','" . $email . "','" . $senha . "')";
    $cmd = $pdo->prepare($cmdtext);

    // Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if($status) {
        echo "Criação do Administrador com sucesso !";
    } else {
        echo "Ocorreu um erro ao inserir";
    }
?>
    <br>
    <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
</body>
</html>