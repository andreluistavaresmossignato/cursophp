<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>

        input[type=range] {
            width: 100%;
            padding: 0px;
            font-size: 1em;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    </style>
</head>
<body>

    <?php 

        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';

    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudarValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        
      $aumento = $preco * $reaj / 100;
      $novoPreco = $preco + $aumento;      
        
    ?>
        
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto custava R$<?=number_format($preco, 2, "," , ".")?>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novoPreco, 2, "," , ".")?></strong> a partir de agora</p>
    </section>

    <script src="script.js"></script>
    
</body>
</html>