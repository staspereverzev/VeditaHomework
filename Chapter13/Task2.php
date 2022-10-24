<?php
    $nomer = "84950102030";
    echo $nomer."</br>";
    //"8 (495) 010-20-30"
    
    $nomer = substr($nomer, 0, 1). " (". substr($nomer, 1, 3). ") " .substr($nomer, 4, 3). " ". substr($nomer, 6, 2). " ". substr($nomer, 8, strlen($nomer));
    echo $nomer;
?>