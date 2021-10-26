<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>registar utilizador</title>
    </head>
    <body>
        <h2>registo de utilizador</h2>
        </p>
        <form method="POST" action="inserir_userDB.php">
            <label for="nome_utilizador">nome de utilizador: </label>
            <input type="text" name="nome_utilizador"/>
            </p>
            <label for="password">password: </label>
            <input type="text" name="password"/>
            </p>
            <input type="submit" name="inserir_user" value="registar"/>
            <input type="reset" name="limpar" value="limpar"/>
        </form>
    </body>
</html>