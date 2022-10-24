<?php
    $sAnyText = "    https://example.com/?var=5     ";
    //$sAnyText = "    https://example.com/?var=5     ";
    $sAnyText = trim($sAnyText);
    print_r($sAnyText);
    echo "<pre>"; echo $sAnyText[2]; echo "</pre>";
    if (strpos($sAnyText, "?") != false)
        echo strlen($sAnyText);
    $sAnyText = str_replace("?", "!!!!!!", $sAnyText);
    echo "<pre>"; echo $sAnyText; echo "</pre>";  
    echo $sAnyText."</br>";
    echo $sAnyText[2]."</br>";
?>