<?php
    function selfcount()
    {
        static $count = 0;
        $test = ["test1","test2","test3","test4","test5"];
        $count++;
        echo $count;
        if ($count == 1)
            echo "<pre>"; print_r($test[0]); echo "</pre>";
        if ($count == 2) 
            echo "<pre>"; print_r($test[1]); echo "</pre>";
        if ($count == 3)
            echo "<pre>"; print_r($test[2]); echo "</pre>";
        if ($count == 4)
            echo "<pre>"; print_r($test[3]); echo "</pre>";
        if ($count == 5)
            echo "<pre>"; print_r($test[4]); echo "</pre>";
        if ($count>5)
            $count = 0;
    }
    selfcount();
    selfcount();
    
    
    ?>