<!DOCTYPE html>
<html lang="pt-br">
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
            $r = $_GET["reais"];
            $dol = $r / 5.23;
            $dol = round($dol, 2);

            echo "Seu dinheiro equivale a $dol dólares";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>