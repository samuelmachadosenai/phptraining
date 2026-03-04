<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Resultado
        </h1>
    </header>

    <main>
        <?php
            $n = $_GET["numero"];
            echo "numero: $n<br>";
    
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>