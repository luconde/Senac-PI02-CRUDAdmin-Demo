<html>
    <body>
        <p>
            Banco de dados : <?php echo getenv("DB_DATABASE") ?>
        </p>
        <p>
            Host: <?php echo getenv("DB_HOST"); ?>
        </p>
        <p>
            Usuario: <?php echo getenv("DB_USER"); ?>
        </p>
        <p>
            Senha: <?php echo getenv("DB_PASSWORD"); ?>
        </p>
        <p>
            Porta: <?php echo getenv("DB_PORT"); ?>
        </p>
    </body>
</html>