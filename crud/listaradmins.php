<html>
<head>
    <title>Listar os Administradores</title>
</head>
<body>
    <br>
    <h1>Listar os Administradores</h1>
    <br>
    <a href="criarform.php">Criar um novo Administrador</a>
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

    // Monta o comando de inserção
    $cmd = $pdo->query("SELECT * FROM ADMINISTRADOR") ;
?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Atualizacao</th>
            <th>Exclusao</th>            
        </tr>
<?php
    // Lista os admins
    while($linha = $cmd->fetch()) {
?>
    <tr>
        <td>
            <?php 
                echo $linha["ADM_ID"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["ADM_NOME"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["ADM_EMAIL"];
            ?>
        </td>    
        <td>
            <?php
                echo $linha["ADM_SENHA"];
            ?>
        </td>    
        <td>
            <a href="atualizarform.php?id=<?php echo $linha["ADM_ID"] ?>">Atualizar</a>
        </td>
        <td>
            <a href="excluirform.php?id=<?php echo $linha["ADM_ID"] ?>">Excluir</a>
        </td>        
    </tr>
<?php
    } // while($linha = $cmd->fetch()) 
?>
    </table>
    <br>
    <a href="../index.html">Voltar para o Indice</a>    
</body>
</html>