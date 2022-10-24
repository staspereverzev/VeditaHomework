<?php
    function summa($n)
    {
    if ($n <= 0)     
        return 0;
    else    
        return $n + summa($n - 1);
    }
    echo summa(5);
?>