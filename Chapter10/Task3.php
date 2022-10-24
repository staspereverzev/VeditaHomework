<?php
    $string = "5;9;1;aa;3;ab;1;3;;;ccccc;0";
    $stringArr = explode(";", $string, 12);
    $newstringArr = array();
    print_r($stringArr);
    foreach ($stringArr as $element)
        if (is_numeric($element)){
            array_push($newstringArr, $element);
            echo $element;}
    echo "<pre>"; print_r($newstringArr); echo "</pre>";
    $newstring = implode(";", $newstringArr);
    print_r($newstring);
?>