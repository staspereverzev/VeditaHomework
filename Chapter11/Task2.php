<?php       
  
  $iGlobalPositiveNumber = 6;
  function sum()
  {
    global $iGlobalPositiveNumber;
    $count = 0;
    while ($count<=$iGlobalPositiveNumber):
        $sum += $count;
        $count++;
        endwhile;
    return $sum;
    }      
  echo sum();
?>