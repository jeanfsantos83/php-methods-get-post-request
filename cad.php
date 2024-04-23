<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
            // var_dump($_GET);
            // var_dump($_POST);
            // var_dump($_REQUEST); // $_GET - $_POST - $_COOKIES
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; 
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é o meu site.</p>"
        ?>
        <p><a href="index.html">Voltar para a página anterior</a></p>
    </main>
</body>
</html>