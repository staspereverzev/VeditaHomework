<?php
    $arArrayOfArrays = [
        [1, -2, 0, 3],
        [-2, 5, -7],
        [3],
        [0, 0, -1]
    ];
    echo "<pre>"; print_r($arArrayOfArrays); echo "</pre>";
    $sum = array();

    for ($i=0; $i<count($arArrayOfArrays); $i++) 
        //print_r($sum + $arArrayOfArrays[0][$i]);
        $sum[$i] = array_sum($arArrayOfArrays[$i]);
        //echo "sum($i) = " . array_sum($arArrayOfArrays[$i])."\n";
    
        echo "<pre>"; print_r($sum); echo "</pre>";
    array_multisort($sum,);
    echo "<pre>"; print_r($sum); echo "</pre>";
?>