<?php 

    $res = 50 / 2 + 3 ** 2;
    echo "O resultado é $res ";

    $res = 50 / (2 + 3) ** 2;
    echo "Agora o resultado é $res ";

    /* ordem de precedência:
        |    ()
        |    **
        |    * / %
        v    + -
    */

?>