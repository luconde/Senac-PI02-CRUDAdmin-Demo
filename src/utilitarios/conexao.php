<html>
    <head>
        <title>Teste de Conectividade</title>
    </head>
    <body>
    <br>
    <h1>Teste de conectividade do banco de dados</h1>
    <br>
<?php
    // Exibe os errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Variaveis para conexao
    $mysqlhostname = "<Adicione o endereço do servidor>";
    $mysqlport = "<Adicione a porta de acesso ao banco de dados>";
    $mysqlusername = "<Adicione o usuario de acesso ao banco de dados>";
    $mysqlpassword = "<Adicione a senha de acesso ao banco de dados>";
    $mysqldatabase = "<Adicione o nome do Banco de Dados>";

    $dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;           
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    $result = $pdo->query("SELECT * FROM ADMINISTRADOR")->fetchAll();

    if($result) {
        echo "Conexao ocorreu com sucesso!";
    } else {
        echo "Nao foi possivel conectar";
    }
?>
    </body>
</html>
