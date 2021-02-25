<?php

$studentCount = rand(1, 1000);

if ($studentCount % 100 >= 11 && $studentCount % 100 <= 19) {
    echo "на учебе " . $studentCount . " студентов";
} elseif ($studentCount % 10 == 1) {
    echo "на учебе " . $studentCount . " студент";
} elseif ($studentCount % 10 >= 2 && $studentCount % 10 <= 4) {
    echo "на учебе " . $studentCount . " студента";
} else {
    echo "на учебе " . $studentCount . " студентов";
}
