<pre>
<?php

$city1 = rand(1, 1000);
$city1Radius = rand(1, 100);
$city2 = rand(1, 1000);
$city2Radius = rand(1, 100);


for ($i = 1; $i < 11; $i++) {
    $car = rand(0, 1000);
    if (abs($car - $city1) <= $city1Radius || abs($car - $city2) <= $city2Radius ) {
        echo "Машина " . $i . " едет по городу на " . $car . " км со скоростью не более 70\n";
    } else {
        echo "Машина " . $i . " едет по шоссе на " . $car . " км со скоростью не более 90\n";
    }
}
?>
</pre>
