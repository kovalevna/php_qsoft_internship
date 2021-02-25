<pre>
<?php

$arrayStrings = [
    "firstString",
    "secondString>12",
    "thirdString",
    "forthString",
    "abcdefghijklmnop",
];

function sortString(&$string, $length = 12) {
    return strlen($string) <= $length  ? $string: substr($string, 0, 9) . "...";
}

foreach ($arrayStrings as &$string) {
    $string = sortString($string);
}

var_dump($arrayStrings);

?>
</pre>
