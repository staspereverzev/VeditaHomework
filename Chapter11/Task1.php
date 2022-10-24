<?php 
    function myfunc(float $fst, float $snd, float $thrd) : float
    {   
        global $thrd;
        $thrd = $fst + $snd;
        return $fst * $snd;
    }
$thrd = 0;
echo myfunc(1.3, 2.5, $thrd);
echo $thrd;
?>