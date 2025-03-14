<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>

    <main>
        <pre>
            <?php 

                setcookie("dia-da-semana", "DOMINGO", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";
            
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV); // por padrão não existem, no online PHP tem variáveis de ambiente, usando o código abaixo, vai mostrar as variáveis de ambiente no XAMMP

                /*foreach(getenv() as $c => $v){
                    echo "<br> $c -> $v";
                } // será explicado mais adiante no curso
                */ 

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER); // será muito útil para o próximo estudo (ver pasta ex006)

                // query string = solicitação da url com parâmtros passados

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS); // todos os conteúdos das outras superglobais
            
            ?>
        </pre>
    </main>
    
</body>
</html>