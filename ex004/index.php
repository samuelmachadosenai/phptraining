<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <?php
    echo 50 / 2 + 3 ** 2;
    ?>
    <header>
        <h1>Formulário</h1>
    </header>
    <section>
    <form action="cad.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <laber for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <input type="submit" value="Enviar">
    </form>
    </section>

    <?php
    phpinfo()

    ?>
</body>
</html>