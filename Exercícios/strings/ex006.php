<?php 
    // string HEREDOC

    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< TESTE
        Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo esse ano de $ano?

        Abraços! \u{1F920}

        TESTE;
