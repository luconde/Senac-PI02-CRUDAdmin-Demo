<html>
<head>
    <title>Login - Autenticacao</title>
</head>
<body>
    <br>
    <h1>Login - Autenticacao</h1>
    <br>
<?php
// Dados para conexao ao MySQL
$mysqlhostname = "<Adicione o endereço do servidor>";
$mysqlport = "<Adicione a porta de acesso ao banco de dados>";
$mysqlusername = "<Adicione o usuario de acesso ao banco de dados>";
$mysqlpassword = "<Adicione a senha de acesso ao banco de dados>";
$mysqldatabase = "<Adicione o nome do Banco de Dados>";


// Monstra a String de Conexao ao MySQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;           
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

// Captura o post do Usuario
$email = $_POST["email"];
$senha = $_POST["senha"];

// Realiza uma Query SQL para buscar o administrador que tenha o EMAIL e a SENHA passado pelo usuario
$admin = $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email . "' AND ADM_SENHA='" . $senha . "'")->fetchAll() ;

// Se o retorna for vazio (0), então a senha ou email estão incorretos
if( count($admin) == 0) {
    echo "Usuario ou senha invalidos";
} else {
    echo "Usuario autenticado";
}
?>
</body>
</html>