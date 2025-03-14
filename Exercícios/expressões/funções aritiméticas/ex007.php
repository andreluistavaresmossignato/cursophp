<?php 

    // podemos fazer potência dessas 2 maneiras:
    $r = 5 ** 2; 
    $r = pow(5, 2);
    
    print("A resposta é $r");

    // DESVANTAGEM DO POW: não existe a ordem de precedência, mas isso pode ser resolvido usando ()

    /* ordem de precedência:
        |    ()
        |    **
        |    * / %
        v    + -
    */
?>