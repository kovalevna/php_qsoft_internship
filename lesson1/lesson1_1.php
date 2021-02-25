<pre>
<?php
$notEmptyString = "Привет";
var_dump($notEmptyString);

$isTrue = true;
var_dump($isTrue);

$number = 15;
var_dump($number);

$floatNumber = 1.5;
var_dump($floatNumber);

?>
</pre>

// $Firstname - нет loweCamelCase
// $__FILE__ - использование константного имени
// $temp = 'Вася' - непонятно использование переменной temp

<?php
$firstString = "Первая";
$secondString = "Вторая";
$thirdString = "Третья";

?>

<pre>
<?php

echo $firstString . $secondString . $thirdString . "\n";
echo $secondString . $firstString . $thirdString . "\n";
echo $thirdString . $secondString . $firstString;

?>
</pre>

