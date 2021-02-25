<?php

$leftCoordinate = [-1, 0];
$rightCoordinate = [5, 8];

$point = [0, 3];

if ($leftCoordinate[0] <= $point[0] && $leftCoordinate[1] <= $point[1] && $rightCoordinate[0] >= $point[0] && $rightCoordinate[1] >= $point[1]) {
    echo "Точка в области";
} else {
    echo "Точка вне области";
}
