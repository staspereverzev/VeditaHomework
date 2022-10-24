<?php
    function selfcount()
    {
        static $count = 0;
        $test = ["test1","test2","test3","test4","test5"];
        $count++;
        echo $count;
        echo "<pre>"; print_r($test[$count-1]); echo "</pre>";
        if ($count>=5)
            $count = 0;
    }
    selfcount(); 
    selfcount(); 
    selfcount();
    selfcount();
    selfcount();
    selfcount();
    selfcount();
?>