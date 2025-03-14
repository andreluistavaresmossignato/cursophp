<?php 

    $nome = 'André \u{1F920}';
    echo "$nome ";

    $nome = "André \u{1F920}";
    echo "$nome ";

    /*
    "" = interpreta ações como variáveis e emojis unicode

    '' = NÃO interpreta nada de especial, apenas mostra exatamente o que foi digitado

    (essa regra também se aplica dentro de variáveis)
    */

?>