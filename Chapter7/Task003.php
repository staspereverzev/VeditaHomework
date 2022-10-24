Задача 3:
Присвоить переменной $iAnyIntegerNumber любое целое число.
Вывести на экран строку "число равно нулю", если $iAnyIntegerNumber = 0.   Иначе, вывести на экран строку "число не равно нулю".

В данной задаче использование if запрещено!

<?php
$iAnyIntegerNumber = 10;
$iAnyIntegerNumber = $iAnyIntegerNumber == 0 ? "Число равно нулю" : "Число не равно нулю";
echo $iAnyIntegerNumber;
?>