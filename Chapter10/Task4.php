<?php
    
    echo "<pre>"; print_r($_SERVER); echo "</pre>";
    $A = serialize($_SERVER);
    echo "<pre>"; print_r($A); echo "</pre>";
    $B = unserialize($A);
    echo "<pre>"; print_r($B); echo "</pre>";
?>