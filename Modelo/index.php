<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    
        $numero = $_GET['num']

    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php 
        

        
        ?>
    </section>
    
</body>
</html>