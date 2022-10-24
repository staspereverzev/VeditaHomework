<?php
    $iSumOfNumbers = 0;
    $arr = [];
    $arr [] = rand(5,15);
    $arr [] = rand(5,15);
    $arr [] = rand(5,15);
    $arr [] = rand(5,15);
    $arr [] = rand(5,15); 
    print_r($arr);
    for ($i=0; $i<=4; $i++){
        if ($arr[$i] == 15) {
            print "В массиве найдено число 15";  
            break;
        }
        elseif ($arr[$i] < 8) {
            print "Найдено число меньше 8";
            break;
        }
        elseif ($arr[$i]>= 8 || $arr[$i]!=15) {
            $iSumOfNumbers += $arr[$i];
            //break;
        }
    }
    print_r($iSumOfNumbers);
?>